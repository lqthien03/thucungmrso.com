<?php

namespace App\Http\Controllers;
use App\Notifications\OrderPlaced;
use App\Mail\OrderConfirmation;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_Item;
use App\Models\Cart_Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\User;
use App\Models\Payment;
class CartController extends Controller
{
    public function index(){
        // Kiểm tra xem người dùng có đăng nhập không
        if (Auth::check()) {
            $userId = Auth::id();
            $category_level1_id = Category_level1::all();
            $category_level2_id = Category_level2::all();
            $user = User::where('id',$userId)->first();
            return view('pages.cart',compact('category_level1_id','category_level2_id', 'user'));
        } else {
            return redirect('/login');
        }
    }
public function addToCart(Request $request, $productId)
{
    $product = Product::find($productId);

    if (!$product) {
        abort(404);
    }

    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (Auth::check()) {
        $user = Auth::user();

        // Nếu đã đăng nhập, lưu giỏ hàng vào cơ sở dữ liệu
        $cartItem = $user->cartItems()->where('product_id', $productId)->first();

        if (isset($cartItem)) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $cartItem->update([
                'quantity' => $cartItem->quantity + 1,
            ]);


        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
            $user->cartItems()->create([
                'product_id' => $productId,
                'quantity' => 1,
                'paid' => false,
            ]);


        }
        return redirect()->route('home')->with('success','Product added to cart successfully!');
    } else {
        // Nếu chưa đăng nhập, lưu giỏ hàng vào session
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $productId => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'paid' => false,
                ],
            ];
            session()->put('cart', $cart);

            return redirect()->route('home')->with('success', 'Product added to cart successfully!');
        }

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('home')->with('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
    }
}
public function payment(Request $request)
{
    // Validate dữ liệu từ request
    $request->validate([
        'ten' => 'required|string',
        'dienthoai' => 'required|string',
        'email' => 'required|email',
        'city' => 'required|string',
        'district' => 'required|string',
        'wards' => 'required|string',
        'diachi' => 'required|string',
        'yeucaukhac' => 'required|string',
        'products' => 'required|array',
        'total_amount' => 'required|numeric',
        'payments' => 'required|in:12,13',
    ]);

    $productIds = [];
    if (Auth::check()) {
        $userId = Auth::id();

        $products = $request->input('products');
        foreach ($request->input('products') as $product) {
            // Kiểm tra xem trường 'id' có tồn tại trong sản phẩm hay không
            if (isset($product['id'])) {
                $productIds[] = $product['id'];
            }
        }

        // Kiểm tra và đảm bảo trường 'products' là mảng
        $requestData = $request->all();
        // $requestData['product_ids'] = $productIds;

        if (!is_array($requestData['products'])) {
            // Nếu không phải là mảng, chuyển đổi thành mảng
            $requestData['products'] = [$requestData['products']];
        }

        // Lưu thông tin thanh toán vào bảng payments
        $payment = Payment::create([
            'user_id' => $request->input('user_id'), // Sử dụng $userId ở đây
            'ten' => $request->input('ten'),
            'dienthoai' => $request->input('dienthoai'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'wards' => $request->input('wards'),
            'diachi' => $request->input('diachi'),
            'yeucaukhac' => $request->input('yeucaukhac'),
            'products' => json_encode($products), // Lưu thông tin sản phẩm dưới dạng JSON
            'total_amount' => $request->input('total_amount'),
            'payments' => $request->input('payments'),
        ]);
        // Cart_Item::where('user_id', Auth::id())->update(['paid' => true]);
        User::find($userId)->cartItems()->delete();
        return response()->json(['payment_id' => $payment->id, 'success' => true]);


    }
    return redirect()->route('home')->with('success', 'Product added to cart successfully!');
}


public function removeFromCart($productId)
{
    $cart = new Cart_Item();
    $removed = $cart->remove($productId);

    if ($removed) {
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    return redirect()->back()->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng.');
}
public function updateCartItem(Request $request)
{
    // Lấy dữ liệu từ request
    $cartItemId = $request->input('cart_item_id');
    $newQuantity = $request->input('new_quantity');

    // Gọi hàm xử lý cập nhật số lượng và tính toán thành tiền ở đây
    $result = $this->processUpdateCartItem($cartItemId, $newQuantity);

    // Trả về phản hồi
    return response()->json($result);
}

private function processUpdateCartItem($cartItemId, $newQuantity)
{
    // Xử lý cập nhật số lượng và tính toán lại thành tiền ở đây
    $cartItem = CartItem::find($cartItemId);
    if (!$cartItem) {
        return ['success' => false];
    }

    // Cập nhật số lượng của item trong giỏ hàng
    $cartItem->quantity = $newQuantity;
    $cartItem->save();

    // Tính toán lại thành tiền
    $newTotalPrice = $cartItem->product->new_price * $newQuantity;

    // Trả về phản hồi (đã cập nhật số lượng và thành tiền mới)
    return [
        'success' => true,
        'new_quantity' => $newQuantity,
        'new_total_price' => $newTotalPrice,
        // Các dữ liệu khác cần thiết để cập nhật giao diện
    ];
}
}


