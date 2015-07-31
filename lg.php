<head>
<base target="_top">
</head>
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
$nume=$_POST['name'];
$pass=$_POST['pass'];
$ok=0;
$s=mysql_query("SELECT * FROM elev WHERE account = '" . addslashes($nume) . "' AND parola = '" . addslashes($pass) . "'");
if ($k = mysql_fetch_array($s)) {
  $ok=1;
}
if (!$ok) {
  $s=mysql_query("SELECT * FROM profesor WHERE account = '" . addslashes($nume) . "' AND parola = '" . addslashes($pass) . "'");
  if ($k = mysql_fetch_array($s)) {
    $ok=1;
  }
}
// while($k=mysql_fetch_array($s))
// {
// if(strcmp(strtolower($nume), strtolower($k['account']))==0 && strcmp($pass, $k['parola'])==0)
// {
//  $ok=1;
// }
// }
// $s=mysql_query("SELECT * FROM profesor");
// $ok=0;
// while($k=mysql_fetch_array($s))
// {
// if(strcmp(strtolower($nume), strtolower($k['account']))==0 && strcmp($pass, $k['parola'])==0)
// {
//   $ok=1;
// }
// }
if(!$ok)
  echo 'Error: The account is not registered or the password is wrong';
else
{
  setcookie('logat', $nume, time()+10000);
  echo 'The login was succesful';
}
?>
<meta http-equiv='refresh' content='2; url=home.php' />
<script type="text/javascript">
window.top.location.href="index.php"
</script>
