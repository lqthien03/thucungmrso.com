<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_1;
use App\Models\Category_2;
use App\Models\Blog;

class BlogController extends Controller
{
    public function detail($link){
        $category_1 = Category_1::all();
        $category_2 = Category_2::all();
        $detail = Blog::where('link',$link)->firstOrFail();
        $bloglink = $detail->link;
        $blog = Blog::where('link', '!=', $bloglink)->get();
        return view('pages.blog.detail-blog', compact('detail','category_1','category_2','blog'));
    }
}
