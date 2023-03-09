<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php
	include 'header.php'; 
  include 'dsidebar.php';
	@$apage=$_GET['apage'];



	switch ($apage) 
        {
          case 'managedonors':
            include 'managedonors.php';
            break;
          case 'managepatients':
            include 'managepatients.php';
            break;
          

          
          default:
          include'managedonors.php';
          
        }






 include 'footer.php'; ?>
	

</body>
</html>