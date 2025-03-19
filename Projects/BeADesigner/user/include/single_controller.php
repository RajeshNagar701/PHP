<?php  
include 'model.php';
$obj1=new model();



$category=$obj1->select($conn,"category");
$subcategory=$obj1->join_two($conn,"sub_category","category","sub_category.category_id=category.category_id");






//$category=$obj1->select_all($conn,'category');


//select sub category
if(isset($_REQUEST['asub_cat']))
{
	$id=$_REQUEST['asub_cat'];
	
	$fld=array(
				"sub_category_id",
				"sub_category_name"
	);
	
	$where=array(
				"category_id"=>$id
	);
	
	$sub_cat=$obj1->select_where_mul($conn,'sub_category',$fld,$where);
	
	if($sub_cat)
	{	
	foreach($sub_cat as $sc)
	{
?>
	<li><a class="list" href="products.php?pid=<?php echo $sc->sub_category_id; ?>"><?php echo $sc->sub_category_name; ?></a></li>
<?php
	}
	}
	else
	{
?>
		<li><a class="list" href="#">There are no Subcategory.</a></li>
<?php	
    }
}



$s=$obj1->select_single($conn,"product");
//print_r($hostel);exit;
	


if(isset($_REQUEST['pid']))
{
	$single=$_REQUEST['pid'];
	$where=array("product_id"=>$single);
	
	


$cat=$obj1->select_where($conn,"product",$where);
	$fet=$cat->fetch_object();
	}
	
?>