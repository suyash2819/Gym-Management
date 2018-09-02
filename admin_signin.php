<?php 
if(isset($_POST['signin']))
{
   include 'connection.php';
   $pwd=md5($_POST['password']);
   $username=$_POST['name'];
   $query1="SELECT * FROM admin WHERE username='$username' and password='$pwd'"; 
                               
    if(!$query1)
     {
       die('invalid query:' .mysql_error());
     }
     $query_run1=mysqli_query($db,$query1);
     if(mysqli_num_rows($query_run1)>0)
     {
      while($row = mysqli_fetch_assoc($query_run3))
      {
                  $_SESSION['username']=$row['username'];
      }
       header('Location:editable.php');
       echo "<script type='text/javascript'>alert('successfully registered');</script>";
     }
     else
     {
               echo "<script type='text/javascript'>alert('check your username and password');</script>";

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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <?php include 'header.php'; ?>
      <div class="bg">
         <!-- <center><p>Take care of your body,It's the only place you have to live.  -->
         <!-- </p></center> -->
         <div class="overlay" style="position: absolute;top: 0;left: 0;right: 0;bottom:0">
           
         </div>
      </div>
      <div class="form" >
         <form method="post">
            <center>
               <h1>Admin Sign In Here:</h1><br>
            </center>
            <div class="form-group">
               <center> <input type="text" class="" id="name" placeholder="Enter Your UserName" name="name" required></center>
            </div>
            <div class="form-group">
               <center><input type="password" class="" id="pwd" placeholder="Enter Your password" name="password" required></center>
            </div>
                     <center>
               <input type="submit" name="signin" value="Sign in" class="submit"><br><br>   
            </center>
         </form>
      </div>
   </body>
</html>