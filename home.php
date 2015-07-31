
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
$s=mysql_query("SELECT * FROM info");
while($k=mysql_fetch_array($s))
{
	$loc_awards=$k['loc_awards'];
	$loc_posters=$k['loc_posters'];
	$loc_podium=$k['loc_podium'];
	$loc_motto=$k['loc_motto'];
}
?>
<center> <h2> <?php echo $loc_motto;?> </h2> </center>
<center>
<div id="imagini_home">
	<table> 
	<tr>
		<td><a href="#"> <img src="imagini/awards.png" width="240"> </a> </td>
		<td><a href="posters.php"> <img src="imagini/posters.png" width="240"> </a> </td>
		<td><a href="#"> <img src="imagini/podium.png" width="240"> </a> </td>
	</tr>
	<tr>
		<td><center><b><h2> <a href="#"><?php echo $loc_awards;?> </a></h2></b></center> </td>
		<td><center><b><h2> <a href="#"><?php echo $loc_posters;?> </a></h2></b></center> </td>
		<td><center><b><h2> <a href="#"><?php echo $loc_podium;?> </a></h2></b></center> </td>
	</tr>
	</table>
</div>
<?php
$s=mysql_query("SELECT * FROM news ORDER BY id ASC");
while($k=mysql_fetch_array($s))
{
	$titlu=$k['t_new'];
	$anunt=$k['news'];
}
?>
<br><br><br>
<h2><?php echo $titlu;?></h2>
<div><?php echo $anunt;?></div>
</center>




</html>