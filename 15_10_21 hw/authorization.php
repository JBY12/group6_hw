<?
$login_true="Aydar";
$password_true="4567";
function entry()
{
	if(count($_POST)>0)
	{
		$login=trim($_POST['login']);
		$password=trim($POST['password']);
		$login_true="Aydar";
		$password_true="4567";
		if($login==$login_true || $password == $password_true)
		{
			header("Location: Comment.php");
			exit();
		}
		else{
			echo "I'm lost at sea, don't bother me, I've lost my way";
		}
	}
}
entry();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<link rel="stylesheet" href="styles/style_new.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
Введите свой логин <input type="text" name="login">
Введите свой пароль <input type="password" name="password">
<input type="submit">
</body>
</html>