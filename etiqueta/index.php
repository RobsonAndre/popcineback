<?php
	@require("../config/headers.php");
	@require("../config/define.php");
	@require("../config/connect.php");
	@require("../config/query.php");
	@require("../config/token.php");
	@require("../config/status.php"); 
	
	/**
	 *	Action
	 *	Acão a ser realisada
	 * 		1 - inserir uma etiqueta
	 *		2 - remover uma etiqueta
	 */
	/*echo '<br />'.*/$action =  $_GET['action'];
	
	
	/**
	 *	uid
	 *		uid da rede social que foi autenticado
	 */
	/*echo '<br />'.*/ $uid    = $_GET['uid'];
	
	/**
	 *	social
	 *		corresponde a rede social que o usuario usou para se autenticar
	 */
	/*echo '<br />'.*/ $social = $_GET['social'];
	
	/**
	 *	tokem
	 *		identificado enviado pelo sistema popcine para o usuário autenticado
	 */
	/*echo '<br />'.*/ $token  = $_GET['token'];

	$tk = new Token;
	
	$authentic = $tk->validaToken(KEY,$uid,$social,$token); 
	if(!$authentic){ 
		$output[] = $status[900];
	}elseif($action==1){
		@require("./inserir.php");
	}
	
	
	
	/** /
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT * FROM ".DB.".".PFIX."etiqueta WHERE indice >= 1 ";
	$r = $Qry->query($s);
	$Conn->desconnect($c);
	$l   = $Qry->rows($r);
	$out = $Qry->arr($r);
	
	/**/
	echo json_encode($output);
	/** /
	echo '<pre>';
	print_r($output);
	echo '</pre>';
	/**/
?>