<?php
require_once 'classUser.php';
$user = new classUser();
if($_GET["type"] == "login"){
	$username = $_GET["un"];
	$password = $_GET["pw"];
	$result = $user->login($username,$password);
	echo $result;
}elseif($_GET["type"] == "register"){
	$username = $_GET["un"];
	$password = $_GET["pw"];
	$result = $user->register($username,$password);
	echo $result; 
}
else{
	echo "拒绝访问";
}

