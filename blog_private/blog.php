<?php
	session_start();
	include "../config.php";
?>

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
	      <a class="nav-item" href="../banner.php">Home </a>
	      <a class="nav-item" href="../music.php">Music</a>
	      <a class="nav-item" href="../blog_public/blog.php">Blog</a>
	      <a class="nav-item facebook pull-right" href="https://www.facebook.com/Smalltownstripclub/">
	      	<i class="fa fa-facebook" aria-hidden="true"></i>
	      </a>
	      <a class="nav-item" href="../login.php">Login</a>
	      <a class="nav-item" href="../logout.php">Logout</a>
	    </ul>
	    </div>
	  </div>
	</nav>
<?php
	if(isset($_POST['submit'])){
		$date = date("Y-m-d");
		$query = "INSERT INTO blog_posts (author,date,post) VALUES ('$_SESSION['login_user']','$date','$_POST['body']'')";
		mysqli_query($blog_posts, $query);
		mysqli_close($blog_posts);
	}

?>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<div class="blog">
			<h1 class="title">Blog</h1>
		</div>

		<form method="post" enctype="multipart/form-data">
		  Title:<br>
		  <input type="text" name="title" class="form-control input-sm"><br>
		  Body:<br>
		  <textarea name="body" rows="8" cols="60"></textarea>
		  <br>
		  <input type="file" name="fileToUpload" id="fileToUpload">
		  <br><br>

		  <input type="submit" value="Submit" name="submit">
		</form>

		<div class="fb-page" data-href="https://www.facebook.com/Smalltownstripclub/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Smalltownstripclub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Smalltownstripclub/">Small-Town Strip Club</a></blockquote></div>

</body>
</html>