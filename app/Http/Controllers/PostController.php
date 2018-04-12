<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Users;
use App\Category;
use App\Contact;

class PostController extends Controller
{
   public function store(){
    $users = Users::all();
    $count=Contact::where('status',0)->count();
   return view('/project/admin/addpost')->with('users', $users)->with('count',$count); 

   	//return view('/project/admin/addpost');
   }
    public function create(Request $request){
 
  
         //$input=$request->all();
        // ok::create($input);
         // $input=new ok;
  $this->validate($request,[
 'cat'=>'required',
 'title'=>'required',
 'body'=>'required',
 'image'=>'nullable|image',
 'author'=>'required'
     ]);
     $input=new Post;
     $input->cat=$request->cat; 
      $input->title=$request->title; 
       $input->body=$request->body; 
       $input->author=$request->author; 
              // $image->image=$request->image; 
       if($request->hasFile('image')){
     $input->image= $request->image->store('public/images');
       }
       $input->save();
  return redirect('/project/admin/postlist');
    }
      public function Postshow(){

         $users = Users::all();
  $input =Post::all();
  $count=Contact::where('status',0)->count();
  return view('/project/admin/postlist')->with('users', $users)->with('input', $input)->with('count',$count); 
       
  //$input=Post::paginate(10);
  //return view('/project/admin/postlist',compact('input'));
  

}

public function edit($id){
  $input=Post::find($id);
  $users = Users::all();
    $count=Contact::where('status',0)->count();
  return view('project/admin/editpostlist',['input'=>$input])->with('users', $users)->with('count',$count);
}

 public function update(Request $request,$id){
 $input=Post::find($id);
 $input->cat=$request->cat; 
 $input->title=$request->title; 
 $input->body=$request->body; 
 $input->author=$request->author; 
 if($request->hasFile('image')){
   $input->image= $request->image->store('public/images');
     }
  $input->save();
  return redirect('/project/admin/postlist');
 }

 public function delete($id){
 $input=Post::find($id);
 $input->delete();
 return redirect('/project/admin/postlist')->with('msg','Post delete successfull!!');
}
//HOMEPAGE CONTROLLER


public function showIndex(){
  $row=Category::all();
  $input=Post::paginate(1);
   return view('/project/index',compact('input'))->with('row',$row);
}

public function showPost($id){
 $row=Category::all();
  $in=Post::find($id);
  $input=Post::all();
   //$view=Post::find($id);
 return view('project/post',['in'=>$in])->with('row',$row)->with('input',$input);
}
public function showPostBycat($id){
  $row=Category::all();
  $input=Post::where('cat',$id)->get();
 return view('project/posts',['input'=>$input])->with('row',$row);
}
 public function __construct()
    {
        $this->middleware('auth');
    }
public function searchValue(Request $request){
  $search=$request->search;
   $row=Category::all();
    $input=Post::where('title','like','%'.$search.'%')->get();
  return view('/project/search',compact('input'))->with('row',$row);
}
}
