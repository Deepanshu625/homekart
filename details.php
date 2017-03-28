<?php 

     // if(!isset($_SESSION['user'])){
          // header('Location: Login/login.php');
     // }
     include_once("connect.php");
    // $username= $_GET['name'];
    // $type=$_GET['type'];
     session_start();
      $username=$_SESSION['name'];
      $type=$_SESSION['type'];
      $stat="select * from request where ";
         //for task complete
      if(isset($_POST['complete'])){
         $S_No=$_GET['S_No'];
         $taskcomp="UPDATE request SET Status='complete' where S_No = '$S_No'";
          $conn->query($taskcomp);
      }
         // for taking task starts 
      if(isset($_POST['taking'])){
        $name=$_GET['name'];
        $address=$_GET['address'];
        $S_No=$_GET['S_No'];
   
        $tasksql="UPDATE request SET selected='1' where S_No = '$S_No'";
        $conn->query($tasksql);
        $get_detail="SELECT * FROM employee_detail where UserName = '$username'";
        $result1=array();
        $l1=$conn->query($get_detail);
        if ($l1->num_rows > 0) {
    
    
          $row = $l1->fetch_array();
          $result_row=array('Firstname'=>$row['Firstname'],'Email_Id'=>$row['Email_Id'],
                            'Contact'=>$row['Contact'],);
          //array_push($result1,$result_row);
          //echo json_encode($result1,JSON_PRETTY_PRINT);
          //echo $row['Firstname'];
          // echo $row['Email_Id'];
          // echo $row['Contact'];
          $fname = $row['Firstname'];
          $email = $row['Email_Id'];
          $contact = $row['Contact'];
          
          //header("Location: menupage/index.php"); /* Redirect browser */
          //exit();
  } 
  $inser = "INSERT INTO task_assigned VALUES ('','$S_No','$name','$address','$type','$fname','$contact','$email')";
          $conn->query($inser);
 
        //echo $name; 
    
        }
          // 
   // $sql = "SELECT * FROM  request where type ='$type' and Status = 'Not_complete'";
        $sql = "SELECT * FROM  request where type ='$type' and Status='Not_complete'";
    $result= array();
    $l=$conn->query($sql);
  if ($l->num_rows > 0) {
  }
  else{
   echo 'No data found' ;
   exit;

  }

?>

<html>
    <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
           .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

          
        </style>
        </head>

<body style="background:url('photo/imagess.jpg');background-repeat:none;">
    
    <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       <div style="width:200px; height: 40px;background-color:#FA8258;text-align: center;              
        position: fixed;top:20px;right:10px;">    
          <A href="#" ><font color="black">Hi <?php echo $username;?>...</font></A>
         <A href="logout.php" ><font color="black">Logout</font></A>
       <br>
<p class=" text-info"><font color="black"><?php echo date("Y-m-d h:i:sa") ;?></font></p>    <p class=" text-info">
        </div>
      </div>
    <?php foreach ($l as $array):?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Request for <?php echo $username;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td> <?php echo $array['name'];?></td>
                      </tr>
                      <tr>
                        <td>Date of Task:</td>
                        <td><?php echo $array['Date'];?></td>
                      </tr>
                      <tr>
                        <td>Time of task</td>
                        <td><?php echo $array['Time'];?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Status of Task:</td>
                        <td><?php echo $array['Status'];?></td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td><?php echo $array['Address'];?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $array['email'];?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $array['mobile'];?><br>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  <!-- <form action="taking.php" method="post"?S_No=$array['S_No']&address=$array['Address']&=$name['name']>
                    <input type="submit" name = "taking" />
                  </form> -->
                  
                  <form action="details.php?S_No=<?php echo $array['S_No'];?>&address=<?php echo $array['Address'];?>&name=<?php echo $array['name'];?>" method="post">
                 

                  <input type="submit" name="taking" href="#" class="btn btn-primary" value="Yes, I am Taking the task">
                  </form>
                   <form action="details.php?S_No=<?php echo $array['S_No'];?>" method="post">
                 

                  <input type="submit" name="complete" href="#" class="btn btn-primary" value="Task completed">  

                  </form>
                </div>
              </div>
            </div>
                <!--  <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
             -->
          </div>
        </div>
      
      <?php endforeach; ?>
      </div>
    </div>
    </body>
   <script>
       $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>
</html>