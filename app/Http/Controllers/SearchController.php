<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category_level1;
use App\Models\Category_level2;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $product = Product::where('tittle', 'like', '%' . $keyword . '%')->get();
                    //  $policy = Policy::all();
                    $category_level1_id = Category_level1::all();
                    $category_level2_id = Category_level1::all();
        return view('pages.product', compact('product','category_level1_id','category_level2_id'));
    }
}
