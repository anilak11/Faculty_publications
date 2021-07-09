<?php  
	//include("connection.php");
	session_start();
	error_reporting(0);
?>
<html>
<head>
	<style>
		*
		{
			padding:0px;
			margin:0px;
			font-family:times;
		}
		body
		{
			background-color:lightseagreen;
		}
		.outer
		{
			width:95%;
			height:100%;
		}
		.header
		{
			margin:0px;
			padding:0px;
			width:100%;
			height:120px;
			color:orange;
		}
		.header ul
		{
			list-style:none;
			padding:0px;
		}
		.header ul li
		{
			width:150px;
			height:50px;
			position:relative;
			text-align:center;
			top:50px;
			font-size:20px;
			float:left;
		}
		.header a:link
		{
			text-decoration: none;
			color:white;
		}
		.header a:hover
		{
			color:orange;
		}		
		.leftside
		{
			height:83.5%;
			width:300px;
			padding:0px;
			margin:0px;
			background:teal;
		}
		.leftside ul
		{
			list-style:none;
			padding:0px;
		}
		.leftside ul li
		{
			width:300px;
			height:75px;
			text-align:center;
			position:relative;
			top:40px;
		}
		.leftside a:link
		{
			text-decoration:none;
			color:white;
		}
		.leftside a:hover
		{
			text-decoration:none;
			color:orange;
		}
		.mydiv
		{
			height:83.5%;
			width:84.5%;
			transform:translateY(-100%);
			margin-left:300px;
			background-color:white;
			background-image: url('images/backy4.jpg');
		}
		.mydiv button
		{
			width:200px;
			height:75px;
			border-radius:8px;
			margin-left:250px;
			margin-right:100px;
			margin-top:150px;
			font-size:20px;
		}
	</style>
</head>
<body>
	<div class="outer">
		<div class="header">
			<ul>
				<li><a href="www.google.com">	 Picture</a> </li>
				<li><a href="www.google.com">	 Hello!<?php echo $_SESSION['adid']; ?></a> </li>
				<li style="margin-left:50px;width:50%; font-size:50px;">ONLINE PROCTORING SYSTEM</li>
				<li style="float:right; color:white;"><a href="pro5.php">Logout</a></li>
			</ul>
		</div>
		<div class="leftside">
			<ul>
				<li style="font-size:30px;"><a href="login.php"><p id="anil">creating new accounts</p></a></li>
				<li style="font-size:30px;"><a href="admin11.php">creating new admins</a></li>
				<li style="font-size:30px;"><a href="adminpinchange.php">Password Change</a></li>
				<li style="font-size:30px;"><a href="admingetthing.php">Get Thing</a></li>
				<li style="font-size:30px;"><a href="#" name="profile5" id="profile5" onclick="hello()">fun5</a></li>
				<li style="font-size:30px;"><a href="#" name="profile6" id="profile6" onclick="hello()">fun6</a></li>
				<li style="font-size:30px;"><a href="#" name="profile7" id="profile7" onclick="hello()">fun7</a></li>
			</ul>
		</div>
		<div class="mydiv">	
			<button onclick="window.location.href='admin3.php';">Principal</button>
			<button onclick="window.location.href='admin3.php';">HOD</button><br>
			<button onclick="window.location.href='admin3.php';">Facualty</button>
			<button onclick="window.location.href='admin2.php';">Student</button>
		</div>
	</div>
</body>
</html>