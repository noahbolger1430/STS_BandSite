<?php
	session_start();
	include "../config.php";
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
.posts {
	background-color: gray;
	width: 50%;
	height: 1000px;
	overflow-y: scroll;
	margin: 0 auto;
}
.single_post {
	width: 90%;
	margin: 0 auto;
	background-color: white;
	height: 100px;
	margin-top: 10px;
}
.blog_title {
	margin: 0 auto;
	text-align: center;
}
.blog_post {
	margin: 0 auto;
	text-align: center;
}
.blog_date {
	margin: 0 auto;
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
</div>
<div class="blog">
	<div class="blog-title">
		<h1> Blog </h1>
	</div>
	<hr>
	<div class="posts">
		<div class="single_post">
		<?php
			$query = "SELECT * FROM post";
			$blog_query = mysqli_query($blog_posts, $query);
			$post = mysqli_fetch_array($blog_query);
			$date = $post['date_posted'];
			$title = $post['title'];
			$blog_post = $post['post'];
			$author = $post['author'];


			echo "<div class='blog_title'><h3>" . $title . "</h3></div>";
			echo "<div class='blog_date'><p>Posted: " . $date . "<p></div>";
			echo "<div class='blog_post'><p>" . $blog_post . "</p></div>";
			mysqli_close($blog_posts);
		?>
		</div>
	</div>
</div>

<?php
	if (isset($_SESSION['login_user'])) {
		echo "<a href='../blog_private/blog.php'>Submit Post</a>";
	}
?>
