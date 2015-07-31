
<html>
<meta charset="UTF-8"/> 
<head>
	<link rel="stylesheet" type="text/css" href="stil.css"/>
	<title> Build Your Future </title>
<script type="text/javascript">
function logout()
{
	document.cookie="logat=-1";
	window.top.location.href="index.php";
}
</script>

</head>

<body>
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
if($_COOKIE['logat']!=NULL && $_COOKIE['logat']!=-1)
{
$s=mysql_query("SELECT * FROM profesor WHERE account='$_COOKIE[logat]'");
$jur=0;
while($k=mysql_fetch_array($s))
{
	if($k['eval']==1)
		$jur=1;
}
}
?>
<center>
<?php if($_COOKIE['logat']!=NULL && $_COOKIE['logat']!=-1) echo '<font style="font-family:springtime; color:#000000" >Logged in as '.$_COOKIE[logat].'<br></font>'?>
	<div id="center">
		<b><nav id="aliquam">
			<ul>
				<li><a href="home.php" target="container"><img src="imagini/buton_50px.png" width="30" />Account</a>
				<ul>
				<?php
if($_COOKIE['logat']==NULL || $_COOKIE['logat']==-1)
{
				?>	
<li><a href='posters.php' target="container">Posters</a></li>
					<li><a href="login.php" target="container"> Login </a></li>
					<li><a href="register.php" target="container"> Register </a> </li>
					</ul>
				<?php
}
else if($jur==0)
{
?>
	<li><a href='posters.php' target="container">Posters</a></li>
	<li><a href='upload.php' target="container">Upload</a></li>
	<li><a href='index.php' onClick='logout()' target="container">Logout</a></li>
<?php if(strcmp($_COOKIE['logat'],"Admin1337")==0) echo "<li><a href='apanel.php' target='container'>Admin panel</a></li>" ?>
	</ul>
<?php
}
else
{
?>
<li><a href='posters.php' target="container">Posters</a></li>
<li><a href='evaluareother.php' target="container">Evaluation: Other schools</a></li>
<li><a href='evaluarearte.php' target="container">Evaluation: Profil arte</a></li>
<li><a href='index.php' onClick='logout()' target="container">Logout</a></li>
<?php if(strcmp($_COOKIE['logat'],"Admin1337")==0) echo "<li><a href='apanel.php' target='container'>Admin panel</a></li>" ?>
</ul>
<?php
}
?>



				</li>
				<li><a href="home.php" target="container"><img src="imagini/buton_50px.png" width="30" />Home</a>
				</li>
				<li><a href="about.php" target="container"><img src="imagini/buton_50px.png" width="30" />About</a>
					<ul>
						<li><a href="argument.php" target="container">Argument</a></li>
						<li><a href="summary.php" target="container">Project Summary</a></li>
						<li><a href="activities.php" target="container">Activities</a></li>
						<li><a href="rules.php"  target="container">Rules</a></li>
					</ul>
				</li>
				<li><a href="partners.php" target="container"><img src="imagini/buton_50px.png" width="30" />Partners</a>
				</li>
				<li><a href="news.php" target="container"><img src="imagini/buton_50px.png" width="30" />News</a>
				</li>
				<li><a href="learning.php" target="container"><img src="imagini/buton_50px.png" width="30" />Learning</a>
				</li>
				<li><a href="contact.php" target="container"><img src="imagini/buton_50px.png" width="30" />Communication</a>
					<ul>
						<li><a href="forum.php" target="container">Forum</a></li>
						<li><a href="contact.php" target="container">Contact</a></li>
					</ul>
				</li>
			</ul>
		</nav></b>
	</div>
</center>


	<center><div id="logo"><a href="home.php" target="container"> Build Your Future </a> </div></center>
</body>
</html>