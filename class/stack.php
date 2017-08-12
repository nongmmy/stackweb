<?php
// include_once "database.php";
include 'database.php' ;


class Stack{

	protected $top ;

	function __construct(){
		$this->top();
	}


	function pop(){

		if( !$this->isEmpty() ){
			$this->top();
			$db = new Database() ;

			//select data at top
			$data = $db->select_data($this->top-1);
			//delete data at top
			$db->delete_data($this->top-1);

			return $data;
		}
		
	}


	function push($data){
		$this->top();

		$db = new Database() ;
		$db->insert_data($this->top,$data) ;
	}


	function special($index,$data){
		$this->top();
		$db = new Database() ;

		if( $index < $this->size() ){
			for( $j=$this->size()-1 ; $j>$index ; $j-- ){
				$row = $db->select_data($j);
				$id = (int)$row['id'];
				$i = (int)$row['i'] + 1;
				$db->update_data($id,$i);
			}
			
			$db->insert_data($index+1,$data) ;
		}
		
		
	}


	function top(){
		$db = new Database();
		$this->top = $db->count_data();
	}

	function size(){
		$this->top();
		return $this->top;
	}

	function isEmpty(){
		return ($this->size()==0) ;
	}

}
?>