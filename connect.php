<?php 
	$connection = new mysqli('localhost', 'root','','dbejaresf1');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}	
?>