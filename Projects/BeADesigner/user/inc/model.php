<?php
include 'connect.php';
$obj= new connect();
$con=$obj->conect();

class model
{
	public function insert($con,$table,$data)
	{
		$columns=  array_keys($data);
        $key= implode(",", $columns);
        $values=  array_values($data);
        $val= implode("','", $values);
		
		$ins="insert into $table($key) values('$val')";
		//echo $ins;exit;
		$exe=$con->query($ins);
		return $exe;
	}
	public function select($con,$table)
	{
		$sel="select * from $table";
		//echo $sel;exit;
		$exe=$con->query($sel);
		while($fet=$exe->fetch_object())
		{
			$res[]=$fet;
		}
		return $res;
		
	}
	
	//delete record 
	
	public function delete($con,$table,$where)
	{
		$key=array_keys($where);
		$val=array_values($where);
		$del="delete from $table where 1=1";
		$i=0;
		foreach($val as $w)
		{
			$del.=" and $key[$i]='$val[$i]'";
			$i++;
			 
		}
		
		//echo $del; exit;
 		$d=$con->query($del);
		return $d;
	
	}
		
	// view record
	//select reg.*,country.* from reg join country on reg.cid=country.cid
	public function join_two($con,$table1,$table2,$join)
	{
	   $sel="select * from $table1 join $table2 on $join"; 
		//echo $sel;exit;
		$exe=$con->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
	}
	
	// view record
	//select product.*,subcategory.* from product join subcategory on product.sub_cat_id=subcategory.sub_cat_id join category on subcategory.cat_id=category.cat_id;
	public function join_three($con,$table1,$table2,$join,$table3,$join2)
	{
	   $sel="select * from $table1 join $table2 on $join join $table3 on $join2"; 
		//echo $sel;exit;
		$exe=$con->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
	}
	
	
	// select * from reg where uid=2
    public function select_where($con,$table1,$where)
	{
		$key=array_keys($where);
		$val=array_values($where);
		$sel="select * from $table1 where 1=1 ";
		$i=0;
		foreach($where as $vall)
		{
			$sel.= "  and $key[$i]='$val[$i]'";
			$i++;
		}
		//echo $sel; exit;
		$row1=$con->query($sel);
		return $row1;
		
	
	} 
	
//update code 
	public function update($con,$table,$data,$where)
	{
		$key=array_keys($data);
		$val=array_values($data);
		$sel="update $table set ";
		$i=0;
		foreach($data as $dw)
		{
			if(sizeof($data)==$i+1)
			{
			$sel.=" $key[$i]='$val[$i]'";			
			}
			else
			{
		     $sel.=" $key[$i]='$val[$i]',";

			}
			$i++;
		}
	    $sel.=" where 1=1 ";
		$wkey=array_keys($where);
		$wval=array_values($where);
		$j=0;
		foreach($where as $v)
		{
			$sel.=" and $wkey[$j]='$wval[$j]'";
			$j++;
		}
		//echo $sel; exit;
		$row=$con->query($sel);
		return $row;
	}


//

public function join_three($con,$table1,$table2,$join,$table3,$join2,$where)
	{
	   $sel="select * from $table1 join $table2 on $join join $table3 on $join2"; 
	   	$sel.=" where 1=1 ";
		$wkey=array_keys($where);
		$wval=array_values($where);
		$j=0;
		foreach($where as $v)
		{
			$sel.=" and $wkey[$j]='$wval[$j]'";
			$j++;
		}
		//echo $sel;exit;
		$exe=$con->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
	}


}
?>