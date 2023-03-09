<?php
include 'config.php';

     $pid = $_GET['pid'];

    $sql = "DELETE FROM `patient` WHERE `pid`='$pid'";

     $result = mysqli_query($conn,$sql);

     if ($result == TRUE) 
     {

        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully deleted');
                 
                 </script>");
        header("Location: admin.php?apage=managepatients");
       
    }
    else
    {

        echo "Error:" . $sql . "<br>" . mysqli_connect_error();

    }

//} 

?>