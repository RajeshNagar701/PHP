 <?php
include('header.php');
if(isset($_POST['addcat']))
{
	$cat=$_POST['catname'];
	$sql="insert into category values('','$cat')";
	$que=$con->query($sql);
	//echo $sql; exit();
	
header('viewcategroy.php');
}
?>
	<!-- /. NAV SIDE  -->
	<div id="page-wrapper">
	    <div id="page-inner">
		<div class="row">
		    <div class="col-md-12">
			<h1 class="page-head-line">New Category</h1>

		    </div>
	 	</div>
		<!-- /. ROW  -->
		  <!-- /. ROW  -->

		<!-- /. ROW  -->

		    <br />
			<!-- 16:9 aspect ratio -->
			<div class="">
    <div class="panel panel-default">
			
		   <div class="panel panel-info">
          <div class="panel-heading">
                        Add Category
          </div>
           <div class="panel-body">
             <form role="form" method="post">
            <div class="form-group">
              <label>Enter Category</label>
             <input class="form-control" name="catname" type="text">
             
          </div>
                   <div class="form-group">
                
          <button type="submit" name="addcat" class="btn btn-info">Add Category </button>
        </div>
        </form>
      </div>
  </div>
 </div>                        
			</div>
		    </div>
		</div>
		<!--/.Row-->
		<hr />
	     
		 
	      <!-- Nested media object -->
  
		<!--/.Row-->
		<hr />
	     
		<!--/.ROW-->

	    </div>
	    <!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
    include('footer.php');
?>
</body>
</html>
