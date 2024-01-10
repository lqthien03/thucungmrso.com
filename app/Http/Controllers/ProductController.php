<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category_1;
use App\Models\Category_2;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function detail($link){
        $category_1 = Category_1::all();
        $category_2 = Category_2::all();
        $detail = Product::where('link',$link)->firstOrFail();
        $cungloai = $detail->category_1_id;
        $productId = $detail->id;
        $spcungloai = Product::where('category_1_id',$cungloai)->where('id', '!=', $productId)->get();
        return view('pages.product.detail-product', compact('detail','category_1','category_2','spcungloai'));
    }



}
