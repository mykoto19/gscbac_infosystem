<?php 
session_start();
include 'core/initdb.php';

if (isset($_POST['usr']) && isset($_POST['pwd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$uname = validate($_POST['usr']);
	$pass = validate($_POST['pwd']);

	if (empty($uname)) {
		header("Location: department.php?error=Department name is required");
		exit();
	}else if(empty($pass)){
		header("Location: department.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM departmenttb WHERE deptName='$uname' AND deptPass='$pass'";
		$result = mysqli_query($db, $sql);
			if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['deptName'] === $uname && $row['deptPass'] === $pass) {
				$_SESSION['deptName'] = $row['deptName'];
				$_SESSION['deptID'] = $row['deptID'];
				$_SESSION['College'] = $row['College'];
				header("Location: deptPage.php");
				exit();
			}else{
				header("Location: department.php?error=Incorrect Department name or Password");
				exit();
			}
		}else{
			header("Location: department.php?error=Incorrect Department name or Password");
			exit();
		}
	}

}else{
	header("Location: department.php");
	exit();
}


?>