<?php 
     session_start();
     // if(!isset($_SESSION['user'])){
          // header('Location: Login/login.php');
     // }
     include_once("connect.php");
     if(isset($_POST['name_value'])){
     $username=$_POST['name'];
     $_SESSION['javastop']='stop';

     }
     else
     {
        //header("Location: ../Login/menupage/index.php"); 
     }

     // $username= $_GET['name'];
     // $type=$_GET['type'];
     // $username=$_SESSION['name'];
     // $type=$_SESSION['type'];
   $sql = "SELECT * FROM  task_assigned where Name_user ='$username'";
    $result= array();
    $l=$conn->query($sql);
  if ($l->num_rows > 0) {
  }
  else{
   // echo 'No data found' ;
    if(isset($_POST['name_value'])){
   header("Location: ../Login/menupage/index.php");
     }

   //exit;

  }


?>

<html>
    <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="main.js"></script>

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

<body>


  <?php if(!isset($_SESSION['javastop'])):?>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> Track your Mechanic
    <div id="lorem">
     <label>Please Enter the Name On which the task is assigned:</label>
     <form action="electician.php" method="post">
        <input type="text" id="name"  name="name"  placeholder="" required  style="width:400px;" /> 
         </div>
          <div id="popupfoot">
          <input type="submit" name="name_value" />
           </div>
        </div>
     </form>
      
      
     
   
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<?php else: ?>
  <?php endif; ?>

    <div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Context here</p>
      </div>
    </div>
  </div>
</div>

    <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           

        
       <br>
<p class=" text-info"><?php echo date("Y-m-d h:i:sa") ;?></p>
      </div>
    <?php foreach ($l as $array):?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Details of requested <?php echo $array['Type'];?></h3>
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
                        <td>Name of Employee:</td>
                        <td> <?php echo $array['Emp_name'];?></td>
                      </tr>
                      <tr>
                        <td>Mobile number:</td>
                        <td><?php echo $array['Emp_Phone'];?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $array['Emp_email'];?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Type of task:</td>
                        <td><?php echo $array['Type'];?></td>
                      </tr>
                        <tr>
                       
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">OK</a>
                  <a href="#" class="btn btn-primary">Cancel</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
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
       function myFunction() {
    
    var nameValue = document.getElementById("name").value
   
    

}
       
</script>
</html>