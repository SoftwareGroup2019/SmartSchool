 <?php

/**
 *  Full Syntax 
 *   $Delete = new delete() ;
 *   $Delete->DELETE_FROM("Table_name")->WHERE("first_name = ? AND last_name = ? ")->result("Rebwar , Ramazan ");
 */
class delete
{
	
    private $table;
    
    private $where;

	function DELETE_FROM($table) {

	$this->table=$table;

	return $this;



	}
//   WHERE("first_name = ? AND last_name = ? ")

	function WHERE($where) {

		$this->where=$where;

		return $this;
	}



// result("Rebwar , Ramazan ")
	function result() {

   global $conn;

    $array=func_get_args();

   $resl=$conn->prepare("DELETE FROM ". $this->table." WHERE ".$this->where);

   return $resl->execute($array);

	}
}




?>