<?php
session_start();
$root=$_SERVER['DOCUMENT_ROOT']."/Social/public";
require "$root/includes/connection.php";
require "$root/includes/classes/Post.php";
require "$root/includes/classes/User.php";

$max = 10;

$posts = new Post($con,$_SESSION["userPosts"]);
$posts->LoadPosts($max,$_POST["page"],$_SESSION["userPosts"]);

?>