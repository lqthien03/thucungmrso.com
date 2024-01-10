<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
{
    $this->middleware('auth.check', ['only' => ['addToCart']]);
}
    public function index(){
        return view('cart');
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

        if ($cartItem) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $cartItem->update([
                'quantity' => $cartItem->quantity + 1,
            ]);
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
            $user->cartItems()->create([
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
    } else {
        // Nếu chưa đăng nhập, lưu giỏ hàng vào session
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $productId => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
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

        return redirect()->route('home')->with('success', 'Product added to cart successfully!');
    }
}
}
