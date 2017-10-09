<html>
	<head>
		<title>Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	<script src="https://use.fontawesome.com/d6a0ba4244.js"></script>

	</head>
	<style>
		.title{
			font-family: 'Raleway', sans-serif;
			text-align: center;
			color: #CDBD9B;
			font-size: 48;
		}
		.navbar{
			background: white;
		}
		.header{
			background: #F4F4F4;
		}
		.nav-item{
			font-size: 26;
			font-family: 'Homemade Apple', cursive;
			color: #CDBD9B;
			padding-top: 5;
		}
		form{
			text-align: center;
			padding-left: 10%;
			padding-right: 10%;
		}
	</style>

	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	    <ul>
	      <a class="nav-item" href="banner.html">Home </a>
	      <a class="nav-item" href="music.php">Music</a>
	      <a class="nav-item" href="blog.php">Blog</a>
	      <a class="nav-item facebook pull-right" href="https://www.facebook.com/Smalltownstripclub/">
	      	<i class="fa fa-facebook" aria-hidden="true"></i>
	      </a>
	      <a class="nav-item" href="login.php">Login</a>
	    </ul>
	    </div>
	  </div>
	</nav>
	<body>
		<div class="blog">
			<h1 class="title">Blog</h1>
		</div>

		<form>
		  Title:<br>
		  <input type="text" name="title" class="form-control input-sm"><br>
		  Body:<br>
		  <input type="textarea" name="body" class="form-control input-lg"><br><br>
		  <input type="submit" value="Submit">
		</form>

	</body>
</html>