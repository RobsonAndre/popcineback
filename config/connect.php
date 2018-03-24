<?php
	class Conn {
		
		//conexao com o banco de dados
		public function connect($host,$user,$pass,$db){
			$conn = mysql_connect($host, $user, $pass) or die(mysql_error());
			$this->selectBase($db);
			return($conn);
		}
		
		//seleciona a tabela na base de dados
		private function selectBase($db){
			return mysql_select_db($db);
		}
		
		//desconecta o banco de dados
		public function desconnect($conn){
			return mysql_close($conn);
		}
	}
?>