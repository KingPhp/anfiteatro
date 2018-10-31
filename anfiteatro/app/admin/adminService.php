<?php
 class adminService{

	 private $conexao;
	 private $admin;

	 public function __construct(conection $conect, admin $admin){
		 $this->conexao = $conect->conect();
		 $this->admin   = $admin;
	 }

	 public function verifica(){
		 $query = "SELECT * FROM admin WHERE email = :email && senha = :senha";
		 $stmt = $this->conexao->prepare($query);
		 $stmt->bindValue(':email',$this->admin->__get('email'));
		 $stmt->bindValue(':senha',$this->admin->__get('senha'));
		 $stmt->execute();
		 $num = $stmt->rowCount();
		 return $num;
	 }






 }#end class
?>
