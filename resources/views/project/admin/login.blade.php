<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontendadmin/css/stylelogin.css')}}" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="postlogin" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<p>Not yet a account?<a href="ac.php">Sign up </a></p>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>