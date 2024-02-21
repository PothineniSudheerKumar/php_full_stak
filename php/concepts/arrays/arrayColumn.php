<?php
	$a = array(
	  array(
	    'id' => 5698,
	    'first_name' => 'Peter',
	    'last_name' => 'Griffin',
	  ),
	  array(
	    'id' => 4767,
	    'first_name' => 'Ben',
	    'last_name' => 'Smith',
	  ),
	  array(
	    'id' => 3809,
	    'first_name' => 'Joe',
	    'last_name' => 'Doe',
	  )
	);
	$result = array_column($a, 'last_name');//with out index key
	$result2 = array_column($a, 'last_name','first_name');//with index key
	echo '<pre>';print_r($result);
	echo '<pre>';print_r($result2);
?>