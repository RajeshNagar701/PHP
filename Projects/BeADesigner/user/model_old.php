<?php
include_once('include/connection.php');

class model
{
	function select_all($conn,$tbl)
	{
		$select="select * from $tbl";		
		$res=$conn->query($select);
		
		while($re=$res->fetch_object())
		{
			$catarr[]=$re;
		}
		
		return $catarr;
	}
	
	function select_where_mul($conn,$tbl,$fld,$where)
	{
		$flv=$v=array_values($fld);
		$fv=implode(",",$flv);
		
		$k=array_keys($where);
		$v=array_values($where);
		
		$select="select $fv from $tbl where 1=1";
		
		$i=0;
		foreach($where as $wh)
		{
			$select .=" AND $k[$i]='$v[$i]'";
			$i++;
		}	
		//echo $select;exit;		
		$res=$conn->query($select);
		
		while($re=$res->fetch_object())
		{
			$catarr[]=$re;
		}
		if(isset($catarr))
		{		
			return $catarr;
		}
		else
		{
			return @$catarr;
		}
	}
	
	
	

	
}
?>