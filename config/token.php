<?php
	class Token{
		
		//gera token
		public function geraToken($key, $social, $uid){
			if($key && $social && $uid){
				$sha1 = sha1($key.".".$social.".".$uid);
			}else{
				$sha1 = false;
			}
			return $sha1;
		}
		
		//valida token
		public function validaToken($key, $uid, $social, $token){
			$sha1 = $this->geraToken($key,$social,$uid);
			return($token===$sha1);
		}
	}
?>