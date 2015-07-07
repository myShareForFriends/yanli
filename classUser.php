<?php
class classUser {
	//loing function
	function login($username,$password){
		
		$usertables = array(array("liuyanli","123456"),array("wzp","123456"),array("lyq","qqq"),array("zz","zz"));
		foreach ($usertables as $user ){
			if($user[0] == $username && $user[1]== $password){
				return 1;
			}
		}
		return 0;
	}
	
	//register function
	function register($username,$password){
		$usertables = array(array("liuyanli","123456"),array("wzp","123456"),array("lyq","qqq"),array("zz","zz"));
		foreach ($usertables as $user){
			if ($user[0] == $username){
				return "用户已存在";			
			}
		}
		return "注册成功";
	}
}

?>