<?php




include_once("class-connection.php");

include_once("class.query.php");

include_once("class.insert.php");

include_once("class.delete.php");

include_once("class.update.php");



$conn=new connection("localhost","root","","mydb");
$conn=$conn->connect();

$Up = new upset();
$name ="REbwar";
$id = 1;
$result=$Up->UPDATE("student")->SET("name=?")->WHERE("ID = ?")->result($name,$id);



?>
