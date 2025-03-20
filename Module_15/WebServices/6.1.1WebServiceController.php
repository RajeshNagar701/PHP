
<?php
//webservice Example

//include 'db_config.php';
include 'model/model.php';

//json parsing in select query
if (isset($_SERVER['HTTP_HEADERKEY']) && $_SERVER['HTTP_HEADERKEY'] != '') {
    $response = array();
    $obj = new model;
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "select") {
        $tbl = $_REQUEST['table_name'];
        $res = $obj->select_data($tbl);

        if ($res->num_rows > 0) {
            $response["Data"] = array();
            while ($Rows = $res->fetch_array()) {
                $data = array();
                $data = $Rows;
//                print_r($data);
                array_push($response["Data"], $data);
            }
            $response["success"] = 1;
            $response["message"] = "Success";
        } else {
            $response["success"] = 0;
            $response["message"] = "No record found";
            echo json_encode($response);
        }

        echo json_encode($response);
    }
    
    //json parsing in selecwhere
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "select_where") {
        $tbl = $_REQUEST['table_name'];
        $WhereKeys = explode(',', $_REQUEST['where_condition_keys']);
        $Wherevalues = explode(',', $_REQUEST['where_condition_values']);
        $where = array();
        $res = $obj->select_where($tbl, $WhereKeys, $Wherevalues);
        if ($res->num_rows > 0) {
            $response["Data"] = array();
            while ($Rows = $res->fetch_array()) {
                $data = array();
                $data = $Rows;
                array_push($response["Data"], $data);
            }
            $response["success"] = 1;
            $response["message"] = "Success";
        } else {
            $response["success"] = 0;
            $response["message"] = "No record found";
            echo json_encode($response);
        }
        echo json_encode($response);
    }
    
    
    //json parsing in insertdata
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "insert") {
        $tbl = $_REQUEST['table_name'];
        $InsertKeys = explode(',', $_REQUEST['insert_keys']);
        $InsertValues = explode(',', $_REQUEST['insert_values']);
        $where = array();
        $res = $obj->insert_data($tbl, $InsertKeys, $InsertValues);
        if ($res > 0) {
            $response["success"] = 1;
            $response["message"] = "data inserted Success";
        } else {
            $response["success"] = 0;
            $response["message"] = "error in inserting data";
        }
        echo json_encode($response);
    }
    
    
    //json parsing in update data
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "update") {
        $tbl = $_REQUEST['table_name'];
        $UpdateKeys = explode(',', $_REQUEST['update_keys']);
        $UpdateValues = explode(',', $_REQUEST['update_values']);
        $UpdateWhereKeys = explode(',', $_REQUEST['update_where_keys']);
        $UpdateWhereValues = explode(',', $_REQUEST['update_where_values']);
        $where = array();
        $res = $obj->update_data($tbl, $UpdateKeys, $UpdateValues,$UpdateWhereKeys,$UpdateWhereValues);
        if ($res > 0) {
            $response["success"] = 1;
            $response["message"] = "Data Updated Successfully";
        } else {
            $response["success"] = 0;
            $response["message"] = "Error while data updating";
        }
        echo json_encode($response);
    }
    
    
    //json parsing in deletedata
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "delete") {
        $tbl = $_REQUEST['table_name'];
        $DeleteWhereKeys = explode(',', $_REQUEST['delete_where_keys']);
        $DeleteWhereValues = explode(',', $_REQUEST['delete_where_values']);
        $where = array();
        $res = $obj->delete_data($tbl, $DeleteWhereKeys,$DeleteWhereValues);
        if ($res > 0) {
            $response["success"] = 1;
            $response["message"] = "Data Deleted Successfully";
        } else {
            $response["success"] = 0;
            $response["message"] = "Error while data deleting";
        }
        echo json_encode($response);
    }
    
    
    //json parsing in selecjoin where
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "select_join_where") {
        $JoinWhereKeys = explode(',', $_REQUEST['join_where_keys']);
        $JoinWhereValues = explode(',', $_REQUEST['join_where_values']);
        $JoinTables = explode(',', $_REQUEST['join_tables']);
        $JoinOnValues = explode(',', $_REQUEST['join_on_values']);
        $BaseTableName = $_REQUEST['base_table_name'];

        // SELECT * FROM city JOIN state ON city.state_id = state.sid JOIN country ON state.cid = country.cid

        $res = $obj->select_join_where($BaseTableName,$JoinTables,$JoinOnValues,$JoinWhereKeys,$JoinWhereValues);
        	


        if ($res->num_rows > 0) {
            $response["Data"] = array();
            while ($Rows = $res->fetch_array()) {
                $data = array();
                $data = $Rows;
                array_push($response["Data"], $data);
            }
            $response["success"] = 1;
            $response["message"] = "Success";
        } else {
            $response["success"] = 0;
            $response["message"] = "No record found";
//            echo json_encode($response);
        }
        echo json_encode($response);
    }

    
    
    //json parsing in select using aggregate function
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "select_aggregate") {
        $WhereKeys = explode(',', $_REQUEST['where_keys']);
        $WhereValues = explode(',', $_REQUEST['where_values']);
        $TableName = $_REQUEST['table_name'];
        $AggregateOperation = $_REQUEST['aggregate_operation'];
        $AggregateField = $_REQUEST['aggregate_field'];

        // SELECT * FROM city JOIN state ON city.state_id = state.sid JOIN country ON state.cid = country.cid

        $res = $obj->select_aggregate_where($TableName,$AggregateOperation,$AggregateField,$WhereKeys,$WhereValues);
        	


        if ($res->num_rows > 0) {
            $response["Data"] = array();
            while ($Rows = $res->fetch_array()) {
                $data = array();
                $data = $Rows;
                array_push($response["Data"], $data);
            }
            $response["success"] = 1;
            $response["message"] = "Success";
        } else {
            $response["success"] = 0;
            $response["message"] = "No record found";
            echo json_encode($response);
        }
        echo json_encode($response);
    }
    
    
    if (isset($_REQUEST['operation']) && $_REQUEST['operation'] == "image_upload") {
        $fieldName =  $_REQUEST['filefiledname'];
        $tbl = $_REQUEST['table_name'];
        if(isset($_FILES['image'])){
                    if ($_FILES['image']["error"] <= 0){
                    $FileName = $_FILES['image']["name"];
                        if(move_uploaded_file($_FILES['image']["tmp_name"], "upload/" . $_FILES['image']["name"])){
                        $res = $obj->insert_data($tbl, array('image'), array($FileName));
                            $response["success"] = 1;
                            $response["message"] = "Data Updated Successfully";
                        }else{
                            $response["success"] = 0;
                            $response["message"] = "Error while data updating";
                        }
                    }
                }

        echo json_encode($response);
    }

} else {
    echo "header not set";
}
?>
