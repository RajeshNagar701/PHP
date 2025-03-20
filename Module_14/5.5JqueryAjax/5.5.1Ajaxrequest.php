<?php
// print_r($_REQUEST);

$connect = new mysqli('localhost','root','','masterdatabase');
$country_id = $_REQUEST['mitesh'];

$sql = "SELECT * FROM state WHERE country_id=$country_id";
$ex = $connect->query($sql);
$html = '<option value="">--select state-- </option>';
while ($var = $ex->fetch_object()) {
	// print_r($var);
	$html .= "<option value='$var->state_id'>$var->state_name</option>";
}
echo $html;
?>