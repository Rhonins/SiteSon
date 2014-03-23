<!-- **** index.php **** -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Reservation and Ordering</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/mid_style.css">

</head>
<body>

<?php $ID = isset($_GET['id']) ? intval($_GET['id']) : null;

if (empty($ID))
{
echo("ERR");
}
?>


<?php include_once("rest_top.php"); ?>


<div id="pageMiddle">
  
  
<?php


echo $ID;
?>

  TABLE SELECTION 
  
</div>
<?php include_once("template_pageBottom.php"); ?>


</body>
</html>





<!-- **** template_pageBottom.php **** -->

<div id="pageBottom">Order LAN</div>