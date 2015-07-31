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
$account=$_POST['account'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$prof=$_POST['prof'];
$pass=$_POST['pass'];
$school=$_POST['school'];
$city=$_POST['city'];
$country=$_POST['country'];
$flag=$_POST['flag'];
if($flag!=0 && $flag<99999)
{
	$erro=0;
	$s=mysql_query("SELECT * FROM elev");
	while($k=mysql_fetch_array($s))
	{
		if(strcmp(strtolower($account), $k['account'])==0)
		{
			$erro=1;
		}
	}
	if(strlen($pass)<6)
	$erro=1;
	if(strpos($email, '@')==false)
	$erro=1;
	if($erro==0)
	{
		echo 'Account registered succesfully';
		mysql_query("INSERT INTO elev(idp, account, last_name, first_name, email, parola, school, city, country) VALUES('$prof', '$account', '$lname', '$fname', '$email', '$pass', '$school', '$city', '$country')");
		
	}
	if($erro==1)
	{
		echo 'The name already exists, or the password is too short, or the email is invalid';
	}
}
else if($flag<99999)
{
	$erro=0;
	$s=mysql_query("SELECT * FROM profesor");
	while($k=mysql_fetch_array($s))
	{
		if(strcmp(strtolower($account), $k['account'])==0)
		{
			$erro=1;
		}
	}
	if(strlen($pass)<6)
	$erro=1;
	if(strpos($email, '@')==false)
	$erro=1;
	if($erro==0)
	{
	$ev=0;
	echo 'Account registered succesfully';
		mysql_query("INSERT INTO profesor(account, last_name, first_name, email, parola, school, city, country, eval) VALUES('$account', '$lname', '$fname', '$email', '$pass', '$school', '$city', '$country', '$ev')");
		
	}
	if($erro==1)
	{
		echo 'The name already exists, or the password is too short, or the email is invalid';
	}
}
else
{
	$erro=0;
	$s=mysql_query("SELECT * FROM profesor");
	while($k=mysql_fetch_array($s))
	{
		if(strcmp(strtolower($account), $k['account'])==0)
		{
			$erro=1;
		}
	}
	if(strlen($pass)<6)
	$erro=1;
	if(strpos($email, '@')==false)
	$erro=1;
	if($erro==0)
	{
	$ev=1;
	echo 'Account registered succesfully';
		mysql_query("INSERT INTO profesor(account, last_name, first_name, email, parola, school, city, country, eval) VALUES('$account', '$lname', '$fname', '$email', '$pass', '$school', '$city', '$country','$ev')");
		
	}
	if($erro==1)
	{
		echo 'The name already exists, or the password is too short, or the email is invalid';
	}
}
echo '<meta HTTP-EQUIV="REFRESH" content="2; url=home.php">';
?>