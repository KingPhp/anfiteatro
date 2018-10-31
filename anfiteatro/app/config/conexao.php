<?php
class conection{

	private $host     = 'localhost';
	private $dbname   = 'mybd';
	private $user     = 'root';
	private $password = '';

	public function conect(){

		try{

			$conn = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
				"$this->user",
				"$this->password"
			 );

			 return $conn;

		}catch(PDOException $e){
			ECHO 	'Error: '.$e->getCode().' Message: '.$e->getMessage();
		}#end try

	}#end function conectar

}#end class

?>
