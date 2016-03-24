<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<a href="./tweet/">twmain</a>
	<?php
		session_start();

		require dirname(__FILE__).'/tweet/TwistOAuth.phar'   ;
		require dirname(__FILE__).'/tweet/main/user.php'     ;

		$aT_user=$_SESSION['access_token'];

		$connection_user=new TwistOAuth($cK,$cS,$aT_user['oauth_token'],$aT_user['oauth_token_secret']);

		$user_info=$connection_user->get('account/verify_credentials');

		echo $user_info->name;

	?>
</body>
</html>
