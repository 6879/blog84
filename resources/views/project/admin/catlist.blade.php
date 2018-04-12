@extends('project/admin/inc/header')
   @section('content')
        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					 @foreach($input as $data)
					<tbody>
						
		   
						<tr class="even gradeC">
							<td>{{$data->id  }}</td>
							<td>{{$data->cat  }}</td>
							<td><a href="updatecatlist.php">Edit</a> || <a onclick="return confirm('Are you sure to delete this category? ')" href="editcat.php">Delete</a></td>
						</tr>
											</tbody>
											@endforeach
				</table>
              	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    @stop
  </body>
</html>