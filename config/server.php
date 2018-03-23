<?php
	@require("./define.php");
	@require("./connect.php");
	@require("./query.php");
	
	$action =  $_GET['action'];
	/**
	 *	Action
	 *	Acão a ser realisada
	 * 		1 - inserir uma etiqueta
	 *		2 - remover uma etiqueta
	 */
	
	if($action==1){
		@require("./inserir_etiqueta.php");
	
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
	
	echo json_encode($out);
	/**/
?>