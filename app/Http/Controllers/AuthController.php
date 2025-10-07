<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function Admin(Request $request){
        $email=$request->email;
        $password=$request->password;
       $admin= DB::table('admins')->where('email',$email)->first();
       if($admin && Hash::check($password,$admin->password)){
          $request->session()->put('user_email',$email);

             
        return redirect()->route('categorie.index');
         

          //return redirect('admin.ControlePanel');


       }
    }

    public function AdminDeconnecter(Request $request){
        $request->session()->flush();

        return redirect('/');



        
    }
};
