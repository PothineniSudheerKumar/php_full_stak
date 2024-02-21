<?php
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("e"=>"red","f"=>"green","c"=>"blue");
	$result = array_diff_key($a1, $a2);
	echo '<pre>';print_r($result);
?>