<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Post;

class UsersController extends Controller
{
     public function index(){
   	return view('/project/admin/register');
   }
    public function create(Request $request){
 
   $this->validate($request,[
 'name' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
 'image'=>'nullable|image'
 
     ]);
     $input=new Users;
     $input->name=$request->name; 
      $input->email=$request->email; 
       $input->password=$request->password; 
      // $image->image=$request->image; 
       if($request->hasFile('image')){
     $input->image= $request->image->store('public/images');
       }
       $input->save();
  return redirect('/project/admin/index');
     }
    public function __construct()
    {
        $this->middleware('auth');
    }
  
}

