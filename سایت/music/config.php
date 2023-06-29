<?php
$db=mysqli_connect('localhost','root','','music');
mysqli_query($db,"SET NAMES UTF8");
if (!$db) {
	echo mysqli_connect_error();
}
ini_set('display_errors',1);
error_reporting(E_ALL);


session_start();


define('ADMINUSER', 'fateme');
define('PASSWORD', 'fateme');

?>
