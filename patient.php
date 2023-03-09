<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Patient Panel</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php
	include 'header.php'; 
	include 'psidebar.php';
	@$ppage=$_GET['ppage'];



	switch ($ppage) 
        {
          case 'viewdonors':
            include 'viewdonors.php';
            break;

			case 'filteraddress':
            include 'filteraddress.php';
            break;
			case 'filterbloodgroup':
            include 'filterbloodgroup.php';
            break;



          

          
          default:
          include'viewdonors.php';
          
        }






 include 'footer.php'; ?>
	

</body>
</html>