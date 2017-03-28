
<?php
include_once("connect.php");

if(isset($_POST['paste'])){

$type= $_GET['id'];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$time = $_POST["time"];
$date = $_POST["date"];

	$sql = " INSERT INTO request  VALUES ('','$address' , '$date' , '$time' ,$type,'Not_Complete','$name' , '$mobile' , '$email')";
	if (mysqli_query($conn, $sql)) {
         header('Location:http://localhost/homekart/Login/menupage/index.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
	//echo "Register";
	
// }


$conn->close();
}
?>


