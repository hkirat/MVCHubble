<?php
namespace Models;

class user
{
protected $db;
public function __construct()
{
$conn = new \mysqli('localhost', 'root', '123', 'first');
//::for callling a static function.
}
public static function getDB(){
return new \mysqli('localhost', 'root', '123', 'first');
}

public static function check($userid,$password)
{
$conn = new \mysqli('localhost', 'root', '123', 'first');

$sql = "SELECT userid,password,name FROM table1 WHERE userid='$userid' AND password='$password'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{

						return true;
					}
					else 
					{
						return false;

				$conn->close();
				}

$statement =$db->prepare("SELECT userid,password,name FROM table1 WHERE userid='$userid' AND password='$password'");
return $posts;
}

}



?>