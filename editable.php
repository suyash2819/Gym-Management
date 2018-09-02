<?php 
// session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>editable</title>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
      <?php 
         include 'header1.php';
             include 'connection.php';
      ?>
      <br><br><br><br><br><br><br>
         <?php 
            if(isset($_POST['submit']))
            {
               $payment=$_POST['payment'];
               $id = $_POST['id'];
               if($payment=='paid')
               {
                  // echo "<script>console.log('".$id."','".$payment."')</script>";
                  $query3="UPDATE customers set paid_on='$payment' where id='$id'";
                  $query_run3=mysqli_query($db,$query3);
               }
            }
         ?>
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <!-- <h1><center>List Of Unpaid Customers</center></h1> -->
               <?php 
                  $query1="SELECT * FROM customers WHERE paid_on=''";
                  $query_run1=mysqli_query($db,$query1);
                  echo "<center><h1 style='color:white';>List Of Unpaid Customers</h1><center>";
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
                  echo "<th><center>Edit Customer<br>Details</center></th>";
                  echo "</tr>";
                  while($row = mysqli_fetch_assoc($query_run1))
                  {
                  echo "<tr>";	
                  echo "<td>".$row['name']."</td>";	
                  echo "<td>".$row['email']."</td>";	
                  echo "<td>".$row['mobile_no.']."</td>";	
                  echo "<td>".$row['date_of_joining']."</td>";	
                  $id=$row['id'];
                  // echo "<td>".$id."</td>";
                  echo  "<td>"
                  ?>
               <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?php echo $id ?>id" 
               id="<?php echo $id ?>">Edit</button></center>
               <!-- Modal -->
               <div class="modal fade" id="<?php echo $id ?>id" role="dialog">
                  <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                        					<?php 
                                          $payment="";
				                        		$query2="SELECT * FROM customers where paid_on='' and id='$id'";
				                        		$query_run2=mysqli_query($db,$query2);
				                        		if(mysqli_num_rows($query_run2))	
				                  				{
				                        			while($row=mysqli_fetch_assoc($query_run2))
				                        			{
				                        				$name=$row['name'];
				                        				$email=$row['email'];
				                        				$mobile=$row['mobile_no.'];
				                        				$joining=$row['date_of_joining'];
				                        			}
				                        			echo "<center><h2 style='color:black;'>".$name."</center></h2>";
				                        			echo "<h3>Email:&nbsp;".$email."</h3>";
				                        			echo "<h3>Contact:&nbsp".$mobile."</h3>";
				                        			echo "<h3>Joining date:&nbsp".$joining."</h3>";
                                             echo "<h3>change payment to paid:</h3>";
                                             ?>
                                             <form method="post">
                                                <input type="text" name="payment" style="color:black;">
                                                <input name='id' hidden value="<?php echo $id ?>">
                                                <center><input type="submit" name="submit" value="update details"></center>
                                             </form>
                                             <?php
				                        		}
				                        	?>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
               <?php		
                  "</td>";
                  }
                  }
                  echo "<br>";
                  ?>
               <script type="text/javascript">
               </script>
            </div>
         </div>
      </div>
   </body>
</html>