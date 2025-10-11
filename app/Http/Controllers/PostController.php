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
      
      
      
      $imagepath = null;
      if($request->hasFile('image')){
        $imagepath=$request->file('image')->store('assets','public');
      }
      $title=$request->title;
      $description=$request->description;
      $description_detail=$request->detail;

      Post::create([
        'title'=>$title,
        'image'=> $imagepath,
        'description'=>$description,
        'description_detail'=>$description_detail,
        'category_id'=>$idCategorie
      ]);

      /*$posts=  Post::all();
      return view('admin.Posts.ajouterPost',['posts'=>$posts]);*/
      
      return redirect()->route('posts.index',$idCategorie);




    }
    public function delete($idpost,$idCategory){

        $post=Post::findOrFail($idpost)->first();
        $post->delete();
        return redirect()->route('posts.index',$idCategory)->with('status','suppression de la post succes ');
    }
}
