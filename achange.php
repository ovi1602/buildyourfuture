
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
$s=mysql_query("SELECT * FROM info");
while($k=mysql_fetch_array($s))
{
	$loc_awards=$k['loc_awards'];
	$loc_posters=$k['loc_posters'];
	$loc_podium=$k['loc_podium'];
	$loc_motto=$k['loc_motto'];
	$t_argument=$k['t_argument'];
	$argument=$k['argument'];
	$t_summary=$k['t_summary'];
	$summary=$k['summary'];
	$t_activities=$k['t_activities'];
	$activities=$k['activities'];
}
if(strcmp($_COOKIE['logat'],"Admin1337")==0)
{
?>
<form action="change.php" method="post">
Awards title:<input type="text" name="p1" value="<?php echo $loc_awards;?>"><br>
Posters title:<input type="text" name="p2" value="<?php echo $loc_posters;?>"><br>
Podium title:<input type="text" name="p3" value="<?php echo $loc_podium;?>"><br>
Motto:<input type="text" name="motto" value="<?php echo $loc_motto;?>"><br>
Argument title:<input type="text" name="p4" value="<?php echo $t_argument;?>"><br>
Argument:<textarea style="width:300px; height:200px" name="p5"><?php echo $argument;?></textarea><br>
Summary title:<input type="text" name="p6" value="<?php echo $t_summary;?>"><br>
Summary:<textarea style="width:300px; height:200px" name="p7"><?php echo $summary;?></textarea><br>
Activities title:<input type="text" name="p8" value="<?php echo $t_activities;?>"><br>
Activities:<textarea style="width:300px; height:200px" name="p9"><?php echo $activities;?></textarea><br>
<input type="submit" value="Change">
</form>
<?php
}
?>



</html>