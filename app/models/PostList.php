<?php
namespace Models;

class PostList
{
protected $db;
public function __construct()
{
$this->db=self::getDB();
//::for callling a static function.
}
public static function getDB(){

return new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");

public static function getPosts($offset)
{
$db=self::getDB();
$posts = array();///declaring the array
$statement =$db->prepare("SELECT * FROM table2");
$statement->bindValue(':offset',$offset, \PDO::PARAM_INT);
$statement->execute();
 while ($row = $statement->fetch(\PDO::FETCH_ASSOC ))
{
	$posts[]=$row;
}
return $posts;
}
}
