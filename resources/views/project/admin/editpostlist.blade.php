@extends('project/admin/inc/header')
 <style>
.error{color:red;}
.green{color:green;}
</style>
       @section('content')
         
     <h3>  Update post</h3>  
 
                    <form action="update&{{$input->id}}" name='form1' method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}

                    <table class="form">
                       
                       
                        <tr>
                            <td>
                                <label>ID</label>
                            </td>
                            <td>
                                <input name="id" value="{{ $input->id }}" type="text" placeholder="Enter Post ID..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
							<td>
                             <input type="text" value="{{ $input->cat }}"  name="cat" placeholder="Enter Category Number..." class="medium" />
							 </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->title }}"  name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea  data-validation="required" data-validation="custom" data-validation-regexp="^[a-zA-Z ]{2,30}$" row="5" col="200" name="body"   class="tinymce" value="{{ $input->body }}"></textarea>
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="image"   type="file" />
                            </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="{{ $input->author }}"  placeholder="Enter Author Name..." class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="done" Value="Save" />
                                
                            </td>
                        </tr>
                       
                    </table>
                               </form>
                              
                              

               
  
 @stop
 

   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>