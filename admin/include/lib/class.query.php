<?php
/**
 *  $Request= new query();
*   $Result = $Request->SELECT("ID,User_Name,number")->FROM("Table_name")->WHERE("ID = 10")->result();
 */

class query

{
	
	private $table;

	private $where;
	
    private $limit;
	
    private $column;
    
function __construct() {
  
    $this->table = "";
  
    $this->where ="";
  
    $this->limit="";


}
function SELECT() {
     $args= func_get_args();
    
     $this->column=implode(",", $args);
      
      return $this;
    
    }

    function FROM($table) {
     
     $this->table=$table;
     
     return $this;
    
    }
    function WHERE($where) {
     
     $this->where=$where;
     
     return $this;
   
    }
     function LIMIT($limit) {
     
     $this->limit=$limit;
     
   
     return $this;
    
    }
    
    function result() {
    
    global $conn;
 
    if( $this->where ==! "")

    $this->where=" WHERE ".$this->where;

    if($this->limit ==! "")

    $this->limit = " LIMIT ". $this->limit;

    $sth = $conn->prepare("SELECT ".$this->column . " FROM  ".$this->table.$this->where.$this->limit);
    
    $sth->execute(); 
    

    return $sth->fetchAll();
    
    
    }

}


?>