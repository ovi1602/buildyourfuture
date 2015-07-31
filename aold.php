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
$s=mysql_query("SELECT * FROM poster");
$ses=0;
while($k=mysql_fetch_array($s))
{
	mysql_query("UPDATE poster SET ses='$ses' WHERE id='$k[id]'");
}
?>
<meta http-equiv='refresh' content='1; url=apanel.php' />