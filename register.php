
<html>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="stil2.css"/>
<script type="text/javascript">
function check()
{
if(document.getElementById("elev").checked==true)
document.getElementById("sp").style.visibility="visible";
else
document.getElementById("sp").style.visibility="hidden";
if(document.getElementById("elev").checked==true)
{
document.getElementById("sp2").style.visibility="hidden";
document.getElementById("sp4").style.visibility="hidden";
document.getElementById("sp5").style.visibility="hidden";
}
else
{
document.getElementById("sp2").style.visibility="visible";
document.getElementById("sp4").style.visibility="visible";
document.getElementById("sp5").style.visibility="visible";
}

if(document.getElementById("eval").checked==true)
	document.getElementById("sp3").innerHTML="Workplace:";
else if(document.getElementById("prof").checked==true)
	document.getElementById("sp3").innerHTML="School:";

}
</script>

<center><h1> Register </h1></center>

<center>
<div>

<form action="reg.php" method="post">
<table border=0>
<tr>
<td width=140>Account name:</td><td> <input type="text" name="account" style="height:25px;width:300px;color:black;"></td>
</tr>
<tr>
<td width=140>First name:</td><td> <input type="text" name="fname" style="height:25px;width:300px; color:black;"></td>
</tr>
<tr>
<td width=140>Last name:</td><td> <input type="text" name="lname" style="height:25px;width:300px;color:black;">
</td></tr>
<tr>
<td width=140>E-mail:</td><td> <input type="text" name="email" style="height:25px;width:300px;color:black;">
</td></tr>
<tr>
<td width=140>Password:</td><td> <input type="text" name="pass" style="height:25px;width:300px;color:black;">
</td>
</tr>
<tr><td colspan=2>
<div align="center">
<input type="radio" value="0" name="flag" onchange="check();" id="prof">Profesor</input>
<input type="radio" name="flag" value="9999999" onchange="check();" id="eval">Evaluator</input>
<input type="radio" name="flag" id="elev" value="16" onchange="check();">Elev</input>

</div>
</td>
</tr>

<tr id="sp" style="visibility:hidden">
<td width=100>
Professor:</td><td> <select name="prof" style="height:25px;width:300px;color:black;">

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
If your professor is not on the list, please announce him or her to register first.
</div>
</td></tr>

<tr id="sp2" style="visibility:hidden;"><td>
<span id="sp3">School:</span></td><td> <input type="text" name="school" style="height:25px;width:300px;color:black;"></td>
</tr>
<tr id="sp4" style="visibility:hidden;"><td>City:</td><td> <input type="text" name="city" style="height:25px;width:300px;color:black;"></td></tr>
<tr id="sp5" style="visibility:hidden;"><td>Country:</td><td> <input type="text" name="country" style="height:25px;width:300px;color:black;"></td></tr>
</div>
<tr><td colspan=2><div align="center">
<input type="submit" value="Register">
</div>
</td>
</tr>
</table> 
</form>

</div>
</center>




</html>