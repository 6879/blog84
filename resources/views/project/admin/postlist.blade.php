@extends('project/admin/inc/header')
   @section('content')
                   
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No.</th>
							<th>cat</th>
							<th>Title</th>
							<th>Body</th>
							<th>Img</th>
							
							<th>Author</th>
							
							<th>Action</th>
						</tr>
					</thead>
					 @foreach($input as $data)
					<tbody>
				
						<tr class="gradeU">
							
							<td>{{$data->id  }}</td>
							<td>{{$data->cat  }}</td>
							<td>{{$data->title  }}</td>
							<td>{{str_limit($data->body,255,'...' ) }}</td>
							<td><img src="{{ asset( $data->image)}}" alt=" " width='100px'/></td>
							
							<td>{{$data->author  }}</td>
													
							<td><a  href="editpostlist&{{ ($data->id)}}">Edit</a> || <a onclick="return confirm('Are you sure to delete this post? ')" href="deletepostlist&{{ ($data->id)}}">Delete</a></td>
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
