<?php
	
	class Token{
		
		//valida token
		public function validaToken( $key, $uid, $social, $token){
			
			$sha1 = sha1($key.$uid.$social);
			$ret  = ($token) ? 1 : 0;
			return $ret;
		
		}
	
		//gera token
		public function geraToken($key, $uid, $social){
			
			return sha1($key.$uid.$social);
		}
		
	}
		
?>