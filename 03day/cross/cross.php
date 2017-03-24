<?php 
	
	$call = $_GET['callback'];

	$data = '{"username":"zhangying"}';

	echo $call.'('.$data.')';

?>