<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_level1;
use App\Models\Category_level2;
use App\Models\Blog;

class BlogController extends Controller
{
    public function detail($link){
        $category_level1_id = Category_level1::all();
        $category_level2_id = Category_level2::all();
        $detail = Blog::where('link',$link)->firstOrFail();
        $bloglink = $detail->link;
        $blog = Blog::where('link', '!=', $bloglink)->get();
        return view('pages.blog.detail-blog', compact('detail','category_level1_id','category_level2_id','blog'));
    }
}
