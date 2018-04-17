<?php
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	//Verificando se o usuário ja avaliou o comentario
	$s = "SELECT nota FROM papiroweb.".PFIX."comentario_avaliacao WHERE uid='$uid' AND social='$social' AND fid='$fid' AND cid='$cid' ";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	if($l){
		$d = mysql_fetch_array($r);
		$msg[931]['nota'] = $d['nota'];
		$output = $msg[931];	
	}else{
		$output = $msg[932];	
	}
	
?>