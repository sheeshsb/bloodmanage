
<?php
require 'config.php';

if(isset($_POST["submit"])){
  $auname = $_POST["auname"];
  $apassword = $_POST["apassword"];
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE auname = '$auname' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($apassword == $row['apassword']){

      $_SESSION["aid"] = $row["aid"];
      header("Location: admin.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Input Correct Admin Credentials'); </script>";
  }
}
?>




<div class="container">
  <h2><span>Admin Login</span></h2>
  <form method = "post" class="myform " autocomplete="off">
    
    <input type="text" name = "auname" placeholder="Enter Admin Username">
    <br>
    <input type="password" name = "apassword" placeholder="Enter Admin Password">
    <br>
    <input type="submit" name="submit" value = "Login">
  
  
  </form>



</div>