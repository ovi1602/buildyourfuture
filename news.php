
<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>
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
$s=mysql_query("SELECT * FROM news");
while($k=mysql_fetch_array($s))
{
	$t_new=$k['t_new'];
	$news=$k['news'];
?>
<h1> <?php echo $t_new;?></h1>

<div> <?php echo $new; ?>

</div>
<h6> Posted by Admin</h6> 
<br><br>
<?php
}
?>



</html>