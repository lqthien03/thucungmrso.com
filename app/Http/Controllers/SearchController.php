<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category_1;
use App\Models\Category_2;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $product = Product::where('tittle', 'like', '%' . $keyword . '%')->get();
                    //  $policy = Policy::all();
                    $category_1 = Category_1::all();
                    $category_2 = Category_1::all();
        return view('pages.product', compact('product','category_1','category_2'));
    }
}
