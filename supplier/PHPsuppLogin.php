<?php 
session_start();
include '../core/initdb.php';

if (isset($_POST['email']) && isset($_POST['pswd'])){

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$email = validate($_POST['email']);
	$pass = validate($_POST['pswd']);

	if (empty($email)) {
		header("Location: suppLogin.php?error=Email is required");
		exit();
	}else if(empty($pass)){
		header("Location: suppLogin.php?error=Password is required");
		exit();
	}else{

        // HASHING OF PASSWORD
        $pass = md5($pass);

		$sql = "SELECT * FROM suppliertb WHERE Email='$email' AND supPass='$pass'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['Email'] === $email && $row['supPass'] === $pass) {
                $_SESSION['supplierID'] = $row['supplierID'];
				$_SESSION['companyName'] = $row['companyName'];
                
				header("Location: supplierPage.php");
				exit();
			}else{
				header("Location: suppLogin.php?error=Incorrect Email or Password");
				exit();
			}
		}else{
			header("Location: suppLogin.php?error=Incorrect Email or Passwordsdjfjhf");
			exit();
		}
	}

}else{
	header("Location: suppLogin.php");
	exit();
}


?>