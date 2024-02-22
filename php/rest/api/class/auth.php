<?php
	class auth{

		private $conn;
		private $table = 'tbl_api_logins';

		public $id;
		public $user_name;
		public $password;
		public $api_token;
		public $mode;
		public $status = 1;

		public $auth_data = array();

		public function __construct($db){
			$this->conn = $db;
		}

		public function validate_user_api_logins(){
			$query = "SELECT * FROM ".$this->table." WHERE user_name = :user_name AND password = :password AND mode = :mode AND status = :status";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(":user_name",$this->user_name);
			$stmt->bindParam(":password",$this->password);
			$stmt->bindParam(":mode",$this->mode);
			$stmt->bindParam(":status",$this->status);
			$stmt->execute();
			return $stmt;
		}
	}
?>