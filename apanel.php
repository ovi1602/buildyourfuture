
<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>

<h1> Admin Page </h1>
<h2> Content change</h2>
<?php
$serv='localhost';
$nume='buildyourfuture';
$pass='d1F0S3D644lgvHcy';
$con=mysql_connect($serv, $nume, $pass);
if(!$con)
{
mysql_die();
}
mysql_select_db('buildyourfuture', $con);

if(strcmp($_COOKIE['logat'],"Admin1337")==0)
{
?>
<center>
<h2><a href="achange.php">Change titles</a></h2>
<h2><a href="aadd.php">Add news/tutorials</a></h2>
<h2><a href="anew.php">New contest</a></h2>
Warning! Pushing this button will start a new competition and it can't be reversed!
<h2><a href="avs.php">Start voting</a></h2>
<h2><a href="asv.php">Stop voting</a></h2>
</center>



<?php
}
?>



</html>