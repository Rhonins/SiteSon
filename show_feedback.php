<!-- **** index.php **** -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Reservation and Ordering</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">

<link rel="stylesheet" href="style/mid_style.css">
<link rel="stylesheet" href="style/table.css">

</head>
<body>
<?php 
$ID = isset($_GET['id']) ? intval($_GET['id']) : null;

if (empty($ID))
{
echo("ERR");
}

include_once("rest_top.php"); ?>

<div id="pageMiddle">

</br></br>
<div class="maintable" >
                <table >
                    <tr>
                        <td>
                            User Name
                        </td>
                        <td >
                            Date
                        </td>
                        <td>
                            Comments
                        </td>
                        <td>
                            Points
                        </td>
                    </tr>
                   
               <?php    
			   include 'php_includes/db_conf.php';

                   $db = new Database();
					$db->getAllComments();
 $comments = $db->getAllComments($ID);
foreach ($comments as $comm) {
	 echo ' <tr>';
	
	 echo '<td>';
	 
	echo $comm['user_name'];
	 
	 echo '</td>';
	 
	 echo '<td>';
	 
	 echo $comm['date'];
	 
	 echo '</td>';
	 
	 echo '<td>';
	 
	 echo $comm['comments'];
	 
	 echo '</td>';
	 
	 echo '<td>';
	 
	 echo $comm['point'];
	 
	 echo '</td>';
     echo ' </tr>';
}
mysql_close($db_conx);
	?>
	
   
                   
                   
                   
                </table>
            </div>
            
  
  
</div>
<?php include_once("template_pageBottom.php"); ?>


</body>
</html>





<!-- **** template_pageBottom.php **** -->

<div id="pageBottom">Order LAN</div>