<?php
	//Verificando se o filme ja nao foi adcionado como assisti por este usuário
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT nota FROM papiroweb.".PFIX."gostei WHERE uid='$uid' AND social='$social' AND fid='$fid'";
	$r = $Qry->query($s);
	$l   = $Qry->rows($r);
	if($l){
		$d = mysql_fetch_array($r);
		$msg[917]['nota'] = $d['nota'];
		$output = $msg[917];	
	}else{
		$output = $msg[918];	
	}
?>