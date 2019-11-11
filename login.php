<?php
	include('database_connection.php');
	session_start();

	if(isset($_SESSION["admin_id"]))
	{
		header('location:index.php');
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<main>
		<div class="main-content">
			<form id="admin_login_form" action="">
				<h1>Login to your account</h1>
				<p>
					<input type="email" placeholder="EMAIL ID">
				</p>
				<p>
					<input type="password" placeholder="PASSWORD">
				</p>
				<p>
					<input class="submit" type="submit" value="LOG IN">
				</p>
			</form>
		</div>
	</main>
</body>
</html>