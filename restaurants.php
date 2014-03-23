<!-- **** index.php **** -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Reservation and Ordering</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">

</head>
<body>
<?php include_once("top_temp.php"); ?>

<link rel="stylesheet" href="style/mid_style.css">
<div id="pageMiddle">
  
  
<?php

$ID = isset($_GET['id']) ? intval($_GET['id']) : null;

if (empty($ID))
{
echo("ERR");
}

// Use $ID to fetch whatever data you need
  
 

include 'php_includes/db_conf.php';
$db = new Database();
$db->getAllRestaurants();
 $restaurants = $db->getAllRestaurants($ID);
foreach ($restaurants as $rest) {
	 echo ' <div align="center" ><a href="show_restaurant.php?id='.$rest['id'].'" class="button orange" >
          ' . $rest['name'] .'  ' . $rest['adress'].'
            </a></div></br>'; 
    
}

	
	
   mysql_close($db_conx);
?>

  
  
</div>
<?php include_once("template_pageBottom.php"); ?>


</body>
</html>





<!-- **** template_pageBottom.php **** -->

<div id="pageBottom">Order LAN</div>