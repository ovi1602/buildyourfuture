<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>
			<div align="center">
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
if($_COOKIE['logat']!=NULL && $_COOKIE['logat']!=-1 && $jur==1)
{
$s=mysql_query("SELECT * FROM profesor WHERE account='$_COOKIE[logat]'");
while($k=mysql_fetch_array($s))
{
	$votcod=$k['vot3'];
	$votdone=$k['votat3'];
}
if($votcod==NULL && !$votdone)
{
	?>
<h2><a href="#">Phase 1 of voting</a></h2>
<form action="votprocess.php" method="post">
<table>
<?php
	$pa=0;
	$cal=1;
 	$s=mysql_query("SELECT * FROM poster WHERE art='$pa' AND calificat='$cal' AND ses='$ses'");
	while($k=mysql_fetch_array($s))
	{
	?>
	<tr>
	<td><a href="img/<?php echo $k['name'];?>"><img src="img/<?php echo $k['imgm'];?>" style="width:150px;height:150px;"></a></td>
	<td><b><div style="width:325px"><div align="center"><?php echo $k['description'];?></b></div></div><br>
	Choose poster: <input type="checkbox" name="vot1[]" value="<?php echo $k['id'];?>"></td>
	<?php
	}
?>
<tr> <td colspan=2>
<center><input type="submit" value="Done voting"></td></tr></center>
</form>
<?php
}
else
{
$lim=strlen($votcod);
$nr=NULL;
for($i=0; $i<$lim; $i++)
{
	if($votcod[$i]==',')
		break;
	$nr=$nr.$votcod[$i];
}
$pa=0;
$cal=1;
if($nr>=10 && !$votdone)
{
?>

<h2><a href="#">Phase 1 of voting</a></h2>
<form action="votprocess.php" method="post">
<table>
<?php
for(;$i<$lim; $i++)
{
	if(is_numeric($votcod[$i]) && $votcod[$i-1]!='-')
	{
		$idact=NULL;
		while(is_numeric($votcod[$i]))
		{
			$idact=$idact.$votcod[$i];
			$i++;
		}
	
$s=mysql_query("SELECT * FROM poster WHERE art='$pa' AND calificat='$cal' AND ses='$ses'");
while($k=mysql_fetch_array($s))
{
if($k['id']==$idact)
{
?>
	<tr>
	<td><a href="img/<?php echo $k['name'];?>"><img src="img/<?php echo $k['imgm'];?>" style="width:150px;height:150px;"></a></td>
	<td><b><div style="width:325px"><div align="center"><?php echo $k['description'];?></b></div></div><br>
	Choose poster: <input type="checkbox" name="vot1[]" value="<?php echo $k['id'];?>"></td>
	</tr>
<?php
}
}
}
}
?>
<input type="submit" value="Done voting">
</form>
<?php
}
else if($nr<10 && !$votdone)
{
?>
<form action="voting2.php" method="post">
<h2><a href="#">Phase 2 of voting</a></h2>
<table>
<?php
for(;$i<$lim; $i++)
{
	if(is_numeric($votcod[$i]) && $votcod[$i-1]!='-')
	{
		$idact=NULL;
		while(is_numeric($votcod[$i]))
		{
			$idact=$idact.$votcod[$i];
			$i++;
		}
	
$s=mysql_query("SELECT * FROM poster WHERE ses='$ses'");
while($k=mysql_fetch_array($s))
{
if($k['id']==$idact)
{
?>
	<tr>
	<td><a href="img/<?php echo $k['name'];?>"><img src="img/<?php echo $k['imgm'];?>" style="width:150px;height:150px;"></a></td>
	<td><b><div style="width:325px"><div align="center"><?php echo $k['description'];?></b></div></div><br>
	Mark given(1-9): <input type="text" name="<?php echo $k['id'];?>"></td>
	</tr>

<?php
}
}
}
}


}
}
}
?>
<tr> <td colspan=2>
<center><input type="submit" value="Done voting"></td></tr></center>
   </table>











</div>
</div>
</html>