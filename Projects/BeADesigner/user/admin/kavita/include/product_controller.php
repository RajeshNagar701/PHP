 
<?php
include 'model.php';
$obj1=new model();

$category=$obj1->select($conn,"category");
$subcat=$obj1->select($conn,"sub_category");
$product=$obj1->join_three($conn,"product","sub_category","product.sub_category_id=sub_category.sub_category_id","category","sub_category.category_id=category.category_id");
//$product_index=$obj1->selectIndex($conn,"product");

if(isset($_REQUEST['category_id']))
{
	$cid=$_REQUEST['category_id'];
	$where=array(
			"category_id"=>$cid
			);
	$scat=$obj1->select_where($conn,"sub_category",$where);
	//print_r($scat);
	echo "<option>Select SubCategory</option> ";
	while($ss=$scat->fetch_object())
	{?>
		 <option value="<?php echo $ss->sub_category_id; ?>"><?php echo $ss->sub_category_name; ?></option>
<?php	
	}
}

//insert
if(isset($_REQUEST['addproduct']))
{
	$subcat=$_REQUEST['subcategory'];
	$product=$_REQUEST['product'];
	$image=$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	$desc=$_REQUEST['desc'];
	$price=$_REQUEST['price'];
	$colour=$_REQUEST['colour'];
	$size=$_REQUEST['size'];
	$qty=$_REQUEST['qty'];
	$index = "0";
	if($_REQUEST['index'] == "on") $index= "1";
	$data=array(
		"product_name"=>$product,
		"image"=>$image,
		"discription"=>$desc,
		"price"=>$price,
		"colour"=>$colour,
		"size"=>$size,
		"quantity"=>$qty,
		"sub_category_id"=>$subcat,
		"show_index"=>$index
		
	);
	$ins=$obj1->insert($conn,"product",$data);
	if($ins>0)
	{
		move_uploaded_file($tmp,"image/".$image);
		echo"<script>alert('insert')</script>";
		header('location:view_product.php');
	}
	else
	{
		echo"<script>alert('error in insert')</script>";
	}
}
	
//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"product_id"=>$did
			);
	$ph=$obj1->select_where($conn,"product",$where);
	$pho=$ph->fetch_object();
	$image=$pho->image;
	
	$image="image/".$image;
	
	unlink($image);
	$del=$obj1->delete($conn,"product",$where);
	if($del>0)
	
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:../kavita/view_product.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		header("location:../kavita/view_subcategory.php");	
	}
	
}
//edit
if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$where=array(
				"product_id"=>$eid
				);
	//$sel=$obj1->select_where($con,"product",$where);
	$prod=$obj1->select_where($conn,"product",$where);
	
	$p=$prod->fetch_object();
	
	
	if(isset($_REQUEST['edit_product']))
	{
		$subcat=$_REQUEST['subcategory'];
		$product=$_REQUEST['product'];
		$image=$_FILES['image']['name'];
		$tmp=$_FILES['image']['tmp_name'];
		$desc=$_REQUEST['desc'];
		$price=$_REQUEST['price'];
		$colour=$_REQUEST['colour'];
		$size=$_REQUEST['size'];
		$qty=$_REQUEST['qty'];
		$index = "0";
		if($_REQUEST['index'] == "on") $index= "1";
		
	$data=array(
		"product_name"=>$product,
		"image"=>$image,
		"discription"=>$desc,
		"price"=>$price,
		"colour"=>$colour,
		"size"=>$size,
		"quantity"=>$qty,
		"sub_category_id"=>$subcat,
		"show_index"=>$index
	);
			$upd=$obj1->update($conn,"product",$data,$where);
			if($upd>0)
			{
				move_uploaded_file($tmp,"image/".$image);
				header("location:view_product.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}
	
	
}

		
		
		
	
?>
