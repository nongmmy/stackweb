<?php

	include("database.php") ;
	include("stack.php");

	$thestack = new Stack();

	$db = new database();
	// $db->delete_data(19);
	// $db->update_data();
	// $row = $db->select_data_from_id(19);
	// var_dump((int)$row['id']);

	if(isset($_POST['pop'])){
		echo $thestack->pop();
	}

	if(isset($_POST['push'])){
		$data = $_POST['data'];
		$thestack->push($data);
	}

	if(isset($_POST['special'])){
		$index = $_POST['index'];
		$data = $_POST['data'];
		$thestack->special($index,$data);
	}

?>
