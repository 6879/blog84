<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontendadmin/css/stylelogin.css')}}" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="register" method="post" enctype="multipart/form-data">
			 {{ csrf_field() }}
			<h1>Admin Registration</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="name"/>
			</div>
			<div>
				<input type="text" placeholder="E-mail" required="" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<input name="image" type="file" />
			<div>
				<input type="submit" value="submit" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#"></a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>