<?php
	//Verificando se o usuário ja comentou este filme
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid'";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[925]['linhas'] = $l;
	$output = $msg[925];
?>