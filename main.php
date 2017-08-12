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
		if($thestack->isEmpty()){
			header('Location: http://localhost/stack_web/index.php?msg=stack_is_empty');
		}
		else{
			$thestack->pop();
			header('Location: http://localhost/stack_web/index.php?msg=pop_method_success');
		}
	}

	if(isset($_POST['push'])){
		$data = $_POST['data'];
		$thestack->push($data);
		header('Location: http://localhost/stack_web/index.php?msg=push_success');
	}

	if(isset($_POST['special'])){

		$index = $_POST['index'];
		$data = $_POST['data'];
		if($index > $thestack->size()){
			header('Location: http://localhost/stack_web/index.php?msg=out_of_index');
		}
		else{
			$thestack->special($index,$data);
			header('Location: http://localhost/stack_web/index.php?msg=special_method_success');
		}
		
	}

?>
