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
$s=mysql_query("SELECT * FROM profesor");
$ps=1;
while($k=mysql_fetch_array($s))
{
	mysql_query("UPDATE profesor SET votat3='$ps' WHERE idp='$k[idp]'");
	mysql_query("UPDATE profesor SET votat4='$ps' WHERE idp='$k[idp]'");
}
?>
<meta http-equiv='refresh' content='1; url=apanel.php' />