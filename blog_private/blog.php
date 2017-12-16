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

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

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
  .single_post {
    width: 90%;
    margin: 0 auto;
    background-color: white;
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
  #blog_image {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    background: transparent no-repeat center;
      background-size: cover;
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
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../images/".$file_name);
         $img_path = "images/" . $file_name;
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   	if(isset($_POST['submit'])){
		$date = date("Y-m-d h:i:s");
		$user = $_SESSION['login_user'];
		$title = str_replace("'", "\'", $_POST['title']);
		$body = str_replace("'", "\'", $_POST['body']);

		$query = "INSERT INTO post (author,date_posted,post,file_path,title) VALUES ('$user', '$date', '$body','$img_path', '$title')";
		mysqli_query($blog_posts, $query);
		mysqli_close($blog_posts);
	}
    
?>
<body>

		<div class="blog">
			<h1 class="title">Blog</h1>
		</div>
  <div ng-app="">
		<form method="POST" enctype="multipart/form-data" action="">
		  Title:<br>
		  <input type="text" name="title" class="form-control input-sm" ng-model="title"><br>
		  Body:<br>
		  <textarea name="body" rows="8" cols="60" ng-model="body"></textarea>
		  <br>
		  <input id="image_input" type="file" name = "image"/>
		  <br><br>
		  <input type="submit" value="Submit" name="submit">
		</form>

    <h1 class="title">Preview</h1>

       <div class='single_post'>
         <div class='blog_title'><h3>{{title}}</h3></div>
         <div class='blog_post'><p>{{body}}</p></div>
         <img src='#' id='blog_image'></img>
      </div> 
  </div> 

</body>
</html>

<script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blog_image').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#image_input").change(function() {
  readURL(this);
});
</script>