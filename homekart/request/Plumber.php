<?php include('paste_it.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Book A Plumber</title>
 <link rel="shortcut icon" href="/HomeKart_Services/img/logo.jpg" />

 <style type="text/css">
 fieldset
 {
 	width: 550px;
 	position: relative;
 	left:400px;
 	border-radius: 5%;
 	background-color: grey;
 	opacity: 0.8;
 }
 	fieldset:hover
 	{    
 		background-color:#FF5733;
 		border-radius: 5%;
 		box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
 	}
 </style>

	<script>
function onlyAlphabets(nkey)
{
	var keyval
	if (navigator.appName == "Microsoft Internet Explorer")
	{
		keyval = window.event.keyCode;
	}
	else if (navigator.appName == 'Netscape')
	{
		nkeycode = nkey.which;
		keyval = nkeycode;
	}
	//For A-Z
	if (keyval >= 65 && keyval <= 90)
	{
		return true;
	}
	//For a-z
	else if (keyval >= 97 && keyval <= 122)
	{
		return true;
	}
	//For Backspace
	else if (keyval == 8)
	{
		return true;
	}
	//For General
	else if (keyval == 0)
	{
		return true;
	}
	//For Space
	else if (keyval == 32)
	{
		return true;
	}
	else
	{
		return false;
	}
}// End of the function
</script>
<script>
function numbersOnly(myfield, e, dec)
{
	var key;
	var keychar;
	if (window.event)
		key = window.event.keyCode;
	else if (e)
		key = e.which;
	else
		return true;
	keychar = String.fromCharCode(key);
	// control keys
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )
	return true;
	// numbers
	else if ((("0123456789").indexOf(keychar) > -1))
	return true;
	// decimal point jump
	else if (dec && (keychar == "."))
	{
		myfield.form.elements[dec].focus();
		return false;
	}
	else
		return false;
}
function validate()
{
	var data=document.getElementById("mobile").value;
	if(data.length!=10)
	{
		alert("Please enter valid Mobile No.");
		document.form1.mobileno.focus();
		return false;
	}
	if(document.form1.city.value=="-Select City-")
	{
		alert("Please select City");
		document.form1.city.focus();
		return false;
	}
	var data2=document.getElementById("pincode").value;
	if(data2.length!=6)
	{
		alert("Please enter valid Pincode");
		document.form1.pincode.focus();
		return false;
	}
}
</script>
	
	

</head>
<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	
	<link rel="stylesheet" type="text/css" href="css/my.css" />

<style>
.up{
background-image: url("img/electrician1.jpg");
background-size: 100% 700px;
background-position:top;
background-attachment: fixed;}
</style>


<body  style="background:url('home.jpg');background-repeat:none;background-size: cover;>
<div class="top"><ul>
           <!-- <li><a  href="index.html#home">Home</a></li> -->
           <!-- <li><a href="index.html#about">About Us</a></li> -->
           <!-- <li><a class="active" href="index.html#booking">Services</a></li> -->
		   <!-- <li><a href="index.html#contact">Contact Us</a></li> -->
 		   <ul style="float:right;list-style-type:none;">
   		   <!-- <li><a href="login.html">Admin Login</a></li> -->
		   <!-- <li><a href="register.html">Register as employee</a></li> -->
           </ul>  
   </ul></div>
 <div class="up" >
  
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="paste_it.php?id='Carpainter'" onsubmit="return validate()">
  	<fieldset>
  	<legend align="center"><font size="6px" color="black" ><h3>[Book A Plumber Here]</h3></font></legend>
    <center>
        <table width="500px" height="auto"  >
        <tr>
          <td  colspan="2" ><p>
              <input style="width:100%; height: 30px; " type="text" class="textbox" onkeypress="return onlyAlphabets(event);"  name="name" placeholder="Enter Your Name..." required />
          </p></td>
          </tr>
          <tr >
          <td   colspan="2"><p>
              <input style="width:100%; height: 30px;" type="text" class="textbox"  name="mobile"  size="10" maxlength="10" id="mobile" onKeyPress="return numbersOnly(this,event);" placeholder="Mobile Number..." required/>
          </p></td>
        </tr>
        <tr>
          <td colspan="2"><p>
              <input style="width:100%; height: 30px;" type="email" class="textbox"  name="email"  placeholder=" Enter Your Email..." required  />
          </p></td>
        </tr>
		<tr><td ><span  class="style113">
          <input style="width: 97%; height: 30px;" class="textbox" type="time" name="time" required> </span></td>
		  <td ><p>
              <input style="width: 98%; height: 30px;" type="date" class="textbox" id="date" name="date"  placeholder="date" required " />
          </p></td>
        </tr>
		<tr>
          <td  colspan="2"><p>
              <input style="width: 100%; height: 30px;" type="text" class="textbox"  name="address"  placeholder=" Enter Your Address..." required  />
          </p></td>
        </tr>
		
        <tr>
          <td colspan="2"><label></label>
              <div align="center">
			  <input type="submit" name="paste" class="button1" id="submit" style="height:auto; width:200px"; >
            </div></td>
        </tr>
      </table>

    </center>
    </div>
    </fieldset>

    </center>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!-- Footer start 
	<footer><div style="background-color:#333333" align="right">
    <div align="center">
      <p class="style5">&nbsp;</p>
      <p class="style5">Contact Us : </p>
      ............................................................................................................................ <p><a href="#"><img src="img/facebook.png" alt="facebook" width="60" height="60" /><img src="img/youtube.png" alt="youtube" width="60" height="60"></a> -->
        <!-- <a href="#"><img src="img/twitter.png" alt="twitter" width="60" height="60"></a> -->
        <!-- <a href="#"> <img src="img/flickr.png" alt="fliker" width="60" height="60"></a> -->
        <!-- <a href="#">  <img src="img/myspace.png" alt="myspace" width="60" height="60"></a> -->
        <!-- Contact section end ........................
      </p>
      <p  align="center" class="style9 style5">Copyright ©2017 All Right Reserved . Department Of Computer Apllication (NITD).</p>
      <p  align="center" class="style9 style5">&nbsp;</p>
    </div>
	</div>
 
</footer>

	 Footer end  -->


</body>
</html>
