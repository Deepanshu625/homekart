
<?php
include_once("connect.php");

if(isset($_POST['register'])){


$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$email_id = $_POST["email_id"];
$mobile_contact = $_POST["mobile_contact"];
$occupation = $_POST["occupation"];
$address = $_POST["address"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];
$state = $_POST["state"];
$UserName = $_POST["UserName"];
$Password = $_POST["Password"];

$sql1 = "Select * FROM User_detail where UserName='$UserName'";
$l1=$conn->query($sql1);
if ($l1->num_rows > 0)
{
	echo "User already exist"; 
}
else
{
	$sql = " INSERT INTO User_detail VALUES ('$FirstName' , '$LastName' , '$email_id' , '$mobile_contact' , '$occupation' , '$address' , '$city' , '$pincode' , '$state', '$UserName', '$Password' )";
	$l=$conn->query($sql);
	//echo "Register";
	header("Location: menupage/index.php");
}


$conn->close();
}
?>


