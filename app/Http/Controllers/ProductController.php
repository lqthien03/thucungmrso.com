<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_level1;
use App\Models\Category_level2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ProductController extends Controller
{


    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $products = Product::all();
        return view('products.index', compact('products','user'));
    }
    public function detail($link){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id',$userId)->first();
        }
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level2::all();
        $detail = Product::where('link',$link)->firstOrFail();
        $cungloai = $detail->category_level1_id;
        $productId = $detail->id;
        $spcungloai = Product::where('category_level1_id',$cungloai)->where('id', '!=', $productId)->get();
        return view('pages.product.detail-product', compact('detail','category_level1_id','category_level2_id','spcungloai','user'));
    }



}
