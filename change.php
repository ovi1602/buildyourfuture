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
$loc_awards=$_POST['p1'];
$loc_posters=$_POST['p2'];
$loc_podium=$_POST['p3'];
$loc_motto=$_POST['motto'];
$t_argument=$_POST['p4'];
$argument=$_POST['p5'];
$t_summary=$_POST['p6'];
$summary=$_POST['p7'];
$t_activities=$_POST['p8'];
$activities=$_POST['p9'];
$p=1;
mysql_query("UPDATE info SET loc_awards='$loc_awards' WHERE info='$p'");
mysql_query("UPDATE info SET loc_posters='$loc_posters' WHERE info='$p'");
mysql_query("UPDATE info SET loc_podium='$loc_podium' WHERE info='$p'");
mysql_query("UPDATE info SET loc_motto='$loc_motto' WHERE info='$p'");
mysql_query("UPDATE info SET t_argument='$t_argument' WHERE info='$p'");
mysql_query("UPDATE info SET argument='$argument' WHERE info='$p'");
mysql_query("UPDATE info SET t_summary='$t_summary' WHERE info='$p'");
mysql_query("UPDATE info SET summary='$summary' WHERE info='$p'");
mysql_query("UPDATE info SET t_activities='$t_activities' WHERE info='$p'");
mysql_query("UPDATE info SET activities='$activities' WHERE info='$p'");
?>
<meta http-equiv='refresh' content='1; url=achange.php' />