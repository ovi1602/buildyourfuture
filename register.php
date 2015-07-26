
<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>

<center><h1> Register </h1></center>

<center>
<div>

<form action="reg.php" method="post">
Account name: <input type="text" name="account" style="height:25px;width:300px;color:black;"><br /> <br />
First name: <input type="text" name="fname" style="height:25px;width:300px; color:black;"><br /> <br />
Last name: <input type="text" name="lname" style="height:25px;width:300px;color:black;"><br /> <br />
E-mail: <input type="text" name="email" style="height:25px;width:300px;color:black;"><br /> <br />
Password: <input type="text" name="pass" style="height:25px;width:300px;color:black;"><br /> <br />
Professor: <select name="prof" style="height:25px;width:300px;color:black;">
<option value="0">I'm a professor.</option>
<option value="9999999">I apply as an evaluator</option>

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
while($k=mysql_fetch_array($s))
{
	echo "<option value='$k[idp]'>$k[first_name] $k[last_name]</option>";
}
?>
</select>
<br>
Note: You can register as an professor or apply as an evaluator.
<br /> <br />
School: <input type="text" name="school" style="height:25px;width:300px;color:black;"><br /> <br />
City: <input type="text" name="city" style="height:25px;width:300px;color:black;"><br /> <br />
Country: <input type="text" name="country" style="height:25px;width:300px;color:black;"><br /> <br />

<input type="submit" value="Register">
<br /> 
</form>

</div>
</center>




</html>