<?php

include_once("connect.php");
global $error;
$error = "";
if(isset($_POST['login'])){

$UserName = $_POST["UserName"];
$Password = $_POST["Password"];
$Work = $_POST["work"];


// echo "connected";

	if($Work=="user")
	{
		$sql = "SELECT * FROM user_detail where UserName ='$UserName' and Password = '$Password'";
		$result=array();
	$l=$conn->query($sql);
	if ($l->num_rows > 0) {
		
		echo "Login Successful";
		$row = $l->fetch_assoc();
		$result_row=array('Firstname'=>$row['Firstname'],'Lastname'=>$row['Lastname'],'Email_Id'=>$row['Email_Id'],
				'Contact'=>$row['Contact'],
				'Work'=>$row['Work'],'Address'=>$row['Address'],'City'=>$row['City'],'PinCode'=>$row['PinCode'],
				'State'=>$row['State'],'UserName'=>$row['UserName'],'Password'=>$row['Password'],);
				array_push($result,$result_row);
				#echo json_encode($result,JSON_PRETTY_PRINT);
				header("Location: menupage/index.php"); /* Redirect browser */
				exit();
	}
	else
	 {
	 	//echo "<script>alert ('Wrong id or password')</script>";
		$error ="Wrong id or password";

		//header("Location: http://192.168.0.102/Login/index.html");



}
		//echo user_detail;
	}
	else
	{
		$sql = "SELECT * FROM employee_detail where UserName ='$UserName' and Password = '$Password'";
		$result= array();
		$l=$conn->query($sql);
	if ($l->num_rows > 0) {
		session_start();
		echo "Login Successful";
		$row = $l->fetch_assoc();
		 $name=$row['UserName'];
		 $type=$row['type'];
		 $_SESSION['name']=$row['UserName'];
		 $_SESSION['type']=$row['type'];
				#echo json_encode($result,JSON_PRETTY_PRINT);
				header("Location: ../details.php?name=$name&type=$type"); /* Redirect browser */
				exit();
	}
	else
	 {
	 	//echo "<script>alert ('Wrong id or password')</script>";
		$error ="Wrong id or password";


		//header("Location: http://192.168.0.102/Login/index.html");



}

		//echo employee;
	}

	
	

$conn->close();

#echo json_encode($result);
//echo "Adfaf";
}
?>
