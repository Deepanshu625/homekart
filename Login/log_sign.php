<?php include('login.php');
?>
<?php include('register.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>HomeKart</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body >
<div class="pen-title">
  <h1>Login / Sign UP</h1>
</div>
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Sign Up</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="log_sign.php" method="post">
      <input type="text" placeholder="UserName" name="UserName" />
      <input type="password" placeholder="Password" name="Password"/>
      <div left="10px;" >
      <table style="width: 100%;height: 100px;">
      <tr>
        <td style="width: 50%;position: relative;left:0px;"><font color="white">User</font></td>
        <td style="width: 50%; position: relative;top:19px;"><input type="radio" name="work" value="user" checked></td>
      </tr>
      <tr>
        <td style="width: 50%;"><font color="white">Employee</td>
        <td style="width: 50%; position: relative;top:19px;"> <input type="radio" name="work" value="employee"> </td>
      </tr>
      </table>
      </div>
      <?php if(isset($_POST['login'])):?>
      <label><?php echo $error?></label>

    <?php endif;?>
      <input type="submit" name="login">
    </form>
  </div>
  <div class="form">
    <h2>Create Your Account</h2>
    <form action="log_sign.php" method="post">
      <input type="text" placeholder="FirstName" name="FirstName" />
      <input type="text" placeholder="LastName" name="LastName" />
      <input type="email" placeholder="email_id" name="email_id" />
      <input type="tel" placeholder="Mobile_contact" name="mobile_contact" />
      <input type="text" placeholder="Occupation" name="occupation" />
      <input type="text" placeholder="Address" name="address" />
      <input type="text" placeholder="City" name="city" />
      <input type="text" placeholder="Pincode" name="pincode" />
      <input type="text" placeholder="State" name="state" />
      <input type="text" placeholder="Username" name="UserName" />
      <input type="password" placeholder="Password" name="Password" />
     
      <input type="submit" name="register">
    </form>
  </div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
