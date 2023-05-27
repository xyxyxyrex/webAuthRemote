<?php
	session_start();
	require_once 'sqlConn.php';
 
	if(isset($_POST["register"])) {
		if($_POST["firstname"] != "" && $_POST["lastname"] != "" && $_POST["username"] != "" && $_POST["password"] != "") {
			try {
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$username = $_POST["username"];
				$password = $_POST["password"];

				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql = "INSERT INTO tbl_user (first_name, last_name, user_name, password) 
					    VALUES ('$firstname', '$lastname', '$username', '$password')";

				$conn->exec($sql);
			} 
			catch(PDOException $e){
				echo $e->getMessage();
			}

			$_SESSION['message']=array("text"=>"User successfully created!", "alert"=>"");
			$conn = null;

			header('location:index.php');
		}
		else {
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registerAccount.php'</script>
			";
		}
	}
?>