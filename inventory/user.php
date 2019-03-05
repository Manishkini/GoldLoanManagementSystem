<?php

session_start();
		if (isset($_SESSION['name'])) {
			$name = $_SESSION['name'];
		}
		if (isset($_SESSION['sname'])) {
			$sname = $_SESSION['sname'];
		}
		if (isset($_SESSION['phonen'])) {
			$mno = $_SESSION['phonen'];
		}
		if (isset($_SESSION['email'])) {
			$email = $_SESSION['email'];
		}
		if (isset($_SESSION['address'])) {
			$add = $_SESSION['address'];
		}
		if (isset($_SESSION['gender'])) {
			$gender = $_SESSION['gender'];
		}

		if (isset($_SESSION['ornaments'])) {
			$ornaments = $_SESSION['ornaments'];
		}
		if(isset($_SESSION['weight'])){
			$weight = $_SESSION['weight'];
		}
		if(isset($_SESSION['purity'])){
			$purity = $_SESSION['purity'];
		}
		if(isset($_SESSION['loan'])){
			$purity = $_SESSION['loan'];
		}

		if(isset($_SESSION['interest'])){
			$purity = $_SESSION['interest'];
		}

		if(isset($_SESSION['m_int'])){
			$purity = $_SESSION['m_int'];
		}
		if (isset($_SESSION['paidloan'])) {
			$paidloan = $_SESSION['paidloan'];
		}
		if (isset($_SESSION['goldrate'])) {
			$goldrate = $_SESSION['goldrate'];
		}
		if (isset($_SESSION['remloan'])) {
			$remloan = $_SESSION['remloan'];
		}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Personal Details - Gold Loan Management System</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
		}
		.menucolor{
			background-color: #FFA500;
		}
		.menu{
			width: 75%;
			margin: 0 auto;
			font-size: 20px;
			height: 50px;
			line-height: 50px;
		}
		#leftmenu{
			float: left;
			width: 50%;
		}
		#leftmenu ul{
			list-style: none;
			text-align: left;
		}
		#leftmenu ul li{
			display:inline-block;
			position:relative;
			width: 40%;
			text-align: center;
		}
		#leftmenu ul li a{
			display: block;
			text-decoration: none;
			color: #E0FFFF;
		}
		#leftmenu ul li a:hover{
			background-color: green;
			border-radius: 7px;
		}
		#rightmenu{
			float: right;
			width: 45%;
		}
		#rightmenu ul{
			list-style: none;
			text-align: right;
		}
		#rightmenu ul li{
			display: inline-block;
			position: relative;
			text-align: center;
			color: #191970;
			width: 200px;
		}
		#rightmenu ul li:hover{
			animation: name 5s infinite;
		}
		#rightmenu ul li a{
			display: block;
			text-decoration: none;
			color: #E0FFFF;
		}
		#rightmenu ul li a:hover{
			background-color: green;
			border-radius: 7px;
		}
		.clear{
			clear: both;
		}
		.dashboard{
			width: 75%;
			margin: 0 auto;
			background-color: #F5F5F5;
			color: #606060;
			height: 700px;
		}
		#heading{
			color: #F80000;
			text-align: center;
			height: 50px;
			line-height: 50px;
		}
		#details{
			margin-left: 240px;
			font-size: 30px;
			line-height: 50px;
			text-align: left;
		}
		@keyframes name{
		0%{color: #0000FF;}
		17%{color: #00FF00;}
		34%{color: #FFFF00;}
		51%{color: #FF7F00;}
		68%{color: #FF0000;}
		85%{color: #9400D3;}
		100%{color: #4B0082;}
		}
		td{
			padding-left: 20px;
		}
		b{
			color: #DAA520;
		}
		#style{
			font-style: italic;
			font-family: Comic Sans MS;
		}
	</style>
</head>
<body>

	<div class="main menucolor">
		<div class="menu">
			<div id="leftmenu">
				<ul>
					<li><a href="user.php">Personal Information</a></li>
					<li><a href="account.php">Account Details</a></li>
				</ul>
			</div>
			<div id="rightmenu">
				<ul>
					<li>Welcome <?php echo $name; ?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clear">
			</div>
		</div>
	</div>
	<div class="main">
		<div class="dashboard color">
			<h1 style="color: #484848; font-size: 40px; margin-left: 20px; padding: 20px;"><u>Personal Details -</u></h1>
			<div id="details">
				<br>
				<table>
					<tr>
					<td><b>Name</b></td><td>:-</td><td id="style"><?php echo " ".$_SESSION['name']." ".$_SESSION['sname']."."; ?><br></td>
					</tr>
					<tr>
					<td><b>Address</b><td>:-</td></td><td id="style"><?php echo " ".$_SESSION['address']."."; ?><br></td>
					</tr>
						<tr>
					<td><b>Phone no</b><td>:-</td></td><td id="style"><?php echo " ".$_SESSION['phonen']."."; ?><br></td>
					</tr>
						<tr>
					<td><b>E-mail</b><td>:-</td></td><td id="style"><?php echo " ".$_SESSION['email']."."; ?><br></td>
					</tr>
						<tr>
					<td><b>gender</b><td>:-</td></td><td id="style"><?php echo " ".$_SESSION['gender']."."; ?><td>
					</tr>
			</table>
			</div>
		</div>
	</div>
	<?php include("../footer.php"); ?>
</body>
</html>