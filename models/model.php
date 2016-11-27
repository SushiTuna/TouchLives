<?php

class database {

	var $conn = "";
	var $db = "touchlives";

	public function connectDB($server, $user, $pass) {
		$this->conn = new mysqli($server, $user, $pass, "touchlives");

		if($this->conn->connect_error) {
			echo "Connection failed!" . $this->conn->connect_error;
			return 0;
		}

		return 1;
	}

	public function selectQuery($select, $table, $condition) {
		if($this->conn == "") return 0;

		$query = "";
		if($condition == "") {
			$query = sprintf("SELECT %s FROM %s", $select, $table);
		} else {
			$query = sprintf("SELECT %s FROM %s WHERE %s", $select, $table, $condition);
		}

		$result = mysqli_query($this->conn, $query);
		if($result->num_rows > 0) {
			return $result;
		} 

		return 0;
	}

	public function insertQuery($data, $values, $table) {
		if($this->conn == "") return 0;

		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table, $data, $values);
		echo $query;
		if(mysqli_query($this->conn, $query)) {
			return 1;
		} 
		
		echo mysqli_error($this->conn);
		return 0;
	}

	public function updateQuery($table, $values, $condition) {
		if($this->conn == "") return 0;

		$query = sprintf("UPDATE %s SET %s WHERE %s", $table, $values, $condition);

		if(mysqli_query($this->conn, $query)) {
			return 1;
		}

		echo mysqli_error($this->conn);
		return 0;
	}

	public function deleteQuery($table, $condition) {
		if($this->conn == "") return 0;

		$query = sprintf("DELETE FROM %s WHERE %s", $table, $condition);

		if(mysqli_query($this->conn, $query)) {
			return 1;
		}

		echo mysqli_error($this->conn);
		return 0;
	}

}


?>