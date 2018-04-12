 @extends('project/admin/inc/header')
 <style>
.error{color:red;}
.green{color:green;}
</style>
       @section('content')
       Add new post  

                    <form action="addpost" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>ID</label>
                            </td>
                            <td>
                                <input name="id" type="text" placeholder="Enter Post ID..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
							<td>
                             <input type="text"  name="cat" placeholder="Enter Category Number..." class="medium" />
							 </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text"  name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea  name="body" class="tinymce"></textarea>
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="image" type="file" />
                            </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" placeholder="Enter Author Name..." class="medium" />
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