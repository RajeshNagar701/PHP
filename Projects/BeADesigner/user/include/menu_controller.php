<?php
include 'model.php';
$obj1=new model();

$category=$obj1->select($conn,"category");
$subcategory=$obj1->join_two($conn,"sub_category","category","sub_category.category_id=category.category_id");

?>






