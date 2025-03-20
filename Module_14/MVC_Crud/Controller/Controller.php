<?php

date_default_timezone_set('Asia/Kolkata');
require_once('Model/Model.php');
session_start();

class Controller extends Model {
	
	function __construct() {
		parent::__construct();

		if(isset($_SERVER['PATH_INFO'])) {
			switch ($_SERVER['PATH_INFO']) {
				case '/index':
				include 'Views/index.php';
				break;
				case '/register':
				if(isset($_POST['regist'])){

					$path = 'uploads/';
					$extention = pathinfo($_FILES['profile']['name'],PATHINFO_EXTENSION);
					$file_name = $_POST['fname'].'_'.date('YmdHis').'.'.$extention;
					$profile = (file_exists($_FILES['profile']['tmp_name'])) ? $file_name : null;

					$insert_data = [

						'fname' => $_POST['fname'],
						'lname' => $_POST['lname'],
						'email' => $_POST['email'],
						'pass' => password_hash($_POST['password'],PASSWORD_DEFAULT),
						'contact' => $_POST['mobile'],
						'gender' => $_POST['gender'],
						'address' => $_POST['address'],
						'state' => $_POST['state'],
						'profile' => $profile,
						'hobbies' => implode(',',$_POST['hobbies'])
					];

					$insertEx = $this->InsertData('users', $insert_data);
					if($insertEx['Code']){
						if(!is_null($profile)){
							move_uploaded_file($_FILES['profile']['tmp_name'], $path.$file_name);
						}
						?>
						<script type="text/javascript">
							alert("<?php echo $insertEx['Message'] ?>");
							window.location.href = 'login';
						</script>	
						<?php
					} else {
						?>
						<script type="text/javascript">
							alert("<?php echo $insertEx['Message'] ?>");
							window.location.href = 'register';
						</script>	
						<?php
					}	
				}
				include 'Views/header.php';
				include 'Views/register.php';
				include 'Views/footer.php';

				break;
				case '/login':
				if(isset($_SESSION['user_data']) && $_SESSION['user_data']->role_id == 1){
					?>
					<script type="text/javascript">
						window.location.href = 'adminHome';
					</script>	
					<?php	
				} else if(isset($_SESSION['user_data']) && $_SESSION['user_data']->role_id == 0) {
					?>
					<script type="text/javascript">
						window.location.href = 'userHome';
					</script>	
					<?php	
				} 
				if(isset($_POST['login'])){
					$email = mysqli_real_escape_string($this->connection ,$_POST['email']);
					$pass = mysqli_real_escape_string($this->connection ,$_POST['pass']);

					$loginEx = $this->LoginData($email, $pass);
					if($loginEx['Code']){
						$_SESSION['user_data'] = $loginEx['Data'];
						if($_SESSION['user_data']->role_id == 1){
							?>
							<script type="text/javascript">
								alert("<?php echo $loginEx['Message'] ?>");
								window.location.href = 'adminHome';
							</script>	
							<?php	
						} else {
							?>
							<script type="text/javascript">
								alert("<?php echo $loginEx['Message'] ?>");
								window.location.href = 'userHome';
							</script>	
							<?php	
						}
					} else {
						?>
						<script type="text/javascript">
							alert("<?php echo $loginEx['Message'] ?>");
							window.location.href = 'login';
						</script>	
						<?php
					}
				}
				include 'Views/header.php';
				include 'Views/login.php';
				include 'Views/footer.php';
				break;

				case '/userHome':

				if(!isset($_SESSION['user_data']) || $_SESSION['user_data']->role_id != 0){
					?>
					<script type="text/javascript">
						window.location.href = 'login';
					</script>	
					<?php	
				}
				$where = ['id' => $_SESSION['user_data']->id];
				$selectData = $this->SelectData('users', $where);


				include 'Views/header.php';
				include 'Views/userHome.php';
				include 'Views/footer.php';
				break;

				case '/adminHome':
				if(!isset($_SESSION['user_data']) || $_SESSION['user_data']->role_id != 1){
					?>
					<script type="text/javascript">
						window.location.href = 'login';
					</script>	
					<?php	
				}
				$states = [
					'gj' => 'Gujarat',
					'dl' => 'Delhi',
					'rj' => 'Rajasthan',
					'mh' => 'Maharashtra',
					'sk' => 'Sikkim',
					'pb' => 'Punjab',
				];

				$selectData = $this->SelectData('users');
				$users = $selectData['Data'];

				if(isset($_GET['user'])) {
					$where = ['id' => $_GET['user']];
					$delete_data = $this->DeleteData('users', $where);
					?>
					<script type="text/javascript">
						alert("Data deleted successfully.");
						window.location.href = 'adminHome';
					</script>	
					<?php

				}

				include 'Views/header.php';
				include 'Views/adminHome.php';
				include 'Views/footer.php';
				break;

				case '/update':

				$where = ['id' => $_GET['user']];
				$user_data = $this->SelectData('users', $where);
				$user_data = $user_data['Data'][0];
							/*echo "<pre>";
							print_r($user_data);
							exit;*/

						if(isset($_POST['update'])){

							$path = 'uploads/';
							$extention = pathinfo($_FILES['profile']['name'],PATHINFO_EXTENSION);
							$file_name = $_POST['fname'].'_'.date('YmdHis').'.'.$extention;
							$profile = (file_exists($_FILES['profile']['tmp_name'])) ? $file_name : $user_data->profile;

							$update_data = [

								'fname' => mysqli_real_escape_string($this->connection,$_POST['fname']),
								'lname' => mysqli_real_escape_string($this->connection,$_POST['lname']),
								'email' => mysqli_real_escape_string($this->connection,$_POST['email']),
								'pass' => mysqli_real_escape_string($this->connection,$_POST['password']),
								'contact' => mysqli_real_escape_string($this->connection,$_POST['mobile']),
								'gender' => mysqli_real_escape_string($this->connection,$_POST['gender']),
								'address' => mysqli_real_escape_string($this->connection,$_POST['address']),
								'state' => mysqli_real_escape_string($this->connection,$_POST['state']),
								'profile' => mysqli_real_escape_string($this->connection,$profile),
								'hobbies' => mysqli_real_escape_string($this->connection,implode(',',$_POST['hobbies']))
							];

							$upd_data = $this->UpdateData('users', $update_data, $where);
							if($upd_data){
								if(!is_null($profile)){
									move_uploaded_file($_FILES['profile']['tmp_name'], $path.$file_name);
								}
								?>
								<script type="text/javascript">
									alert("Data update successfully.");
									window.location.href = 'adminHome';
								</script>	
								<?php
							} else {
								?>
								<script type="text/javascript">
									alert("Something Went Wrong.");
									window.location.href = 'adminHome';
								</script>	
								<?php
							}
						}

							include 'Views/header.php';
							include 'Views/update.php';
							include 'Views/footer.php';

							break;
							case '/logout':
							
							unset($_SESSION['user_data']);
							session_destroy();
							?>
							<script type="text/javascript">
								alert("User logged out successfully.");
								window.location.href = 'login';
							</script>	
							<?php
							break;
							default:

							break;
						}
					}
				}
			}

			$obj = new Controller;


		?>