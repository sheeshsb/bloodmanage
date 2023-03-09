<?php
require 'config.php';

if(isset($_POST["submit"])){
  $pname = $_POST["pname"];
  $ppassword=$_POST["ppassword"];
  $pcontact = $_POST["pcontact"];
  $paddress = $_POST["paddress"];
  $pbloodgroup = $_POST["pbloodgroup"];
  $psage=$_POST["psage"];




 

      $query = "INSERT INTO patient(pname,ppassword,psage,pcontact,paddress,pbloodgroup) VALUES ('$pname','$ppassword','$psage','$pcontact','$paddress','$pbloodgroup')";
      $res= mysqli_query($conn, $query);
      if(!$res){
        echo "data cant be added".mysqli_error($conn);
      }
      echo
      "<script> alert('Reg succesful')</script>";
      
      header("Location: index.php?page=plogin");
    }



?>



<div class="container">
  <h2><span>Patient Registration</p></h2>
  <form method = "post" class="myform" autocomplete="off">
    
    <input type="text" name = "pname" placeholder="Enter Patient Name">
    <input type="Password" name = "ppassword" placeholder="Enter Patient Password">
   
    <input type="text" name = "psage" placeholder="Enter Patient Age">
  
    <input type="text" name = "pcontact" placeholder="Enter Patient Contact">
 
    <input type="text" name = "paddress" placeholder="Enter Patient Address">
    <br>

    
  Select Blood Group  
  <select name="pbloodgroup">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>

    <br>
    <input type="submit" name="submit" value = "register">
    <br>
 
    
  </form>

 

</div>

