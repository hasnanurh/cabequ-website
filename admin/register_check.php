<?php 
session_start(); 
include "../koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['fullname']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$fullname = validate($_POST['fullname']);

	$user_data = 'username='. $username. '&fullname='. $fullname;


	if (empty($username)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($fullname)){
        header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM user WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(username, password, fullname) VALUES('$username', '$password', '$fullname')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}