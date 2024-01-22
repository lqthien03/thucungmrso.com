<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }else{
            $user = 0;
        }
        // $user = Session::get('user'); // Lấy thông tin người dùng từ Session
$cart = Session::get('cart', []);
$banner = Banner::all();
$new = Product::orderBy('created_at', 'desc')->take(5)->get();
        $fordog = Product::where('category_level1_id',2)->take(8)->get();
        $forcat = Product::where('category_level1_id',3)->take(8)->get();
        $forchick = Product::where('category_level1_id','1')->take(8)->get();
        $forrice = Product::where('category_level1_id',6)->take(8)->get();
        $forfarm = Product::where('category_level1_id', 5)->take(5)->get();
        $user_comment = User::all();
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level2::all();
        $comment = Comment::all();
        $blog = Blog::all()->take(2);
        $products = Product::all();
        return view('pages.home', compact('new', 'fordog','forcat','forchick','forrice','forfarm','user','cart','category_level1_id','category_level2_id','banner','blog','comment','user_comment','products'));
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
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.introduce', compact('category_level1_id', 'category_level2_id','user'));
    }

    public function service(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.service', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function blog(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        $blog = Blog::all();
        return view('pages.blog', compact('category_level1_id', 'category_level2_id','blog','user'));
    }
    public function recruitment(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.recruitment', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function contact(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.contact', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function shopguide(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.policy.shopguide', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function returnpolicy(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.policy.returnpolicy', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function warrantypolicy(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.policy.warrantypolicy', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function privacypolicy(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.policy.privacypolicy', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function paymentpolicy(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        return view('pages.policy.paymentpolicy', compact('category_level1_id', 'category_level2_id','user'));
    }
    public function category1($id){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        $product = Product::where('category_level1_id',$id)->get();
        return view('pages.product', compact('category_level1_id', 'category_level2_id','product','user'));
    }
    public function category2($id){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level1::all();
        $product = Product::where('Category_level2_id',$id)->get();
        return view('pages.product', compact('category_level1_id', 'category_level2_id','product','user'));
    }
    public function product(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $product = Product::all();
        return view('pages.product',compact('product','user'));
    }
}
