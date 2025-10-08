<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;




class CategoryController extends Controller
{
    //
    public function index(){
        $categoryDB=Category::all();
        return view('admin.ControlePanel',['categories'=>$categoryDB]);
        
    }
    public function Showform(){
      

        return view('admin.Category');

    }
    public function store(Request $request){
        
        $categoriePere=$request->Categorie_Pere;
        $categorieFils=$request->Categorie_Fils;
        
        Category::create([

          
           'categoriePere'=>$categoriePere,
           'categorieFils'=>$categorieFils,



        ]);
        return redirect()->route('categorie.index');


    }
    public function destroy($id){

        $deleteCategorie = Category::where('id',$id)->delete();
        $Category=Category::all();
       

      
        return redirect('/Category/index');


    } 
    public function edit($id){

        $categorie=Category::findOrFail($id);
        return view('admin.editCategorie',['categorie'=>$categorie]);
    }

    public function update(Request $request,$idC){
        $categoriePere=$request->Categorie_Pere;
        $categorieFils=$request->Categorie_Fils;
        $Category=Category::findOrFail($idC);
        $Category->update([

            'categoriePere'=>$categoriePere,
            'categorieFils'=>$categorieFils
        ]);
        return redirect()->route('categorie.index');



    }
    public function show($idCategory){
        $categorie =Category::findOrFail($idCategory);
      
        return view('admin.Posts.ajouterPost',['categorie'=>$categorie]); 


    }
}
