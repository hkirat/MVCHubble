<?php
	namespace Controllers;
	use Models\PostList;
	use Models\user;
	class signInController{
		protected $twig;
		public function __construct ()
		{
			$loader=new \Twig_Loader_Filesystem(__DIR__  . '/../views');
			$this ->twig = new \Twig_Environment($loader);

		}
		//$_SERVER['REQUEST_METHOD'] -request method
		public function post()
		{
				$userid=$_POST["userid"];
				$password=$_POST["password"];
				if (user::check($userid,$password))
				{
					$_SESSION["userid"] =$userid;
					$posts=PostList::getPosts(0);
					echo $this->twig->render("main.php",array(
					"title"=>"Posts | MVC Blog",
					"posts"=>$posts
					));
				}
				else
				{
						echo "The email password combination is wrong";

				}
				
				
	}
}

	?>

