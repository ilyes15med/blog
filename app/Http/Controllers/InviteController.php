<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Category;
use App\Models\Post;

class InviteController extends Controller
{
    //
    public function index(){
        $posts=DB::table('posts')
        ->join('categories','categories.id','=','posts.category_id')
        ->select('posts.title','posts.updated_at','posts.image','posts.description','categories.categoriePere','categories.categorieFils')
        ->get();
        return view('welcome',['posts'=>$posts]);

    }
}
