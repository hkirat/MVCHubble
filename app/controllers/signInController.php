<?php
	namespace Controllers;
	use Models\PostList;
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
				$conn = new \mysqli('localhost', 'root', '123', 'first');
				if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					} 
				else
				{
		$sql = "SELECT userid,password,name FROM table1 WHERE userid='$userid' AND password='$password'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{$_SESSION["userid"] =$userid;
					$posts=PostList::getPosts(0);
					echo $this->twig->render("main.php",array(
					"title"=>"Posts | MVC Blog",
					"posts"=>$posts
					));
					}
					else 
					{
						echo "Wrong Id Password Combination.";

				$conn->close();
				}
				}
	}
}

	?>

