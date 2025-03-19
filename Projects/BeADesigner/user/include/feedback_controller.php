<?php
include 'model.php';
$obj1=new model();


$category=$obj1->select($conn,"category");
$subcategory=$obj1->join_two($conn,"sub_category","category","sub_category.category_id=category.category_id");
//$feedback=$obj1->join_three($conn,"customer","product","customer.product_id=product.product_id","feedback","product.feedback_id=feedback.feedback_id");
$feedback=$obj1->join_three($conn,"feedback","product","feedback.product_id=product.product_id","customer","customer.customer_id=feedback.feedback_id");
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

// Insert Feedback Deatils

if (isset($_REQUEST['pid'])) {
	
	if (isset($_REQUEST['send'])) {
	 session_start();
    //$title = $_REQUEST['title'];
    $msg = $_REQUEST['feedback'];
	$product=$_REQUEST['pid'];
	$date = date("Y-m-d");

    $data = array("feedback" => $msg, "date" => $date, "product_id" => $product , "customer_id" => $_SESSION['id']);
    $fb_ins = $obj1->insert($conn, "feedback", $data);
    if ($fb_ins == true) {
        echo "<script>alert('Feedback Details Submitted Successfully');</script>";
    }
}
}

//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"feedback_id"=>$did
			);
	$del=$obj1->delete($conn,"feedback",$where);
	if($del)
	{
		echo "<script>alert('Record Deleted')</script>";
		header('location:view feedback.php');
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header('location:addcategory.php');
	}
	
}



//insert
/*if(isset($_REQUEST['send']))
{
	$name=$_REQUEST['name'];
	$pname=$_REQUEST['pname'];
	
	$date=$_REQUEST['date'];
	$feedback=$_REQUEST['feedback'];
	
	$data=array(
		"customer_id"=>$name,
		"product_id"=>$pname,
		"date"=>$date,
		"feedback"=>$feedback,
		
	);
	$ins=$obj1->insert($conn,"feedback",$data);
	if($ins>0)
	{
		//move_uploaded_file($tmp,"image/".$image);
		echo"<script>alert('insert')</script>";
		header('location:view feedback.php');
	}
	else
	{
		echo"<script>alert('error in insert')</script>";
	}
}*/






?>