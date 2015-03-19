<?php
namespace Models;

class user
{
protected $db;
public function __construct()
{
	$conn =  new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");
}
public static function getDB()
{
	return new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");
}

public static function check($userid,$password)
{
$conn =  new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");

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
