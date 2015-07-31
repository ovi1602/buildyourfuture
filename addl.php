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
$t_tut=$_POST['t_new'];
$tut=$_POST['news'];

mysql_query("INSERT INTO learning(t_new, news) VALUES('$t_new', '$news')");
?>
<meta http-equiv='refresh' content='1; url=aadd.php' />