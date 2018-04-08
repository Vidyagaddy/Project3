<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login</h1>
	<?php if($status === 'error') {?>
		<p>Incorrect details entered. Please try again.</p>
		<?php foreach($logins as $login){
            $login -> username;
		}?>
	<?php } ?>
	<form action = 'checkLogin' method="POST">
		Username: <br>
		<input type="text" name="username" placeholder="Please enter username"/> <br> </br>
		Password: <br>
		<input type="password" name="password" placeholder="Please enter password"/> <br> </br>
		<input type="submit" value="submit">
	</form>
   <br>
   
    <a href="<?=Uri::create('index.php/sc/reset'); ?>">Forget password? Recover Here!</a>
	
	
</body>
</html>
