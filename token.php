<?php
	class Token {
		public static function generate_token($session_id){
			$_SESSION['token'] = sha1($session_id);
			
		}

		public static function check_token($token){
			if (isset($_SESSION['token']) && $token === $_SESSION['token']) {
				unset($_SESSION['token']);
				return true;
			}	
			else{
				return false;
			}
		}
	}
?>


