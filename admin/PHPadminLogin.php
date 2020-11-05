<?php 
session_start();
include '../core/initdb.php';

if (isset($_POST['usr']) && isset($_POST['pswd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$uname = validate($_POST['usr']);
	$pass = validate($_POST['pswd']);
	

	if (empty($uname)) {
		header("Location: adminLogin.php?error=Admin ID is required");
		exit();
	}else if(empty($pass)){
		header("Location: adminLogin.php?error=Password is required");
		exit();
	}else{

		$sql = "SELECT * FROM admintb WHERE AdminName='$uname' AND AdminPass='$pass'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['AdminName'] === $uname && $row['AdminPass'] === $pass) {
				$_SESSION['AdminName'] = $row['AdminName'];
				$_SESSION['AdminID'] = $row['AdminID'];
				header("Location: adminPage.php");
				echo "Nicely Done";
				exit();
			}else{
				header("Location: adminLogin.php?error=Incorrect Admin ID or Password");
				exit();
			}
		}else{
			header("Location: adminLogin.php?error=Incorrect Admin ID or Password");
			exit();
		}
	}

}else{
	header("Location: adminLogin.php");
	exit();
}


?>