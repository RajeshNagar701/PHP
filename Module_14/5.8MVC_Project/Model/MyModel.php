<?php 
//use for create connection and sql querys
mysqli_report(MYSQLI_REPORT_STRICT);
class MyModel{
	public $Connect = "";	
	function __construct()
	{
		// echo "hii";
		try {
			$this->Connect = new mysqli("localhost","root","","masterdatabase"); 
		} catch (Exception $e) {
			// echo "hii";
			$msg = $e->getMessage();
			$folderName = "log";
			if (!file_exists($folderName)) {
				mkdir($folderName); // in windows its working 
				// mkdir($folderName,0777,true); // ubuntu require permission 
			}
			$FileName = $folderName."/log_".date("d_M_Y");
			file_put_contents($FileName,PHP_EOL."TIME:>> ".date('Y-m-d H:i A').PHP_EOL."ErrorMessage:>> ".$msg.PHP_EOL,FILE_APPEND);
			

		}
	}
	function LoginData($inputtext,$passval){
		$LoginSQL = "SELECT * FROM user WHERE password ='$passval' AND(username='$inputtext' OR mobile='$inputtext' OR email='$inputtext')";
		$Ex = $this->Connect->query($LoginSQL);
		// echo "<pre>";
		// print_r($Ex);
		if ($Ex->num_rows > 0) {
			$FetchData = $Ex->fetch_object();
			// $FetchData = $Ex->fetch_array();
			// $FetchData = $Ex->fetch_row();
			// $FetchData = $Ex->fetch_assoc();
			$ResData['Data'] = $FetchData; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
	}
	
	//for fetchh all data
	function SelectData($table){
		$SelectSQL = "SELECT * FROM $table";
		$Ex = $this->Connect->query($SelectSQL);
		if ($Ex->num_rows > 0) {
			while ($Data = $Ex->fetch_object()) {
				$FetchData[] =$Data;			
			}
			$ResData['Data'] = $FetchData; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
	}
	
	//for fetch select where data
	function SelectWhere($table,$where){
		$SelectSQL = "SELECT * FROM $table WHERE";
		foreach ($where as $key => $value) {
			$SelectSQL .= " $key = $value AND";
		}
		$SelectSQL = rtrim($SelectSQL,"AND");
		
		$Ex = $this->Connect->query($SelectSQL);
		if ($Ex->num_rows > 0) {
			while ($Data = $Ex->fetch_object()) {
				$FetchData[] =$Data;			
			}
			$ResData['Data'] = $FetchData; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
	}
	
	//for Insert data in Table
	function InsertData($tbl,$insertDataAttay){
		$clms = implode(',', array_keys($insertDataAttay));
		$vals = implode("','", $insertDataAttay);
		$SQL = "INSERT INTO $tbl($clms) VALUES ('$vals')"; 
		$Ex = $this->Connect->query($SQL);
		if ($Ex > 0) {
			$ResData['Data'] = 1; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
		
	}
	
	//for Edit data
	function UpdateData($tbl,$updateDataAttay,$where){

		$UpdateData="UPDATE $tbl SET";
		foreach ($updateDataAttay as $key => $value) { 
			$UpdateData .= " $key = '$value' ,";
		}
		$TrimUpdateQuery = rtrim($UpdateData,",");
		$TrimUpdateQuery .=" WHERE";
		foreach ($where as $wkey => $wvalue) { 
			$TrimUpdateQuery .= " $wkey = '$wvalue' AND";
		}
		$TrimUpdateQuery = rtrim($TrimUpdateQuery,"AND");

		$Ex = $this->Connect->query($TrimUpdateQuery);
		if ($Ex > 0) {
			$ResData['Data'] = 1; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
		
	}
	
	//for Delete Data
	function DeleteData($tbl,$where){

		$DeleteDataSQL ="DELETE FROM $tbl WHERE";
		foreach ($where as $wkey => $wvalue) { 
			$DeleteDataSQL .= " $wkey = '$wvalue' AND";
		}
		$TrimDeleteDataSQL = rtrim($DeleteDataSQL,"AND");
		$Ex = $this->Connect->query($TrimDeleteDataSQL);
		if ($Ex > 0) {
			$ResData['Data'] = 1; 
			$ResData['Code'] = 1 ;
			$ResData['Msg'] = 'Success'; 
		}else{
			$ResData['Data'] = 0; 
			$ResData['Code'] = 0 ;
			$ResData['Msg'] = 'Error';
		}
		return $ResData;
	}
}

?>
