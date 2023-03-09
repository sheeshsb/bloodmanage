<?php
require 'config.php';

if(isset($_POST["submit"])){
  $pname = $_POST["pname"];
  $ppassword = $_POST["ppassword"];
  $result = mysqli_query($conn, "SELECT * FROM patient WHERE pname = '$pname' ");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($ppassword == $row['ppassword']){
      $_SESSION["pid"] = $row["pid"];
      header("Location: patient.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Input Correct Patient Credentials'); </script>";
  }
}
?>




<div class="container">
	<h2><span>Patient Login</span></h2>
	<form method = "post" class="myform " autocomplete="off">
		
		<input type="text" name = "pname" placeholder="Enter Patient">
		<br>
		<input type="password" name = "ppassword" placeholder="Enter Patient Password">
		<br>
		<input type="submit" name="submit" value = "Login">
    <br><br>
  <a href="index.php?page=pregister">Register As A Patient</a>
		
	</form>



</div>