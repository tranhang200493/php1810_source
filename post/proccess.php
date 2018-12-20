<?php 
session_start();
		//Taoh 1 CSDL giả lập chứa các tK người dùng
	$account  = array(
		'admin' =>  '123456',
		'manager' => '123',
		'member' => 'abc123' );
	if (isset($_POST['btnLogin'])) {
		//Tiến hành lấy dữ liệu trên FORM và xử lý đăng nhập
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		//echo $user.$pass;exit();
		$status =0;
		foreach ($account as $key => $value) {
			if ($user == $key && $pass == $value) {
				$status=1; break;
			}else
			{
				$status=0;
			}
		}
			if ($status==1) {
				//Cấp phiên làm việc cho user 
				$_SESSION['login'] = $user;
				$_SESSION['loggedin'] = true;
				// điều hướng về index
				header("location:index.php");
			}else
				header("location:login.php");
	}else{
		header("location:login.php");
	}
 ?>