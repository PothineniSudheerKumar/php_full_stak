<?php
	$array = [1,2,3,4,5];
	function add($value){
		return $value + $value;
	}
	$result = array_map('add', $array);
	print_r($result);
?>