<?php
	//Verificando de a etiqueta ja nao foi adicionada
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "DELETE FROM papiroweb.".PFIX."etiqueta WHERE uid='$uid' AND social='$social' AND fid='$fid' AND etiqueta='$etiqueta'";
	$r = $Qry->query($s);
	$output = $msg[905];
?>