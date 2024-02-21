<?php
	class singleton{
		private static $instance;
		public function __construct(){

		}
		public static function get_instance(){
			if (self::$instance === null) {
				self::$instance = new singleton();
			}
			return self::$instance;
		}

		public function test(){
			echo "This is test";
		}
	}
	$obj1 = singleton::get_instance();
	$obj1->test();
	$obj2 = singleton::get_instance();
	$obj2->test();
	echo ($obj1 === $obj2) ? 'Same obj' : 'No';
?>