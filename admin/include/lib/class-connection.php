<?php 



/**
 * it is userd only for mysql divers. 
 * this class have two methods 
 * __construct is a constructor
 * connect is a method to creat a connection.
 * the fields is constant it make the program more faster becouse the interpreter understand that couldn't change after setting 
 */
class connection 
{
	private  $host_db;
	private  $user;
	private  $pass_word;
	private  $op;

	function __construct($host_db,$user_db,$pass_word,$db_name)
	{
		
		$this->host_db='mysql:host='.$host_db.';dbname='.$db_name;
		$this->user= $user_db;
		$this->pass_word= $pass_word;
		$op=array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES UTF8 ' , );
	
	}


function connect(){

 try{
 
			$conn=new PDO($this->host_db,$this->user,$this->pass_word,$this->op);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;
  }
 catch(PDO $error_mode)
 {
			print('sorry you are in error mode and is '.$error_mode->getMessage);
  }

        }
                  }

		
?>