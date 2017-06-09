<?php
	include("connection.php");
	SESSION_start();
	if(isset($_POST["email_login"])){
		$name = $_POST["username_login"];
		$password = $_POST["password_login"];

		$qry = "select * from clinic, patient where clinic.name = '".$name."' or patient.name ='".$name."'";
		$result = mysqli_query($connection, $qry);
		$numResult = mysqli_num_rows($result);
		echo $numResult;
		if($numResult>=1){
			while($row = mysqli_fetch_row($result))
			{
				$_SESSION["username"] = $row[1];
			}
		}
	}
?>