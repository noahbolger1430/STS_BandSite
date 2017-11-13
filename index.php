<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: banner.php");
	}
?>


<style>
	#main {
		font-size: 26;
		font-family: 'Homemade Apple', cursive;
		color: #CDBD9B;
		text-align: center;
	}
</style>

	<head>
		<title>Login</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

			<script src="https://use.fontawesome.com/d6a0ba4244.js"></script>
	</head>
	<body>
		<div id="main">
		<h1>Small Town Strip Club Login</h1>
		<br>
		<div id="login">
			<form action="" method="post">
			<div class="form-group">
				<h3>Username :</h3>
				<input id="name" name="username" type="text" class="form-control input-sm">
			</div>
			<br>
			<div class="form-group">
				<h3>Password :</h3>
				<input id="password" name="password" type="password" class="form-control input-sm">
			</div>
			<button name="submit" type="submit">Login</button>
			<span><?php echo $error; ?></span>
			</form>
		</div>
		</div>
	</body>
