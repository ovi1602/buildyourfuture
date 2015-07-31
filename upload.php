<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>

<div align="center">
			<div><form action="add2.php" method="post" enctype="multipart/form-data">
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
$nume=strtolower($_COOKIE[logat]);
$s=mysql_query("SELECT * FROM profesor WHERE account='$nume'");
$ok=0;
while($k=mysql_fetch_array($s))
{
	$ok=1;
}
if($ok==1)
{
?>
Student name:<br>
<input type="text" name="nelev" style="width:300px;"><br>
<?php
}
?>

Choose a file. (Max. 5 MB) <br>
<input type="file" name="file" id="file"><br><br>
Description:<br>
<textarea name="description" id="description"></textarea><br>
<input type="submit" value="Submit">
</form>
									</div>
		</div></section>
		</div>
		
</html>