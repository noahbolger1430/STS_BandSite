<?php
	session_start();
?>

<style>
.blog{
	background: #CDBD9B;
}
.blog-title{
	padding-top: 10;
	color: white;
	font-family: 'Homemade Apple', cursive;
	text-align: center;
}
</style>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	<script src="https://use.fontawesome.com/d6a0ba4244.js"></script>

	<link href="../css/home.css" rel="stylesheet" type="text/css">

</head>

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
      <a class="nav-item" href="../index.php">Login</a>
      <a class="nav-item" href="../logout.php">Logout</a>
    </ul>
    </div>
  </div>
</nav>
<div class="header">
	<div class="main-title">
		<h1 class='title'>Small-Town Strip Club</h1>
	</div>
<hr/>

<div class="members">
<p>Johann Yundt - Lead Vocals/Rythm Guitar &nbsp; &nbsp; / &nbsp; &nbsp; Jack Bryan - Lead Guitar &nbsp; &nbsp; / &nbsp; &nbsp; Jim Flood - Drums &nbsp; &nbsp; / &nbsp; &nbsp; Noah Bolger - Bass</p>

</div>

<div class="blog">
	<div class="blog-title">
		<h1> Blog </h1>
	</div>
	<hr>
</div>

<?php
	if (isset($_SESSION['login_user'])) {
		echo "<a href='../blog_private/blog.php'>Submit Post</a>";
	}
?>
