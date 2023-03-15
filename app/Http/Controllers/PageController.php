<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getPost(){
        $post = post::get();
        return view('welcome',['posts'=>$post]);
    }

    public function loginPage(){
        return view('admin.login');
    }

    public function adminPage(){
        return view('admin.admin');
    }
}
