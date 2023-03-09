<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blood Bank</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php 
	@$page=$_GET['page'];
	include 'header.php';
	include 'nav.php';

	 
	 	switch ($page) 
        {
          case 'home':
            include 'home.php';
            break;
          case 'alogin':
            include 'alogin.php';
            break;
            case 'admin':
            include 'admin.php';
            break;
            case 'plogin':
            include 'plogin.php';
            break;
			case 'pregister':
            include 'pregister.php';
            break;
			case 'patient':
            include 'patient.php';
            break;
			case 'donor':
            include 'donor.php';
            break;
			case 'thanks':
            include 'thanks.php';
            break;

          
          default:
          include'home.php';
          
        }
        








include 'footer.php' ?>	
</body>
</html>