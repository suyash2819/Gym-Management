<?php
// session_start();
   if(isset($_POST['register']))
   {
     // echo 'hi';
     include 'connection.php';
     // session_destroy(); 
     $date=date('Y-m-d H:i:s');
     $query1=sprintf("INSERT INTO customers values('', '%s', '%s', '%s', '%s', '%s' ,'%s' ,'')",
                                   mysqli_real_escape_string($db,$_POST['name']),
                                   mysqli_real_escape_string($db,$_POST['email']),
                                   mysqli_real_escape_string($db,$_POST['height']),
                                   mysqli_real_escape_string($db,$_POST['weight']),
                                   mysqli_real_escape_string($db,$_POST['mobile_no']),
                                    mysqli_real_escape_string($db,$date));
     if(!$query1)
     {
       die('invalid query:' .mysql_error());
     }
     $query_run1=mysqli_query($db,$query1);
     if(!$query_run1)
     {
       echo "<script type='text/javascript'>alert('successfully registered');</script>";
       header('Location:front_page.php');
     }
     mysqli_close($db);
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>front_page</title>
      <link rel="stylesheet" type="text/css" href="css/front_page.css">
      <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" data-reactid="19">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nsmS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
      <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
      <?php include 'header.php'; ?>
      <div class="bg">
         <!-- <center><p>Take care of your body,It's the only place you have to live.  -->
         <!-- </p></center> -->
         <div class="overlay" style="position: absolute;top: 0;left: 0;right: 0;bottom:0">
           
         </div>
         <h2  class="front" id="front1">Its The Right Time to</h2><br><br>
         <h1  class="front" id="front2"> Go To Gym</h1>
      </div>
      <center><h2>Train With Us</h2></center>
      <div class="container">
      <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12" >
            <img src="css/images/group.jpg" style="width: 100%;height: 100%;">
            <h4><center>Group Workouts</center></h4>
          </div>
          <div class=" col-md-3 col-sm-3 col-xs-12">
            <img src="css/images/cardio.jpg" style="width: 100%;height: 100%;">
            <h4><center>Cardio Blast</center></h4>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="css/images/freestyle.jpg" style="width: 100%;height: 100%;">
            <h4><center>Freestyle Training</center></h4>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="css/images/strength.jpg" style="width: 100%;height: 100%;">
            <h4><center>Strength Training</center></h4>
          </div>
      </div>
      </div>
      <br>
      <div class="form" >
         <form method="post" name="form">
            <center>
               <h1>Register Here:</h1>
            </center>
            <div class="form-group">
               <center> <input type="text" class="input" id="name" placeholder="Enter Your Name" name="name" required></center>
            </div>
            <div class="form-group">
               <center><input type="email" class="input" id="email" placeholder="Enter Your email" name="email" required></center>
            </div>
            <div class="form-group">
               <center><input type="tel" class="input" id="Mobile-no" placeholder="Enter Your Mobile-no." name="mobile_no" required></center>
            </div>
            <div class="form-group">
               <center><input type="number" class="input" id="Height" placeholder="Enter Your Height in cm's" name="height"></center>
            </div>
            <div class="form-group">
               <center><input type="number" class="input" id="Weight" placeholder="Enter Your Weight in kg's" name="weight"></center>
            </div>
            <center>
               <input type="submit" name="register" value="Register" class="submit"><br><br>
            </center>
         </form>
      </div>
    
        </body>
</html>