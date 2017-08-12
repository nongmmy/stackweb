<?php

	include 'class/stack.php' ;

	$thestack = new Stack();

	if(isset($_POST['pop'])){
		//check empty
		if($thestack->isEmpty()){
			header('Location: http://localhost/stack_web/index.php?msg=stack_is_empty');
		}
		else{
			$data = $thestack->pop();
			header('Location: http://localhost/stack_web/index.php?msg=pop_method_success&data='.$data['data']);
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
		//check index 
		if($index > $thestack->size()){
			header('Location: http://localhost/stack_web/index.php?msg=out_of_index');
		}
		else{
			$thestack->special($index,$data);
			header('Location: http://localhost/stack_web/index.php?msg=special_method_success');
		}
	}

?>
