<!DOCTYPE html>
<html>
   <head>
      <title>Profiles</title>
      <link rel="stylesheet" type="text/css" href="">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/editable.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" data-reactid="19">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
      <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
      <?php 
         include 'header.php';
          include 'connection.php';
          ?>
           <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <!-- <h1><center>List Of paid Customers</center></h1> -->
               <?php 
                  $query1="SELECT * FROM customers WHERE paid_on='paid'";
                  $query_run1=mysqli_query($db,$query1);
                  echo "<center><h1 style='color:white;margin-top:150px;'>List Of paid Customers</h1><center>";
                  //echo $_SESSION['username'];
                  if(mysqli_num_rows($query_run1)) 
                  {
                      // echo "<center><h1 style='margin-top:90px;'>List Of Unpaid Customers</h1></center>";   
                  echo "<center><table></center>";
                  echo "<tr>";
                  echo "<th><center>Name</center></th>";
                  echo "<th><center>Email</center></th>";
                  echo "<th><center>Mobile no.</center></th>";
                  echo "<th><center>Date of Joining</center></th>";
                  // echo "<th><center>Edit Customer<br>Details</center></th>";
                  echo "</tr>";
                  while($row = mysqli_fetch_assoc($query_run1))
                  {
                     echo "<tr>";   
                     echo "<td>".$row['name']."</td>";   
                     echo "<td>".$row['email']."</td>";  
                     echo "<td>".$row['mobile_no.']."</td>";   
                     echo "<td>".$row['date_of_joining']."</td>"; 
                     $id=$row['id'];
                  }
               }
               ?>
               </div>
               </div>
               </div>
            </body>
         </html>
