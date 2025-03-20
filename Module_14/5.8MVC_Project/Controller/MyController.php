<?php 
//controller is use for get,post,request method and put conditions and loops in switchcase

session_start();
require_once('Model/MyModel.php');
class MyController extends MyModel{
	
	function __construct()
	{
		parent::__construct();
		if (isset($_SERVER['PATH_INFO'])) {
			# code...
			switch ($_SERVER['PATH_INFO']) {
				case '/home':
					include_once("Views/header.php");
					include_once("Views/main.php");
					include_once("Views/footer.php");			
					break;
				case '/logout':
				session_destroy();
					?>
							<script type="text/javascript">
								alert("logout");
								window.location.href="login";
							</script>
						<?php
					break;
				case '/login':
					include_once("Views/login/index.php");
				
					if (isset($_REQUEST['Login'])) {
						$LoginRes = $this->LoginData($_REQUEST['email'],$_REQUEST['password']);
					
						if ($LoginRes['Code'] == 1) {
							
							$_SESSION['UserData'] = $LoginRes['Data'];
							if ($LoginRes['Data']->role_id == 1) { ?>
								<script type="text/javascript">
									alert("Hello Admin");
									window.location.href="admin/home";
								</script>
							<?php	
							}else{ ?>
								<script type="text/javascript">
									alert("Hello User");
									window.location.href="home";
								</script> <?php
							}
						}else{
							?>
							<script type="text/javascript">
								alert("invalid login details");
							</script>
						<?php }
					}
					if (isset($_REQUEST['SignUp'])) {
						$data = array("username"=>$_REQUEST['name'],
								"password"=>$_REQUEST['password'],
								"gender"=>'Male',
								"mobile"=>'123456',
								"email"=>$_REQUEST['email'],
								"hobby"=>'Cricket',
								"city"=>'1',
								"image"=>'default.jpg',
								"role_id"=>'2');
						$this->InsertData('user',$data);
					}
					break;
				case '/admin/home':
					
					include_once("Views/admin/header.php");
					include_once("Views/admin/main.php");
					include_once("Views/admin/footer.php");
					break;
				case '/admin/allusers':
					$allUsersData = $this->SelectData('user');
					
					include_once("Views/admin/header.php");
					include_once("Views/admin/allusersview.php");
					include_once("Views/admin/footer.php");
					break;
				case '/admin/addnewuser':
					include_once("Views/admin/header.php");
					include_once("Views/admin/addnewusersview.php");
					include_once("Views/admin/footer.php");
					
					if (isset($_REQUEST['AddNewUserBtn'])) {
					
					$hb = implode(',', $_REQUEST['chk']);
					$Pass = $_REQUEST['Password'];
						$UserDataArray = array("username"=>$_REQUEST['UserName'],
										"password"=>$Pass,
										"gender"=>$_REQUEST['Gender'],
										"hobby"=>$hb,
										"mobile"=>$_REQUEST['Mobile'],
										"city"=>$_REQUEST['City'],
										"email"=>$_REQUEST['email'],
										"role_id"=>2
									);
						$InsertUsersData = $this->InsertData('user',$UserDataArray);
					}
					break;
				case '/admin/DeleteUser':
					$DeleteIdWiseUsersData = $this->DeleteData('user',array("user_id"=>$_REQUEST['id']));
					if ($DeleteIdWiseUsersData['Code'] == 1) { ?>
						<script type="text/javascript">
							alert("Data Deleted");
							window.location.href="allusers";
						</script> <?php	 }else{ ?>
						<script type="text/javascript">
							alert("ERROR while updating");
						</script> <?php
					}
					break;
				case '/admin/EditUser':

					$IdWiseUsersData = $this->SelectWhere('user',array("user_id"=>$_REQUEST['id']));
					$AllCityData = $this->SelectData('city');
					

					include_once("Views/admin/header.php");
					include_once("Views/admin/editusersview.php");
					include_once("Views/admin/footer.php");
					
					if (isset($_REQUEST['UpdateUserBtn'])) {
						$hb = implode(',', $_REQUEST['chk']);
						$Pass = $_REQUEST['Password'];
						$UserDataArray = array("username"=>$_REQUEST['UserName'],
										"password"=>$Pass,
										"gender"=>$_REQUEST['Gender'],
										"hobby"=>$hb,
										"mobile"=>$_REQUEST['Mobile'],
										"city"=>$_REQUEST['City'],
										"email"=>$_REQUEST['email'],
										"role_id"=>2
									);
						
						$InsertUsersData = $this->UpdateData('user',$UserDataArray,array("user_id"=>$_REQUEST['id']));
						if ($InsertUsersData['Code'] == 1) { ?>
								<script type="text/javascript">
									alert("Data Updated");
									window.location.href="allusers";
								</script>
							<?php	
							}else{ ?>
								<script type="text/javascript">
									alert("ERROR while updating");
								</script> <?php
							}
					}
					break;
				default:
					
					break;
			}
		}else{ ?>
		<script type="text/javascript">
			window.location.href="home";
		</script>
		<?php }
	}
}

$ObMyCont = new MyController;

?>
