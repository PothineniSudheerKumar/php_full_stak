<?php
	class database{
		private $host = 'localhost';
		private $databse_name = 'rest_api';
		private $user_name = 'root';
		private $password = '';
		public $conn;
		public function get_connection(){
			$this->conn = null;
			try {
				$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->databse_name,$this->user_name,$this->password);
				// echo 'Connection success';
			} catch (PDOException $e) {
				echo "Connection error".$e->getMessage();
			}
			return $this->conn;
		}
	}
?>