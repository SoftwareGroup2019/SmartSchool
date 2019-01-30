<?php




include_once("DataBase/class.connection.php");

include_once("DataBase/class.query.php");

include_once("DataBase/class.insert.php");

include_once("DataBase/class.delete.php");

include_once("DataBase/class.update.php");



$conn=new connection("localhost","root","","fw");
$conn=$conn->connect();

  $qu= new query();
  $row = $qu->SELECT("ID,User_Name,number")->FROM("test")->result();
foreach ($row as $key => $value) {

echo $value["User_Name"]."<br> ";

}
$de=new delete();

$id_to_delet=3;

$de->DELETE_FROM("test")->WHERE("ID = ?")->result($id_to_delet);

$in=new insert();
$in->INSERT_INTO("test")->COLUMNS("User_name,number")->VALUES("?,?")->result("qaz","45");




?>