<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogAjaxController extends Controller
{
    public function sortBlogs(){
        // return $data =  Blog::with(['blogdetail','comments','user'])->get();    // All
        $data =  Blog::with('user')->get();
        // dd($data);
        return $data;
    }

    public function singleBLog($id){
        $blog = Blog::with(['blogdetail','comments','user'])->find($id);
        return $blog;
    }
}
