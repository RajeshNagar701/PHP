<?php
include 'model.php';
$obj1=new model();
session_start();     





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

///////////////////
if(isset($_REQUEST["proceedtopayment"]))
{

	header("location:shippinginfo.php");
}



/// add to cart
if(isset($_REQUEST["product"]))
{
   
    $prod_id= $_REQUEST["product"];
    $data = array("product_id" => $prod_id);
    $prod = $obj1->select_where($conn,"product", $data);
    $prod_data = $prod->fetch_object();
    
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
                //header('location:./user/shoppingcart.php');
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
                    if($cart_items["product_id"]==$k)
                    {
                       $_SESSION["cart"][$k]["quantity"]=$v;
                    }
                }
            }
            
        }
        header('location:cart.php');
     
     
}

//insert shipping info


//insert
if(isset($_REQUEST['proceed']))
{
	$address=$_REQUEST['address'];	
	$date=$_REQUEST['date'];	
	$data=array(
		"shipping_address"=>$address,
		"shipping_date"=>$date
			   );
	$ins=$obj1->insert($conn,"shipping",$data);
	if($ins>0)
	{
		echo "<script>alert('Shipping Information will be Accepted.')</script>";
		//header('location:view category.php');
	}
	else
	{
		echo "<script>alert('Error in Insert')</script>";
		//header('location:addcategory.php');
	}
	
	
}


//fetch order info

$order=$obj1->select($conn,"shipping");


