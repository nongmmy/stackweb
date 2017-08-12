<?php

// namespace DB;

class Database {

	protected $host = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $db = 'stackweb'; // database name
	protected $conn;


	function connect_db(){

		$this->conn = mysqli_connect($this->host, $this->username, $this->password,$this->db);
		if (!$this->conn) {
		    die("Connection failed");
		} 
	}


	function insert_data($i,$data){

		$this->connect_db();
		$query = "INSERT INTO stack(i,data) ";
		$query .= "VALUES ('$i','$data')";
		$result = mysqli_query($this->conn,$query);

		if(!$result){
			die('Insert failed'. mysqli_error());
		}

		$this->close_db();

	}


	//select data form index
	function select_data($i){

		$this->connect_db();
		$query = "SELECT * FROM stack ";
		$query .= "WHERE i = $i " ;

		$result = mysqli_query($this->conn,$query);

		if(!$result){
			die('Query failed'. mysqli_error());
		}

		$row = mysqli_fetch_assoc($result);
		$this->close_db();
		return $row;
	}


	function update_data($id,$index){

		$this->connect_db();
		$query = "UPDATE stack SET ";
		$query .= "i = $index " ;
		$query .= "WHERE id = $id ";

		$result = mysqli_query($this->conn,$query);

		if(!$result){
			die('Update failed '. mysqli_error($this->conn));
		}

		$this->close_db();
	}



	function delete_data($i){

		$this->connect_db();
		$query = "DELETE FROM stack ";
		$query .= "WHERE i = $i " ;

		$result = mysqli_query($this->conn,$query);
		if(!$result){
			die('Delete failed'. mysqli_error());
		}

		$this->close_db();
	}


	function count_data(){
		$this->connect_db();
		$query = "SELECT * FROM stack";
		$result = mysqli_query($this->conn,$query);
		if(!$result){
			die('Count failed'. mysqli_error($result));
		}
		$num_rows = mysqli_num_rows($result);

		$this->close_db();
		return $num_rows;

	}


	function close_db(){
		mysqli_close($this->conn);
	}

}
?>