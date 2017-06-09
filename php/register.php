<?php
	include("connection.php");
	if(isset($_POST["service_provider_submit"])){
		$name = $_POST["name_signup_email"];
		$password = $_POST["password_signup_email"];
		$address = $_POST["address_signup_email"];
		$email = $_POST["email_signup_email"];
		$phone = $_POST["phone_signup_email"];
		$service = $_POST["service_signup_email"];
		
		$qry_select_email = "select * from clinic where email='".$email."'";

		$Result = mysqli_query($connection, $qry_select_email);
		$numResult = mysqli_num_rows($Result);
		if($numResult == 0){
			mysqli_query($connection, "insert into clinic(name, password, address, email, phone, service) values ('".$name."','".$password."','".$address."','".$email."','".$phone."','".$service."')");
			$newResult = mysqli_query($connection, $qry_select_email);
			$newNumResult = mysqli_num_rows($newResult);
			if($newNumResult>=1){
				$message = "Sign Up Successful!";
				header("Location: backend_provider.php");
			}
	}
	else{
		echo "the user already exist";
	}
}
	else if(isset($_POST["patient_signup_submit"])){
		$name = $_POST["name_signup_email_patient"];
		$password = $_POST["password_signup_email_patient"];
		$email = $_POST["email_signup_email_patient"];
		
		$qry_select_email = "select * from patient where email='".$email."'";

		$Result = mysqli_query($connection, $qry_select_email);
		$numResult = mysqli_num_rows($Result);
		if($numResult == 0){
			mysqli_query($connection, "insert into patient(name, email, password) values ('".$name."','".$email."','".$password."')");
			$newResult = mysqli_query($connection, $qry_select_email);
			$newNumResult = mysqli_num_rows($newResult);
			if($newNumResult>=1){

				$message = "Sign Up Successful!";
				echo $message;
				header("Location: backend_patient.php");
			}
			else{
				echo $newNumResult;
				echo "fails";
			}
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("This email has already exist!");';
			echo '</script>';
		}
	}
?>