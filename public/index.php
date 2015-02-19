<?php
//getting the files to load
require_once __DIR__ . "/../vendor/autoload.php";

Toro::serve(array(
	"/" => "Controllers\\homeController",
	"/newPost" => "Controllers\\PostCreateController",
	"/signin" =>"Controllers\\signInController"
	//"/posts/:number"=>"Controllers\\SinglePostDisplayController"
	));
?>
