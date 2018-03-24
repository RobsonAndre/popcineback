<?php
	class Token{
		
		//valida token
		public function validaToken($key, $uid, $social, $token){
			$sha1 = sha1($key.".".$social.".".$uid);
			return($token===$sha1);
		}
	
		//gera token
		public function geraToken($key, $uid, $social){
			return sha1($key.$uid.$social);
		}
	}
?>