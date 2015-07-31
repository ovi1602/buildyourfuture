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
foreach($_POST['vot1'] as $vt)
{
	$nr++;
}
if($nr)
{
	$k=$nr;
	foreach($_POST['vot1'] as $vt)
	{
		$k=$k.','.$vt.'-'.'0';
	}
	mysql_query("UPDATE profesor SET vot4='$k' WHERE account='$_COOKIE[logat]'");
	echo 'Voting succeded. Acceding to the next phase';
	echo '<meta HTTP-EQUIV="REFRESH" content="1; url=evaluarearte.php">';
}
	
?>