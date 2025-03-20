<?php

//include 'db_config.php';
//$conn=mysqli_connect("localhost", "root", "", "demo");
class model {

    function __construct() {
        $this->connect = mysqli_connect("localhost", "root", "", "demo") or die("Connection Fail");
    }

    function insert_data($tbl, $InsertKeys, $InsertValues) {
        // $key = array_keys($data);
        $k = implode(',', $InsertKeys);
        $Val = implode("','", $InsertValues);
        $sql = "INSERT INTO $tbl ($k) values('$Val')";
//        echo $sql; 
        return $ex = $this->connect->query($sql);
    }

    function select_data($tbl) {
        $sql = "SELECT * FROM $tbl";
        return $ex = $this->connect->query($sql);
    }

    function select_where($tbl, $WhereKeys, $Wherevalues) {

        $i = 1;
        $where = array_combine($WhereKeys, $Wherevalues);
        $sql = "SELECT * FROM $tbl ";
        $sql.="WHERE 1=1 AND";
        $wcount = count($where);
        foreach ($where AS $wk => $wv) {
            if ($i >= $wcount) {
                $sql.=" $wk = '$wv' ";
            } else {
                $sql.=" $wk = '$wv' AND ";
                $i++;
            }
        }
        return $ex = $this->connect->query($sql);
    }


    function select_join_where($BaseTableName,$JoinTables,$JoinOnValues,$JoinWhereKeys,$JoinWhereValues) {

        $i = 1;
        $Join_i = 1;
        $where = array_combine($JoinWhereKeys, $JoinWhereValues);
        $sql = "SELECT * FROM $BaseTableName ";
        $JoinData = array_combine($JoinTables, $JoinOnValues);
        $JoinOnCount = count($JoinOnValues);
        foreach ($JoinData AS $JoinTableData=>$JoinOnData) {
                $sql.="JOIN $JoinTableData ";
                $sql.="ON $JoinOnData ";
        }
        $sql.="WHERE 1=1 AND";
        $wcount = count($where);
        foreach ($where AS $wk => $wv) {
            if ($i >= $wcount) {
                $sql.=" $wk = '$wv' ";
            } else {
                $sql.=" $wk = '$wv' AND ";
                $i++;
            }
        }
        // echo $sql; 
        return $ex = $this->connect->query($sql);
    }

    function select_aggregate_where($TableName,$AggregateOperation,$AggregateField,$WhereKeys,$WhereValues) {

        $i = 1;
        $where = array_combine($WhereKeys,$WhereValues);
        $sql = "SELECT $AggregateOperation($AggregateField) AS $AggregateOperation FROM $TableName ";
        $sql.="WHERE 1=1 AND";
        $wcount = count($where);
        foreach ($where AS $wk => $wv) {
            if ($i >= $wcount) {
                $sql.=" $wk = '$wv' ";
            } else {
                $sql.=" $wk = '$wv' AND ";
                $i++;
            }
        }
        // echo $sql; 
        return $ex = $this->connect->query($sql);
    }

    function update_data($tbl, $UpdateKeys, $UpdateValues, $UpdateWhereKeys, $UpdateWhereValues) {

        $up = "update $tbl set";
        $size = count($UpdateKeys);
        $i = 0;
        foreach ($UpdateKeys as $d) {
            if ($size == $i + 1) {
                $up.=" $UpdateKeys[$i]='$UpdateValues[$i]'";
            } else {
                $up.=" $UpdateKeys[$i]='$UpdateValues[$i]',";
            }
            $i++;
        }
        $up.=" where 1=1";
        $k = 0;
        foreach ($UpdateWhereKeys as $w) {
            $up.=" and $UpdateWhereKeys[$k]='$UpdateWhereValues[$k]'";
            $k++;
        }
        return $ex = $this->connect->query($up);
    }

    function delete_data($tbl, $DeleteWhereKeys, $DeleteWhereValues) {
//        $key = array_keys($where);
        $sql = "delete FROM $tbl";
        $sql.=" where 1=1";
        $k = 0;
        foreach ($DeleteWhereKeys as $w) {
            $sql.=" and $DeleteWhereKeys[$k]='$DeleteWhereValues[$k]'";
            $k++;
        }
        return $ex = $this->connect->query($sql);
    }

}

?> 