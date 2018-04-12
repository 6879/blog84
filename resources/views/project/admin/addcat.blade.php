@extends('project/admin/inc/header')
   @section('content')
        <div class="grid_10">
		
            <div class="box round first grid">
               
               <div class="block copyblock"> 
			  
                 <form action="addcat" method="post">
                     {{ csrf_field() }}
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="cat" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    @stop