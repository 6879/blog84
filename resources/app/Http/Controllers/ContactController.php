<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Category;
use App\Users;

use App\Post;
class ContactController extends Controller
{
    public function sendMessage(Request $request){
        
  $this->validate($request,[
 'firstname'=>'required',
  'lastname'=>'required',
   'email'=>'required',
    'message'=>'required'
     

     ]);
     $input=new Contact;
     $input->firstname=$request->firstname; 
      $input->lastname=$request->lastname; 
       $input->email=$request->email; 
        $input->message=$request->message; 
        // $input->status=$request->status; 
     $input->save();
  return redirect('/project/contact')->with('msg','Send message successful!!!');

     }
     public function contactPage(){
        $input=Post::all();
     	$row=Category::all();
     	 return view('/project/contact',compact('input'))->with('row',$row);
     }
     public function notification(){
     	 $users = Users::all();
     	$count=Contact::where('status',0)->count();
     	return view('project/admin/index',compact('count'))->with('users',$users);
     }
     public function showInbox(){
     	$input=Contact::where('status',0)->get();
     	$users = Users::all();
     	$count=Contact::where('status',0)->count();
     	return view('project/admin/inbox')->with('input',$input)->with('users',$users)->with('count',$count);
     }
     public function updateStatus($id){
 Contact::where('id',$id)->update(['status'=>1]);

 return redirect('/project/admin/inbox')->with('msg','Post delete successfull!!');
}
 public function __construct()
    {
        $this->middleware('auth');
    }
}