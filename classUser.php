<?php
class classUser {
	
	/**
	 * loing function
	 * 
	 * @param string $username        	
	 * @param string $password        	
	 * @return boolean 0 1
	 */
	function login($username, $password) {
		$file = file ( "files/user_password" );
		foreach ( $file as $user ) {
			$up = explode ( "|", $user );
			if ($up [0] == $username && trim ( $up [1] ) == $password) {
				return 1;
			}
		}
		return 0;
	}
	
	/**
	 * exists function
	 * 
	 * @param string $username        	
	 * @param string $password        	
	 * @return boolean 0 1
	 */
	function exists($username) {
		$file = file ( "files/user_password" );
		foreach ( $file as $user ) {
			$up = explode ( "|", $user );
			if ($up [0] == $username) {
				return 1;
			}
		}
		return 0;
	}
	
	/**
	 * register function
	 * 
	 * @param string $username        	
	 * @param string $password        	
	 * @return number -1:register false 1:register success
	 */
	function register($username, $password) {
		if ($this->exists ( $username )) {
			return -1;
		} else {
			$data = "\n" . $username . "|" . $password;
			file_put_contents ( "files/user_password", $data, FILE_APPEND );
			return 1;
		}
	}
}

?>