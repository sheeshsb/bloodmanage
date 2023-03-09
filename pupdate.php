<?php
include 'config.php';
include 'header.php';
    
if (isset($_POST['update'])) 
    {
        $pid = $_GET['pid'];
        $pname = $_POST['pname'];
        $ppassword=$_POST["ppassword"];
        $psage=$_POST["psage"];
        $pcontact = $_POST['pcontact'];
        $paddress = $_POST['paddress'];
        $pbloodgroup = $_POST['pbloodgroup'];
        $sql = "UPDATE patient SET pname='$pname',psage='$psage', ppassword='$ppassword',pcontact='$pcontact',paddress='$paddress',pbloodgroup='$pbloodgroup' WHERE pid='$pid'"; 
        $result = mysqli_query($conn,$sql);
        if ($result == true) 
        {
            echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully Updated');
                 
                 </script>");
                 header("Location: admin.php?apage=managepatients");   
        }
        else
        {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
   } 
    $pid = $_REQUEST['pid']; 
    $sql = "SELECT * FROM patient WHERE pid='$pid'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>

<head>
<title>Update</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="container">
  <h2><span>Patient Record Update</span></h2>
  <form method = "post" class="myform" autocomplete="off">
    
   <input type="text" name="pname" value="<?php  echo $row['pname'];?>">
    <input type="hidden" name="did" value="<?php $row['did']; ?>">
    <input type="text" name = "psage" placeholder="Enter Patient age" value="<?php  echo $row['psage'];?>">
    <input type="text" name = "ppassword" placeholder="Enter Patient Pass" value="<?php  echo $row['ppassword'];?>">

    
    <input type="text" name = "pcontact" placeholder="Enter Patient Contact" value="<?php  echo $row['pcontact'];?>">
    
    <input type="text" name = "paddress" placeholder="Enter Patient Address" value="<?php  echo $row['paddress'];?>">
    
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
        <input type="submit" name="update" value="click to update">
    <br>

    
  </form>

 

</div>
<?php include 'footer.php'; ?>