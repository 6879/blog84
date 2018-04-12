@extends('project/admin/inc/header')
   @section('content')
             
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>Email</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($input as $row)
					
						<tr class="odd gradeX">
							<td>{{ $row->id }}</td>
							<td>{{ $row->firstname }}</td>
							<td>{{ $row->lastname }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ $row->message }}</td>
							
							<td><a href="viewmsg.php?msgid=<?php echo  $row['id'];?>">View</a> ||
							<a href="replay.php?msgid=<?php echo  $row['id'];?>">Replay</a>||
							<a onclick="return confirm('Are you sure to move this message? ')" href="seenId&{{ ($row->id)}}">Seen</a></td>
							
						</tr>
						
					</tbody>
					@endforeach
				</table>
              			
        <div class="clear">
        </div>
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
   
 @stop