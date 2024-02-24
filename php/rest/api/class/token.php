<?php
	class token{

		private $conn;
		private $table = 'tbl_token';

		public $id;
		public $token;
		public $time_duration;
		public $created_date_time;
		public $status;

		public $token_data = array();

		public function __construct($db){
			$this->conn = $db;
		}

		public function generate_token(){

		}

		public function get_token(){
			
		}
	}
?>