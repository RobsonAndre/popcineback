<?php
	include("../config/headers.php");
	include("../config/defines.php");
	include("../config/connect.php");
	include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	$tk = new Token;
	
	$token = $tk->geraToken(KEY,$social,$uid); 
	if($token){
		$time = time();
		$Conn = new Conn;
		$Qry  = new Qry; 
		$c = $Conn->connect(HOST,USER,PASS,DB);
		/**/
		
		$s = "INSERT 
				INTO papiroweb.".PFIX."user_log 
				( uid,social,email,nome,imagem,sexo,cover,pnome,snome,fidade,link,localidade,timezone,atualizado,verificado,time)
				
				VALUES 
				
				('$uid','$social','$email','$nome','$imagem','$sexo','$cover','$pnome','$snome','$fidade','$link','$localidade','$timezone','$atualizado','$verificado','$time')";
		
		$r = $Qry->query($s);
		
		/**/	
		$output = array('status_code'=>800,'status_message'=>'Sucesso: token gerado.','success'=>true,'token'=>$token);
	}else{
		$output = array('status_code'=>801,'status_message'=>'Erro: impossivel gerar o token.','success'=>false,'token'=>'');
	}
	echo json_encode($output);
?>