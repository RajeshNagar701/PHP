<?php

class Model {

	protected $connection = '';
	protected $servername = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $db = 'learnvern';

	function __construct(){
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		try{
			$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->db);
		} catch (Exception $ex) {
			echo "Connection Failed: " . $ex->getMessage();
			exit;
		}
	}

	function InsertData ($tbl, $data){
		$clms = implode(',', array_keys($data));
		$vals = implode("','", $data);
		$sql = "insert into $tbl ($clms) values ('$vals')";
		//echo $sql;
		$insertEx = $this->connection->query($sql);
		if($insertEx){
			$response['Data'] = null;
			$response['Code'] = true;
			$response['Message'] = 'Data inserted successfully.';
		} else {
			$response['Data'] = null;
			$response['Code'] = false;
			$response['Message'] = 'Data insertion failed.';
		}
		return $response;
	}

	function LoginData($email, $pass) {
		$loginSql = "SELECT * FROM users WHERE email = '$email'";
		$loginEx = $this->connection->query($loginSql);
		$loginData = $loginEx->fetch_object();
		if($loginEx->num_rows > 0 && password_verify($pass, $loginData->pass)){
			$response['Data'] = $loginData;
			$response['Code'] = true;
			$response['Message'] = 'Login Successful.';
		} else {
			$response['Data'] = null;
			$response['Code'] = false;
			$response['Message'] = 'Email or password is incorrect.';
		}
		return $response;
	}

	function SelectData(string $tblName, array $where = []){
		$selSql = "SELECT * FROM $tblName";
		if(!empty($where)){
			$selSql .= " WHERE ";
			foreach ($where as $key => $value) {
				$selSql .= " $key = '$value' AND";
			}
			$selSql = rtrim($selSql, 'AND');
		}
		$sqlEx = $this->connection->query($selSql);
		if($sqlEx->num_rows > 0){
			while ($FetchData = $sqlEx->fetch_object()) {
			    $allData[] = $FetchData;
			}
			$response['Data'] = $allData;
			$response['Code'] = true;
			$response['Message'] = 'Data retrieved successfully.';
		} else {
			$response['Data'] = [];
			$response['Code'] = false;
			$response['Message'] = 'Data not retrieved.';
		}
		return $response;

		
	}


	function UpdateData ($tbl, $data, $where) {
		$sql = "UPDATE $tbl SET ";
		foreach ($data as $key => $value) {
			$sql .= "$key = '$value',"; 
		}
		$sql = rtrim($sql, ',');
		$sql .= " WHERE ";

		foreach ($where as $key => $value) {
			$sql .= "$key = '$value' AND";
		}
		$sql = rtrim($sql, 'AND');
		return $updEx = $this->connection->query($sql);
	}

	function DeleteData($tbl, $where){
		$sql = "DELETE FROM $tbl WHERE ";
		foreach ($where as $key => $value) {
			$sql .= " $key = '$value'";
		}
		return $this->connection->query($sql);
	}


}

?>