<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

	<script src="https://use.fontawesome.com/d6a0ba4244.js"></script>

	<link href="css/home.css" rel="stylesheet" type="text/css">

</head>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <ul>
      <a class="nav-item" href="banner.php">Home </a>
      <a class="nav-item" href="music.php">Music</a>
      <a class="nav-item" href="blog_public/blog.php">Blog</a>
      <a class="nav-item facebook pull-right" href="https://www.facebook.com/Smalltownstripclub/">
      	<i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a class="nav-item" href="index.php">Login</a>
      <a class="nav-item" href="logout.php">Logout</a>
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

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/banner.jpg" alt="Norman Street" style="width:100%; max-height: 600;">
      </div>

      <div class="item">
        <img src="images/TheHub.jpg" alt="The Hub" style="width:100%; max-height: 600;">
      </div>
    
      <div class="item">
        <img src="images/Bentleys.jpg" alt="Bentley's" style="width:100%; max-height: 600;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<script>

var $div2blink = $(".title"); // Save reference for better performance

// var backgroundInterval = setInterval(function(){
//     	$div2blink.toggleClass("flicker");
//  },500)

function blink(){
	$div2blink.toggleClass("flicker");
}

function init(){
	var myFunction = function(){
		blink();
		var rand = Math.round(Math.random() * (500 - 50));
		setTimeout(myFunction, rand);
	}
	myFunction();
}

$(function() {
	init();
})
</script>