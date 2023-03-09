<?php
include 'config.php';
     $did = $_GET['did'];

    $sql = "DELETE FROM `donors` WHERE `did`='$did'";

     $result = mysqli_query($conn,$sql);

     if ($result == TRUE) 
     {

        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully deleted');
                 
                 </script>");
        header("Location: admin.php");
 

    }
    else
    {

        echo "Error:" . $sql . "<br>" . mysqli_connect_error();

    }

//} 

?>