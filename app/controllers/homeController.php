 <?php
	namespace Controllers;
	class HomeController{
		protected $twig;
		public function __construct ()
		{
			$loader=new \Twig_Loader_Filesystem(__DIR__  . '/../views');
			$this ->twig = new \Twig_Environment($loader);
		}
		//$_SERVER['REQUEST_METHOD'] -request method
		public function get()
		{
			echo $this->twig->render("index.html",array(
				"title" => "MVC BLOGG",
				"message" => "WELCOME TO HUBBLE."
			));
	
		}
	}

	?>