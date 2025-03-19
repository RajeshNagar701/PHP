 
<?php
include 'model.php';
$obj1=new model();


$category=$obj1->select_all($conn,"category");
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















//$category=$obj1->select($conn,"category");
$subcat=$obj1->select($conn,"sub_category");
$product=$obj1->join_three($conn,"product","sub_category","product.sub_category_id=sub_category.sub_category_id","category","sub_category.category_id=category.category_id");
//$product_index=$obj1->selectIndex($conn,"product");
$prod=$obj1->select_limit($conn,"product");
$products=$obj1->select_limit8($conn,"product");
$prod1=$obj1->select_where1($conn,"product","sub_category_id" );
$prod2=$obj1->select_where2($conn,"product","product_id");

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
//fetch record

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
////////////fetch products
if(isset($_REQUEST['pid']))
{
	$pid=$_REQUEST['pid'];
	$where=array(
				"sub_category_id"=>$pid
				);
	//$sel=$obj1->select_where($con,"product",$where);
	$prod1=$obj1->select_where($conn,"product",$where);
	
	while($p=$prod1->fetch_object())
	{
		$rr[]=$p;
	}
}

//fetch single record
if(isset($_REQUEST['sid']))
{
	$sid=$_REQUEST['sid'];
	$where=array(
				"product_id"=>$sid
				);
	//$sel=$obj1->select_where($con,"product",$where);
	$prod2=$obj1->select_where1($conn,"product",$where);
	
	while($p=$prod1->fetch_object())
	{
		$rr[]=$p;
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

  // Add to cart


            if(isset($_REQUEST["product"]))
{
	     
   
    $prod_id= $_REQUEST["product"];
    $data = array("product_id" => $prod_id);
    $prod = $obj1->select_where($conn,"product", $data);
    $prod_data = $prod->fetch_object();
	
	//  print_r($prod_data); exit;
    
 // echo count($_SESSION['cart']);
    
    if(count($_SESSION["cart"])!=0)
    {
       // echo "1"; exit;
        $count=0;
        foreach($_SESSION["cart"] as $cart_items)
        {
           
            if($cart_items["product_id"]==$prod_id)
            {
                $count++;
                $_SESSION["cart"][$prod_id]["quantity"]= $_SESSION["cart"][$prod_id]["quantity"]+1; 
                header('location:cart.php');
            }
       
        }
        if($count==0)
        {
            
            $_SESSION["cart"][$prod_id]["product_id"]=$prod_data->product_id;
            $_SESSION["cart"][$prod_id]["product_name"]=$prod_data->product_name;
            $_SESSION["cart"][$prod_id]["price"]=$prod_data->price;
			$_SESSION["cart"][$prod_id]["image"]=$prod_data->image;
            $_SESSION["cart"][$prod_id]["quantity"]=1;

            header('location:cart.php');
        }
     
    }
    else
    {
        
        $_SESSION["cart"][$prod_id]["product_id"]=$prod_data->product_id;
        $_SESSION["cart"][$prod_id]["product_name"]=$prod_data->product_name;
        $_SESSION["cart"][$prod_id]["price"]=$prod_data->price;
		$_SESSION["cart"][$prod_id]["image"]=$prod_data->image;
        $_SESSION["cart"][$prod_id]["quantity"]=1;
		
	
        
        header('location:cart.php');
  
    }  
            
}

/// delete values from cart

if(isset($_REQUEST["remove_cartid"]))
{
    $prod_id= $_REQUEST["remove_cartid"];
    unset( $_SESSION["cart"][$prod_id]);
	//session_destroy();
    header('location:cart.php');
}

if(isset($_REQUEST["empty"]))
{
	unset( $_SESSION["cart"]);
    header('location:index.php');
     
     
}
if(isset($_REQUEST["updatecart"]))
{
   
      foreach($_SESSION["cart"] as $cart_items)
        {
          
            foreach($_REQUEST["cart"] as $data )
            {
                foreach($data as $k=>$v)
                {
                    if($cart_items["sub_id"]==$k)
                    {
                       $_SESSION["cart"][$k]["quantity"]=$v;
                    }
                }
            }
            
        }
    
        header('location:cart.php');
     
     
}
  //insert
if(isset($_REQUEST['order']))
{
	session_start();
	$user=$_SESSION['id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$gender=$_REQUEST['gender'];
	$gift=$_REQUEST['gift'];
	$dog=$_REQUEST['dog'];
	$addr=$_REQUEST['address'];
	$contact=$_REQUEST['contact'];
	$photo=$_REQUEST['photo'];
	$price=$_REQUEST['price'];
	
	
	$data=array(
		"customer_id"=>$user,
		"name"=>$name,
		"email"=>$email,
		"gender"=>$gender,
		"gift"=>$gift,
		"dog"=>$dog,
		"address"=>$addr,
		"contact"=>$contact,
		"photo"=>$photo,
		"price"=>$price
		
		
	);
	//print_r($data);exit;
	$ins=$obj1->insert($conn,"custom",$data);
	if($ins>0)
	{
		echo"<script>alert('insert')</script>";
		header('location:../index.php');
	}
	else
	{
		echo"<script>alert('error in insert')</script>";
	}
}
		
		
	
?>
