<?php
	namespace Controllers;
	class loginCheckController{
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
					
					//the id password is correct..redirect to main page.
				}
				else
				{
						echo "The email password combination is wrong";
				}
			//check and redirect to appropriate page after checking login details
		}
	}
	?>