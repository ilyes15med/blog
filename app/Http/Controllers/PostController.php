<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    //
    public function index($id){

        $categorie = Category::findOrFail($id);

        $posts=Post::all();
        return view('admin.Posts.ajouterPost',[
            'categorie'=>$categorie,
            'posts'=>$posts
        ]);



    }
    public function showform($id){
        $categorie=Category::findOrFail($id);
     

        return view('admin.Posts.formRemplir',['category'=>$categorie]);



    }
    public function store(Request $request,$idCategorie){
      $title=$request->title;
      $image=$request->image;
      $description=$request->description;
      $description_detail=$request->detail;
      Post::create([

        'title'=>$title,
        'image'=>$image,
        'description'=>$description,
        'description_detail'=>$description_detail,
        'category_id'=>$idCategorie

      ]);

      /*$posts=  Post::all();
      return view('admin.Posts.ajouterPost',['posts'=>$posts]);*/
      
      return redirect()->route('posts.index',$idCategorie);




    }
}
