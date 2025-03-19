<?php
	include('connection.php');
	
class model
{
	
	public function search_between_date($conn,$table,$colmn,$frm,$to)
        {
            $sr = "select * from $table where $colmn between '$frm' and '$to'";
           
            echo $sr; exit;
             $ex = $conn->query($sr);
             while($fe = $ex->fetch_object())
             {
                 $rr[] = $fe;
             }
             return $rr;
        }
		
	
	
	
	
		//insert record
		public function insert($conn,$table,$data)
	{
		$k=  array_keys($data);
        $ks= implode(",", $k);
        $v=  array_values($data);
        $vs= implode("','", $v);
		
		$ins="insert into $table($ks) values('$vs')";
		//echo $ins;exit;
		$exe=$conn->query($ins);
		return $exe;
	}
	public function select($conn,$table)
	{
		 $sel="select * from $table";
		
		//exit;
		$exe=$conn->query($sel);
		while($fet=$exe->fetch_object())
		{
			$res[]=$fet;
		}
		//print_r($res);exit;
		return $res;
	}
	
	//delete record
	public function delete($conn,$table,$where)
	{
		$k=  array_keys($where);
		$v=  array_values($where);
		$del="delete from $table where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$del .=" and $k[$i]='$v[$i]'";
			$i++;
		}
		//echo $del; exit;
		$d=$conn->query($del);
		return $d;
	} 
	//join_two
	public function join_two($conn,$table1,$table2,$join)
	{
		$sel="select * from $table1 join $table2 on $join";
		$exe=$conn->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
	
		//echo $sel;
		return $row;
	}
	
	//select_where
	public function select_where($conn,$table,$where)
	{
		$key=array_keys($where);
		$val=array_values($where);
		$sel="select * from $table where 1=1";
		$i=0;
		foreach($where as $vall)
		{
			$sel .=" and $key[$i]='$val[$i]'";
			$i++;
		}
		//echo $sel;exit;
		$row1=$conn->query($sel);
		return $row1;
	}
		
	
	//update code
	public function update($conn,$table,$data,$where)
	{
		$k=  array_keys($data);
		$v=  array_values($data);
		$sel="update $table set";
		$i=0;
		foreach($data as $dw)
		{
			foreach($data as $w)
			{
				if(sizeof($data)==$i+1)
				{
					$sel .=" $k[$i]='$v[$i]'";
				}
				else
				{
					$sel .=" $k[$i]='$v[$i]',";
				}
				$i++;
			}
			$sel .=" where 1=1 ";
			$ks=array_keys($where);
			$vs=array_values($where);
			$j=0;
			foreach($where as $v)
			{
				$sel .=" and $ks[$j]='$vs[$j]'";
				$j++;
			}
			
			//echo $sel;exit;
			$row=$conn->query($sel);
			return $row;
		}
			
	}

//join_three
public function join_three($conn,$table1,$table2,$join,$table3,$join2)
	{
	   $sel="select * from $table1 join $table2 on $join join $table3 on $join2"; 
	   	
	   //echo $sel;exit;
		$exe=$conn->query($sel);
		while($f=$exe->fetch_object())
		{
			$row[]=$f;
		}
		return $row;
	}






}
 
	
?>
