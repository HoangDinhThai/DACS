<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=PT+Sans:ital,wght@1,400;1,700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
	<form action="login.php" method="post">
		<div class="container">
			<h2>LOGIN PAGE</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label>Username</label>
			<input type="text" name="uname" placeholder="Enter Username"><br>

			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password"><br>

			<button type="submit">Login</button>
		</div>

		<div class="container_foot">
			<span class="psw">Forgot password ?</span>
		</div>
	</form>
</body>
</html>