<?php
	
	if($likes) {
		
		include('page-liked.php');
		
	} else {

		include('page-unliked.php');
		
	}
	
	die();

?>