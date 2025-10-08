<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    
    public function showform(){
        return view('admin.Posts.formRemplir');



    }
}
