<?php
	include("../config/headers.php");
	include("../config/defines.php");
	//include("../config/connect.php");
	//include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	$tk = new Token;
	
	$token = $tk->geraToken(KEY,$social,$uid); 
	if($token){
		$output = array('status_code'=>800,'status_message'=>'Sucesso: token gerado.','success'=>true,'token'=>$token);
	}else{
		$output = array('status_code'=>801,'status_message'=>'Erro: impossivel gerar o token.','success'=>false,'token'=>'');
	}
		
	echo json_encode($output);
?>