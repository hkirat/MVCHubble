<?php
	namespace Controllers;
	use Models\Post;
	use Models\PostList;
	
	class PostCreateController{
		protected $twig;
		public function __construct ()
		{
			$loader=new \Twig_Loader_Filesystem(__DIR__  . '/../views');
			$this ->twig = new \Twig_Environment($loader);
		}
		//$_SERVER['REQUEST_METHOD'] -request method
		public function post()
		{
			$user=$_POST['user'];
			$message=$_POST['message'];
			Post::create($user,$message);
			PostList::getPosts(0);
					echo $this->twig->render("main.php",array(
					"title"=>"Posts | MVC Blog",
					"posts"=>$posts
					));
		}
	}
	?>