<?php

	include 'class/stack.php' ;

	$thestack = new Stack();

	if(isset($_POST['pop'])){
		//check empty
		if($thestack->isEmpty()){
			header('Location: http://localhost/stack_web/index.php?msg=Stack is empty');
		}
		else{
			$data = $thestack->pop();
			header('Location: http://localhost/stack_web/index.php?msg=Pop successfully&data='.$data['data']);
		}
	}

	if(isset($_POST['push'])){
		$data = $_POST['data'];
		$thestack->push($data);
		header('Location: http://localhost/stack_web/index.php?msg=Push successfully');
	}

	if(isset($_POST['special'])){

		$index = $_POST['index'];
		$data = $_POST['data'];
		//check index 
		if($index > $thestack->size()){
			header('Location: http://localhost/stack_web/index.php?msg=Out of index');
		}
		else{
			$thestack->special($index,$data);
			header('Location: http://localhost/stack_web/index.php?msg=special method successfully');
		}
	}

?>
