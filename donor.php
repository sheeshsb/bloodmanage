<?php
require 'config.php';

if(isset($_POST["submit"])){
  $dname = $_POST["dname"];
  $dage = $_POST["dage"];
  $dcontact = $_POST["dcontact"];
  $daddress = $_POST["daddress"];
  $dbloodgroup = $_POST["dbloodgroup"];




 

      $query = "INSERT INTO donors(dname,dage,dcontact,daddress,dbloodgroup) VALUES ('$dname','$dage','$dcontact','$daddress','$dbloodgroup')";
      $res= mysqli_query($conn, $query);
      if(!$res){
        echo "data cant be added".mysqli_error($conn);
      }
      echo
      "<script> alert('Reg succesful')</script>";
      
      header("Location: index.php?page=thanks");
    }



?>



<div class="container">
  <h2><p>Donor Registration</p></h2>
  <form method = "post" class="myform" autocomplete="off">
    
   
    
    <input type="text" name = "dname" placeholder="Enter Donor Name">
    <input type="text" name = "dage" placeholder="Enter Donor Age">
    
    <input type="text" name = "dcontact" placeholder="Enter Donor Contact">
  
    <input type="text" name = "daddress" placeholder="Enter Donor Address">
    <br>

    
  Select Blood Group  
  <select name="dbloodgroup">
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

