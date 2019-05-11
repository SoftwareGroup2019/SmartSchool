<?php

/**
 * $Up = new update();
 * $result=$Up->UPDATE("Table_name")->SET(" Last_name=?")->WHERE("Last_name = ?")->result("Selah");
 */
class update
{

    private $table;

    private $where;

    private $sets;


	function UPDATE($table) {

	$this->table=$table;

	return $this;

     }


	function SET() {

	    $args=func_get_args();

		$this->sets=implode(",",$args);

		return $this;

	  }

	function WHERE($where) {

		$this->where=$where;

		return $this;

	  }


	function result() {


   global $conn;

   $array=func_get_args();

   $resl=$conn->prepare(" UPDATE  ". $this->table." SET ". $this->sets ." WHERE ".$this->where);

   return $resl->execute($array);

	}
}




?>
