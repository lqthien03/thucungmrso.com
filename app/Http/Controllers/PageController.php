<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_1;
use App\Models\Category_2;
use App\Models\Banner;
use App\Models\User;

use App\Models\Blog;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function index()
    {
        $user = Session::get('user'); // Lấy thông tin người dùng từ Session
$cart = Session::get('cart', []);
$banner = Banner::all();
$new = Product::orderBy('created_at', 'desc')->take(5)->get();
        $fordog = Product::where('category_1_id',2)->take(8)->get();
        $forcat = Product::where('category_1_id',3)->take(8)->get();
        $forchick = Product::where('category_1_id','1')->take(8)->get();
        $forrice = Product::where('category_1_id',6)->take(8)->get();
        $forfarm = Product::where('category_1_id', 5)->take(5)->get();
        $user_comment = User::all();
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        $comment = Comment::all();
        $blog = Blog::all()->take(2);
        $products = Product::all();
        return view('pages.home', compact('new', 'fordog','forcat','forchick','forrice','forfarm','user','cart','category_1','category_2','banner','blog','comment','user_comment','products'));
    }

    public function addToCart(Request $request, Product $product)
    {
        // Assuming you have a logged-in user, you can get the user's cart
        $cart = auth()->user()->cart;

        // Attach the product to the cart
        $cart->products()->attach($product);

        return redirect()->route('pages.home')->with('success', 'Product added to cart');
    }
    public function introduce(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.introduce', compact('category_1', 'category_2'));
    }

    public function service(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.service', compact('category_1', 'category_2'));
    }
    public function blog(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        $blog = Blog::all();
        return view('pages.blog', compact('category_1', 'category_2','blog'));
    }
    public function recruitment(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.recruitment', compact('category_1', 'category_2'));
    }
    public function contact(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.contact', compact('category_1', 'category_2'));
    }
    public function shopguide(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.policy.shopguide', compact('category_1', 'category_2'));
    }
    public function returnpolicy(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.policy.returnpolicy', compact('category_1', 'category_2'));
    }
    public function warrantypolicy(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.policy.warrantypolicy', compact('category_1', 'category_2'));
    }
    public function privacypolicy(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.policy.privacypolicy', compact('category_1', 'category_2'));
    }
    public function paymentpolicy(){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        return view('pages.policy.paymentpolicy', compact('category_1', 'category_2'));
    }
    public function category1($id){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        $product = Product::where('category_1_id',$id)->get();
        return view('pages.product', compact('category_1', 'category_2','product'));
    }
    public function category2($id){
        $category_1 = Category_1::all();
        $category_2 = Category_1::all();
        $product = Product::where('category_2_id',$id)->get();
        return view('pages.product', compact('category_1', 'category_2','product'));
    }
    public function product(){
        $product = Product::all();
        return view('pages.product',compact('product'));
    }
}
