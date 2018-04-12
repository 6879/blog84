<?php include "inc/header.php"?>
<?php include "inc/sidebar.php"?>
<?php include "lib/db.php"?>
<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Delete Category</h2>
               <div class="block copyblock">
			   
			   
			   <?php
if(isset($_POST['ok']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
$update=mysqli_query($connect,"update `tb_category` set `name`='$name' where `id`='$id'");
if( !$update )
{
	die("connect fail".mysqli_connect_error());
}
{echo "Update successful!!!!";}
}

?>				   <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="id" placeholder="Enter Category ID..." class="medium" />
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="ok" Value="UPDATE" />
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