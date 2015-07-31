
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

if(strcmp($_COOKIE['logat'],"Admin1337")==0)
{
?>
<form action="addn.php" method="post">
News title:<input type="text" name="t_new"><br>
News content:<textarea style="width:300px; height:200px" name="news"></textarea><br>
<input type="submit" value="Add to news"><br><br><br>
</form>
<form action="addl.php" method="post">
Tutorial title:<input type="text" name="t_tut"><br>
Tutorial content:<textarea style="width:300px; height:200px" name="tut"></textarea><br>
<input type="submit" value="Add to learning">

</form>
<?php
}
?>



</html>