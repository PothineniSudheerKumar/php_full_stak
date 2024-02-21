<?php
	$cars=array("one"=>"Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	$result = array_chunk($cars,3,false);
	echo '<pre>';print_r($result);
?>