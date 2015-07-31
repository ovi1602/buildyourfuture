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
$s=mysql_query("SELECT * FROM profesor WHERE account='$_COOKIE[logat]'");
while($k=mysql_fetch_array($s))
{
	$votcod=$k['vot4'];
}
$nr=NULL;
$lim=strlen($votcod);
for($i=0; $i<$lim; $i++)
{
	if($votcod[$i]==',')
		break;
	$nr=$nr.$votcod[$i];
}
$codnou=$nr.',';
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
		$codnou=$codnou.$idact.'-'.$_POST[$idact].',';
	}
}
$sal=1;
mysql_query("UPDATE profesor SET vot4='$codnou' WHERE account='$_COOKIE[logat]'");
mysql_query("UPDATE profesor SET votat4='$sal' WHERE account='$_COOKIE[logat]'");
echo 'Voting succeded.';
echo '<meta HTTP-EQUIV="REFRESH" content="1; url=evaluarearte.php">';
?>
