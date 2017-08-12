<?php

	include 'class/stack.php' ;

	$thestack = new superstack\Stack();

	if(isset($_POST['pop'])){
		//check empty
		if($thestack->isEmpty()){
			header('Location: http://localhost/stackweb/index.php?msg=Stack is empty');
		}
		else{
			$data = $thestack->pop();
			header('Location: http://localhost/stackweb/index.php?msg=Pop successfully&data='.$data['data']);
		}
	}

	if(isset($_POST['push'])){
		$data = $_POST['data'];
		if(preg_match('/^\d+$/',$data) ){
			$thestack->push($data);
			header('Location: http://localhost/stackweb/index.php?msg=Push successfully');
		}
		else{
			header('Location: http://localhost/stackweb/index.php?msg=Only integer');
		}
		
	}

	if(isset($_POST['special'])){

		$index = $_POST['index'];
		$data = $_POST['data'];

		//check empty
		if(strlen($index)==0){
			header('Location: http://localhost/stackweb/index.php?msg=index is empty');
		}
		//check interger
		else if( (!preg_match('/^\d+$/',$data)) || (!preg_match('/^\d+$/',$index)) ) {
			header('Location: http://localhost/stackweb/index.php?msg=Only integer');
		}
		//check index 
		else if($index >= $thestack->size() || $index < 0 ){
			header('Location: http://localhost/stackweb/index.php?msg=Out of index');
		}
		else{
			$thestack->special($index,$data);
			header('Location: http://localhost/stackweb/index.php?msg=special method successfully');
		}
	}

?>
