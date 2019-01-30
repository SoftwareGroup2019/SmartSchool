

<?php
/**
 * 
 *  Full Syntax 
 *   Add = new insert() ;
 *   Add->INSERT_INTO("Table_name")->COLUMNS("First_name,Last_name")->VALUES(? , ? )->result("Muhammad,Kamaran");
 */
class insert

{

	
private $table;


private $columns;

private $values;

private  $temp;
	

function INSERT_INTO($table) {
	
	$this->table=$table;

    return $this;

}
function COLUMNS() {

$arg = func_get_args();

$this->columns = implode(",",$arg);

return $this;

} 

function VALUES() {

	 $arg = func_get_args();

	$this->values = implode(",",$arg);

	return $this;

}
function result() {

	global $conn;
	
	$array = func_get_args();

     

	$temp =  $conn->prepare("INSERT INTO ".$this->table." ( ".$this->columns." ) "." VALUES (".$this->values.")");

	return $temp->execute($array);
}

}
?>