<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="hello2.php" method="post">
<p>Name : <input type="text" name="name"></p>
<p>password : <input type="password" name="password"></p>
<input type="submit" name="submit" value="submit">
</form>
<?php

if($_POST['name'] == 'abdelaziz'){
header('Location: hello.php');
}
?>

</body>
</html>