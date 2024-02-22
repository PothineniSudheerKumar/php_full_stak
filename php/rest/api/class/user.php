<?php
	class user{

		private $conn;
		private $table = 'tbl_user';

		public $id;
		public $first_name;
		public $last_name;
		public $email_id;
		public $mobile_number;
		public $password;
		public $profile_pic;
		public $email_verification;
		public $email_send_status;
		public $user_role;
		public $status;

		public $result_data = array();

		public function __construct($db){
			$this->conn = $db;
		}

		public function get_all_user_data(){
			$query = "SELECT * FROM ".$this->table."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt;
		}

	}
?>