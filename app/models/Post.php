<?php
namespace Models;
class Post
{
protected $db;
public function __construct()
{
$this->db=self::getDB();
//::for callling a static function.
}
public static function getDB(){

return new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");

}
public static function create($user,$message)
{
$db=new \PDO ("mysql:dbname=$database_name;host=$webpage_host","db_username","$db_password");
$statement =$db->prepare("INSERT INTO table2(user,message) VALUES (:user,:message)");
}
}