/*

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $where = array("category_id" => $id);
    $subcat = $obj->select_where($con, "subcategory", $where);

    while ($detail = $subcat->fetch_object()) {
        $ff[] = $detail;
    }

    foreach ($ff as $sub) {
        ?> 
        <option value="<?php echo $sub->subcat_id; ?>"><?php echo $sub->subcategory_name; ?></option>
        <?php
    }
}


if (isset($_REQUEST['catid'])) {
    $catid = $_REQUEST['catid'];
    $subcatid = $_REQUEST['subcatid'];

    $where = array("category" => $catid, "subcategory" => $subcatid);
    $subcat = $obj->select_where($con, "my_idea", $where);

    while ($detail = $subcat->fetch_object()) {
        $ff[] = $detail;
    }
    //print_r($ff);
    foreach ($ff as $sub) {
        ?> 

        <div class="span2">
            <img src="<?php echo "../Innovators/images/" . $sub->file; ?>">
        </div>   
        <div class="span4">    
            <h3>New | Available</h3>				
            <hr class="soft"/>
            <h5><?php echo $sub->title; ?> </h5>
            <p>
        <?php echo $sub->short_description; ?>
            </p>
            <a class="btn btn-small pull-right" href="product_details.php?idd=<?php echo $sub->mi_id; ?>">View Details</a>
            <br class="clr"/>
        </div>
        <div class="span3 alignR">
            <form class="form-horizontal qtyFrm">
                <h3> <?php echo $sub->price; ?> Rs.</h3>
                <br/>
                <a href="Ideas_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                <a href="Ideas_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
            </form>
        </div>

        <?php
    }
}

// Search Idea Records

if (isset($_REQUEST['search_sub'])) {
    $cat = $_REQUEST['category'];
    $subcat = $_REQUEST['subcategory'];

    $data = array("category" => $cat, "subcategory" => $subcat);

    $ser = $obj->search($con, "my_idea", $data);
}

//Fetch User Profile details
$id = $_SESSION['id'];
$data = array("cust_id" => $id);
$user = $obj->select_where($con, "customer", $data);
$user_data = $user->fetch_object();

//Join two Tables

$cat_sub = $obj->join_two($con, "category", "subcategory", "category.category_id=subcategory.category_id");

$state_cou = $obj->join_two($con, "country", "state", "country.cid=state.cid");

$city_state = $obj->join_two($con, "state", "city", "state.state_id=city.state_id");

$fb_cust = $obj->join_two($con, "feedback", "customer", "customer.cust_id=feedback.cust_id");

//Join Four

$cu_ca_sub_mi = $obj->join_four($con, "my_idea", "customer", "my_idea.cust_id=customer.cust_id", "category", "my_idea.category=category.category_id", "subcategory", "my_idea.subcategory=subcategory.subcat_id");

//product_Details

if (isset($_REQUEST['idd'])) {
    $idd = $_REQUEST['idd'];
    $where = array("mi_id" => $idd);
    $mi_idea = $obj->join_four_where($con, "my_idea", "customer", "my_idea.cust_id=customer.cust_id", "category", "my_idea.category=category.category_id", "subcategory", "my_idea.subcategory=subcategory.subcat_id", $where);
}

$cat_sub_or_cust = $obj->join_four($con, "orders", "category", "orders.category=category.category_id", "subcategory", "orders.subcategory=subcategory.subcat_id", "customer", "orders.cust_id=customer.cust_id");

// Insert Contact Details

if (isset($_REQUEST["contact_sub"])) {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $sub = $_REQUEST["subject"];
    $desc = $_REQUEST["description"];

    $data = array("name" => $name, "email" => $email, "subject" => $sub, "description" => $desc);

    $cont_ins = $obj->insert($con, "contact_us", $data);
    if ($cont_ins == true) {
        echo "<script>alert('Data Submitted Successfully')</script>";
    }
}

// Update Profile Data

if (isset($_REQUEST['upd_profile'])) {
    $ctype = $_REQUEST["custtype"];
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $com = $_REQUEST["company"];
    $add = $_REQUEST["address"];
    $city = $_REQUEST["city"];
    $state = $_REQUEST["state"];
    $zcode = $_REQUEST["zcode"];
    $country = $_REQUEST["country"];
    $mn = $_REQUEST["mobile"];


    $data = array("first_name" => $fname, "last_name" => $lname, "email" => $email, "password" => $pass, "company" => $com, "address" => $add,
        "city" => $city, "state" => $state, "zipcode" => $zcode, "country" => $country,
        "mobile_phone" => $mn, "cust_type" => $ctype);

    $where = array("cust_id" => $_SESSION['id']);
    $cust_ins = $obj->update($con, "customer", $data, $where);
    if ($cust_ins == true) {
        header("location:manageprofile.php");
    }
}

// Insert Myidea Details

if (isset($_REQUEST['idea_sub'])) {
    $category = $_REQUEST['category'];
    $sub_cat = $_REQUEST['subcategory'];
    $title = $_REQUEST['title'];
    $desc = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    $file = $_FILES['userfile']['name'];
    $tmp_name = $_FILES['userfile']['tmp_name'];

    move_uploaded_file($tmp_name, "images/" . $file);

    $data = array("category" => $category, "subcategory" => $sub_cat, "title" => $title, "description" => $desc, "price" => $price, "file" => $file);

    $myidea_ins = $obj->insert($con, "my_idea", $data);
    if ($myidea_ins == true) {
        echo "<script>alert('Idea Successfully Submitted')</script>";
    }
}

// Insert Feedback Deatils

if (isset($_REQUEST['feedback_sub'])) {
    $title = $_REQUEST['title'];
    $msg = $_REQUEST['message'];

    $data = array("title" => $title, "description" => $msg, "cust_id" => $_SESSION['id']);
    $fb_ins = $obj->insert($con, "feedback", $data);
    if ($fb_ins == true) {
        echo "<script>alert('Feedback Details Submitted Successfully');</script>";
    }
}


// Insert Contact Us Details
// Join Three Tables
// $emp_dep_des = $obj->join_three($conn,"employee_details","department","employee_details.dept_id=department.dept_id","designation","employee_details.desg=designation.des_id");
//Join Four
//  $te_tl_pr_em = $obj->join_three($conn, "assign_project", "technology", "assign_project.technology=technology.tech_id","employee_details","assign_project.tl_id=employee_details.emp_id","project","assign_project.project_name=project.pro_id");
// Count Records
//$emp = $obj->count_records($conn,"employee_details");
$date = date("Y-m-d");

*/


?>
