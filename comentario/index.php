<?php
	include("../config/headers.php");
	include("../config/defines.php");
	include("../config/connect.php");
	include("../config/query.php");
	include("../config/token.php");
	include("../config/mensagens.php");
	include("../config/vars.php");
	
	$tk = new Token;
	
	$authentic = $tk->validaToken(KEY,$uid,$social,$token); 
		
	if(!$authentic){
		$output = $msg[900];
	}elseif($action==1){
		include("./insere.php");
	}elseif($action==2){
		include("./delete.php");
	}elseif($action==3){
		include("./select.php");
	}elseif($action==4){
		include("./linhas.php");
	}elseif($action==5){
		include("./listar.php");
	}elseif($action==6){
		include("./avaliar.php");
	}elseif($action==7){
		include("./pegarAvaliacao.php");
	}else{
		$output = $msg[904];
	}
	echo json_encode($output);
?>