<?php
	/*=== use $_SESSION ===*/
	session_start();

	require dirname(__FILE__).'/tweet/TwistOAuth.phar'   ;
	require dirname(__FILE__).'/tweet/main/user.php'     ;
	//require dirname(__FILE__).'/tweet/main/try_catch.php';
	//require dirname(__FILE__).'/tweet/myfunc/func.php'   ;
	define("CALLBACK_URL",);

	$connection_login=new TwistOAuth($cK,$cS);

	/*=== set callback URL ===*/
	//$r_token=$connection_login->post('oauth/request_token',array('oauth_callback'=>OAUTH_CALLBACK));
	$r_token=$connection_login->post('oauth/request_token',array('oauth_callback'=>CALLBACK_URL));

	/*=== import SESSION because use 'callback.php' ===*/
	$_SESSION['oauth_token']        =$r_token['oauth_token'];
	$_SESSION['oauth_token_secret'] =$r_token['oauth_token_secret'];

	/*=== Authentication ===*/
	$usr=$connection_login->get('oauth/authorize',array('oauth_token' => $r_token['oauth_token']));

	/*=== redirect to Twitter.com ===*/
	header('location: '.$url);

?>
