<?php
include 'config.php';
include 'header.php';
    
if (isset($_POST['update'])) 
    {
        $did = $_GET['did'];
        $dname = $_POST['dname'];
        $dcontact = $_POST['dcontact'];
        $daddress = $_POST['daddress'];
        $dbloodgroup = $_POST['dbloodgroup'];
        $dage=$_POST['dage'];

        $sql = "UPDATE donors SET dname='$dname',dage='$dage', dcontact='$dcontact',daddress='$daddress',dbloodgroup='$dbloodgroup' WHERE did='$did'"; 
        $result = mysqli_query($conn,$sql);
        if ($result == true) 
        {
            echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully Updated');
                 
                 </script>");
                 header("Location: admin.php");   
        }
        else
        {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
   } 
    $did = $_REQUEST['did']; 
    $sql = "SELECT * FROM donors WHERE did='$did'";
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
    
   <input type="text" name="dname" value="<?php  echo $row['dname'];?>">
    <input type="hidden" name="did" value="<?php $row['did']; ?>">
   <input type="text" name="dage" value="<?php  echo $row['dage'];?>"> 
 
    
    <input type="text" name = "dcontact" placeholder="Enter Patient Contact" value="<?php  echo $row['dcontact'];?>">
    
    <input type="text" name = "daddress" placeholder="Enter Patient Address" value="<?php  echo $row['daddress'];?>">
    
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
        <input type="submit" name="update" value="click to update">
    <br>

    
  </form>

 

</div>
<?php include 'footer.php'; ?>