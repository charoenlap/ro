<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	
	$base = str_replace('required', '', __DIR__);
	
	// define('MURL','https://www.fsoftpro.com/dohung/');

	// devolop
	// define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/gamemarket/');
	// var_dump($_SERVER);exit();
	$add_path = '';
	if($_SERVER['HTTP_HOST']=="local" OR $_SERVER['HTTP_HOST']=="localhost"){
		$add_path = "gamemarket";
	}
	define('MURL','http://localhost/code/');
	// production
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/'.$add_path.'/');

	// define('AURL',MURL.'admin/');
	define('DEFAULT_PAGE','home');
	define('WEB_NAME','Dohung');
	define('IMAGE_PHOTO',MURL.'uploads/photo/');
	define('NO_PHOTO',MURL.'uploads/no_photo.jpg');
	define('DB','mysqli');
	
	// Config DB localhost
	define('PREFIX', 'oil_');
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','root');
	define('DB_DB','kkgame');

	// Production
	// define('PREFIX', 'dh_');
	// define('DB_HOST','localhost');
	// define('DB_USER','fsoftpro_dhpro');
	// define('DB_PASS','29bGG94RSg');
	// define('DB_DB','fsoftpro_dhpro');

	//facebook
	define('app_id','2806340296358703');
	define('app_secret','e423552c12f34e434aad827438c9301e');
	define('default_graph_version','v2.4');
	define('redirect_url','https://www.ro.fsoftpro.com/fbCallback');

	// System config 
	define('DEFAULT_LANGUAGE','2');
	define('DEFAULT_LIMIT_PAGE','30');


	// define('email_username','support@fsoftpro.com');
	// define('email_password','fiverama2');
	// define('email_host','smtp.gmail.com');
	// define('email_port','465');
	// define('email_send','support@fsoftpro.com');
	// define('email_stmpsecure','ssl');

	// define('email_username','info@miss-bangkok.com');
	// define('email_password','bangkok1000');
	// define('email_host','sv5263.xserver.jp');
	// define('email_port','25');
	// define('email_send','info@miss-bangkok.com');
	// define('email_stmpsecure','TLS');

	// var_dump($_SERVER);

	// use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\Exception;

	// require DOCUMENT_ROOT.'/system/lib/PHPMailer-master-7/src/Exception.php';
	// require DOCUMENT_ROOT.'/system/lib/PHPMailer-master-7/src/PHPMailer.php';
	// require DOCUMENT_ROOT.'/system/lib/PHPMailer-master-7/src/SMTP.php';
	// global	$mail ;
	// $mail = new PHPMailer(true); //New instance, with exceptions enabled

	
?>