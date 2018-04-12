<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Users;
use App\Post;
use App\Contact;
class CategoryController extends Controller
{
     public function createCategory(Request $request){
        
  $this->validate($request,[
 'cat'=>'required'
     ]);
     $input=new Category;
     $input->cat=$request->cat; 
     $input->save();
  return redirect('/project/admin/catlist');

     }
	public function addCatlist(){
  $users = Users::all();
    $count=Contact::where('status',0)->count();
  return view('project/admin/addcat')->with('users', $users)->with('count',$count);
}


  public function showCategoryList(){
        $input =Category::all();
         $users = Users::all();
   $count=Contact::where('status',0)->count();
  return view('/project/admin/catlist')->with('users', $users)->with('input', $input)->with('count',$count); 
       
  //$input=Post::paginate(10);
  //return view('/project/admin/postlist',compact('input'));
  

}


//public function showCatlist($id){
 //  $input=Category::find($id);
 //return view('project/inc/sidebar',['input'=>$input]);
//}
public function showIndex(){
  $input=Post::all();
  $row=Category::all();
  return view('/project/inc/sidebar')->with('input',$input)->with('row',$row);
}





 public function __construct()
    {
        $this->middleware('auth');
    }
}