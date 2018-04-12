<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/reset.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/text.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/grid.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/layout.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontendadmin/css/nav.css') }}" media="screen" />
    <link href="{{ URL::asset('frontendadmin/css/table/demo_page.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{ URl::asset('frontendadmin/js/jquery-1.6.4.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.core.min.js') }}"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.widget.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.accordion.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.core.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.effects.slide.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.mouse.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/jquery-ui/jquery.ui.sortable.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('frontendadmin/js/table/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="{{ URL::asset('frontendadmin/js/table/table.js') }}"></script>
    <script src="{{ URL::asset('frontendadmin/js/setup.js') }}" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    
   </head>
<body>
<style>
.img{
	height:60px;
	width:400px;
	border-radius:50%;
}
.img1{
	height:40px;
	width:50px;
	border-radius:50%;
}
<style>
.error{color:red;}
.green{color:green;}
</style>
</style>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img class="img" src="{{ asset('frontendadmin/img/imagess.png')}}" alt="Logo" />
				</div>
				<div class="floatleft middle">
					<h1>Welcome to Admin Pannel</h1>
					
				</div>
                      <div class="floatright">
                     @foreach($users as $data)
                    <div class="floatleft">
                        <img class="img1" src="{{ asset( $data->image)}}" alt="Profile Pic" /></div>
						
                    <div class="floatleft marginleft10">
                         
                        <ul class="inline-ul floatleft">
                           
                            <li>{{ $data->name }}</li>
                            <li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                                                </ul>
                       
                    </div>
                    @endforeach
                </div>
                
                <div class="clear">
                </div>
            </div>
         </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="{{ URL::to('project/admin/index') }}"><span>Dashboard</span></a> </li>
               
				<li class="ic-grid-tables"><a href="{{ URL::to('project/admin/inbox') }}"><span>Inbox({{($count)}})
			</span></a></li>
           
				
                <li class="ic-charts"><a href="{{ URL::to ('project/index')}}"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>

              <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            
                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="{{ URL::to ('project/admin/addcat')}}">Add Category</a> </li>
                                <li><a href="{{ URL::to ('project/admin/catlist')}}">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="{{ URL::to ('project/admin/addpost')}}">Add Post</a> </li>
                                <li><a href="{{ URL::to ('project/admin/postlist')}}">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
        
                      <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block"> 
                 @yield('content')  
               
            
                </div>
            </div>
        </div>
        <div class="clear"
 
    </div>
   @include('project/admin/inc/footer')
