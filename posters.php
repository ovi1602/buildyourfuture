<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>

			<div align="center">


<table border=0>
<?php
$ses=0;
$serv='localhost';
$nume='buildyourfuture';
$pass='d1F0S3D644lgvHcy';
$con=mysql_connect($serv, $nume, $pass);
if(!$con)
{
mysql_die();
}
mysql_select_db('buildyourfuture', $con);
$s=mysql_query("SELECT * from poster WHERE ses='$ses'");
$nr=0;

while($k=mysql_fetch_array($s))
{
	if($nr%6==0)
	{
		echo '<tr>';
	}
	$nr=$nr+1;
	echo "<td align='center'><a href='img/$k[name]'><img src='img/$k[imgm]' width=100px height=100px></a><br>$k[description]<br><td>";
	
}
?>
</tr></table>



</div>


</html>