<?php
include 'model.php';
$obj1=new model();

$cat=$obj1->select($con,"category");
//$subcat=$obj1->select($con,"subcategory");
if(isset($_REQUEST['cid']))
{
	
	$cid=$_REQUEST['cid'];
	$where=array(
			"cat_id"=>$cid
			);
	$scat=$obj1->select_where($con,"subcategory",$where);
	//print_r($scat);
	while($ss=$scat->fetch_object())
	{
		$subcat[]=$ss;
	}
	?>
  <option>Select Your SubCategory</option> 
 <?php 
 foreach($subcat as $sc)
 {
 ?> 
         
  <option value="<?php echo $sc->sub_cat_id; ?>"><?php echo $sc->sub_cat_name; ?></option>
 <?php }?>
    <?php	
}


$prod=$obj1->join_three($con,"product","subcategory","product.sub_cat_id=subcategory.sub_cat_id","category","subcategory.cat_id=category.cat_id");

if(isset($_REQUEST['add_product']))
{
	$subcat=$_REQUEST['subcat'];
	$prod=$_REQUEST['product'];	
	$des=$_REQUEST['description'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	$pr=$_REQUEST['price'];
	
	$data=array(
		"name"=>$prod,	
		"description"=>$des,
		"image"=>$photo,
		"price"=>$pr,
		"sub_cat_id"=>$subcat	
	);
	$ins=$obj1->insert($con,"product",$data);
	if($ins>0)
	{
		move_uploaded_file($tmp,"image/".$photo);
		echo "<script>alert('Insert')</script>";	
		//header("location:view_product.php");
	}
	else
	{
		echo "<script>alert('Error in Insert')</script>";	
	}
	
	
}

//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"prod_id"=>$did
			);
	$ph=$obj1->select_where($con,"product",$where);
	$pho=$ph->fetch_object();
	$photo=$pho->image;
	
	$path="image/".$photo;
	
	unlink($path);
	$del=$obj1->delete($con,"product",$where);
	if($del>0)
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:../view_product.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		header("location:../view_subcategory.php");	
	}
	
}

if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$where=array(
				"prod_id"=>$eid
				);
	//$sel=$obj1->select_where($con,"product",$where);
	$prod=$obj1->select_where($con,"product",$where);
	$p=$prod->fetch_object();
	if(isset($_REQUEST['edit_product']))
	{
		
		$subcat=$_REQUEST['subcat'];
		$prod=$_REQUEST['product'];	
		$des=$_REQUEST['description'];
		$photo=$_FILES['photo']['name'];
		$tmp=$_FILES['photo']['tmp_name'];
		$pr=$_REQUEST['price'];
	
		$data=array(
		"name"=>$prod,	
		"description"=>$des,
		"image"=>$photo,
		"price"=>$pr,
		"sub_cat_id"=>$subcat	
	);
			$upd=$obj1->update($con,"product",$data,$where);
			if($upd>0)
			{
				move_uploaded_file($tmp,"image/".$photo);
				header("location:view_product.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}
	
	
}

?>






