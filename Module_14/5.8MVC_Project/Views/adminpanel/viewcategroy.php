 <?php
include('header.php');
$sql="select * from category";
$que=$con->query($sql);
if(isset($_REQUEST['dcatid']))
{
	$id=$_REQUEST['dcatid'];
	$sql1="delete from category where  catid=$id";
	$con->query($sql1);
	header("location:viewcategroy.php");
}
?>
	<!-- /. NAV SIDE  -->
	<div id="page-wrapper">
	    <div id="page-inner">
		<div class="row">
		    <div class="col-md-12">
			<h1 class="page-head-line">Category Details</h1>

		    </div>
		</div>
		<!-- /. ROW  -->
		  <!-- /. ROW  -->

		<!-- /. ROW  -->

		    <br />
			<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
    <div class="panel panel-default">
			<div class="panel-heading">
			    Categroy Details
			</div>
			<div class="panel-body">
			    <div class="table-responsive">
				<form method="post">
				<table class="table">
				    <thead>
					<tr>
					    <th>CatID</th>
					    <th>Category NAme</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody>
			<?php
				while($row=$que->fetch_object())
				{
			?>
				<tr>
					<td><?php echo $row->catid ?></td>
					<td><?php echo $row->catname ?></td>
					<td><a href="viewcategroy.php?dcatid=<?php echo $row->catid ?>">Delete</a> | 
						<a href="addcategory.php?ecatid=<?php echo $row->catid ?>">Edit</a>
					</td>
				</tr>
				 
			<?php
				}
			?>
				   </tbody>
				</table>
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
