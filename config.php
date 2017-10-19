<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'hockey1724');
define('USERS', 'users');
define('BLOG_POSTS', 'blog_posts');

$users = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, USERS);
$blog_posts = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, BLOG_POSTS);


if($users === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else if($users === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>