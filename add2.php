<?php
// phpinfo();die;
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
$kk=0;
$prof=0;
while($k=mysql_fetch_array($s))
{
	$kk=1;
}
if($kk==1)
	$prof=1;
// print_r($_FILES);
// die;
$ok=1;
if($prof==1)
{
	$nm=$_POST['nelev'];
}
else
	$nm=$_COOKIE[logat];
if($_FILES["file"]["name"]!=NULL)
{
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 9800000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  $ok=0;
    }
  else
    {
      $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
      // echo realpath("poze") .'/'. "$_COOKIE[logat].$ext";
      // die;
      // $test = is_writable(realpath("img"));
      // var_dump($test);
      // die;
 $imgmica=$nm.'_m.'.$ext;
      $result = move_uploaded_file($_FILES["file"]["tmp_name"], realpath("img") .'/'. "$nm.$ext");

      // var_dump($result);
      // die;
      }
  }
else
  {
  echo "Invalid file";
  $ok=0;
  }
$im=$nm . '.' . $ext;
$description = $_POST['description'];
}
if($prof==0)
{
$idelev=0; $idsc=0; $idloc=0; $idtara=0; $af=1;
$s=mysql_query("SELECT * FROM elev WHERE account='$_COOKIE[logat]'");
while($k=mysql_fetch_array($s))
{
  $idelev=$k['ide'];
  $idsc=$k['ids'];
}
// $s=mysql_query("SELECT * FROM Scoala where ids='$idsc'");
// while($k=mysql_fetch_array($s))
// {
//   $idloc=$k['idl'];
// }
// $s=mysql_query("SELECT * FROM Localitate WHERE idl='$idloc'");
// while($k=mysql_fetch_array($s))
// {
//   $idtara=$k['idt'];
// }
}
if($ok==1)
{
include('simple.php');
$image = new SimpleImage();
$image->load("img/$im");
$image->resizeToHeight(100);
$image->save("img/$imgmica");
if($prof==1)
{
$s=mysql_query("SELECT * FROM profesor WHERE account='$_COOKIE[logat]'");
while($k=mysql_fetch_array($s))
{
	$idprof=$k['idp'];
	$scoala=$k['school'];
	$oras=$k['city'];
	$tara=$k['country'];
}
$numel=$_POST['nelev'];

mysql_query("INSERT INTO elev(idp, last_name, school, city, country) VALUES('$idprof','$numel','$scoala','$oras','$tara')");
$s=mysql_query("SELECT * FROM elev WHERE last_name='$numel'");
while($k=mysql_fetch_array($s))
{
	$idelev=$k['ide'];
}
}
$caf=1;
mysql_query("INSERT INTO poster(ide, name, imgm, description, calificat) VALUES('$idelev', '$im', '$imgmica', '$description', '$caf')");
echo "The poster was added.";
}
echo '<meta HTTP-EQUIV="REFRESH" content="1; url=home.php">';
