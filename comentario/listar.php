<?php
	//Verificando se o usuário ja comentou este filme
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	$ini = ($pagina*$qtde)-$qtde;
	
	// pegando o conteudo total - apenas numero de linhas
	if($tipo==1){
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND uid = '$uid' AND social = '$social' AND cid = '0' ";
	}else{
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '0' ";
	}
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[926]['total'] = $l;
	// pegando o conteudo solicitado
	if($tipo==1){
		$s = "SELECT indice, uid, social, fid, cid, comentario, time FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND uid = '$uid' AND social = '$social' AND cid = '0' ORDER BY time $order LIMIT $ini, $qtde";
	}else{
		$s = "SELECT indice, uid, social, fid, cid, comentario, time FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '0' ORDER BY time $order LIMIT $ini, $qtde";
	}
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[926]['linhas'] = $l;
	$arr = $Qry->arr($r);
	for($i=0;$i<count($arr);$i++){
		$res[$i]['id'] 	   	   = $arr[$i]['indice'];
		$res[$i]['fid'] 	   = $arr[$i]['fid'];
		$res[$i]['uid'] 	   = $arr[$i]['uid'];
		$res[$i]['social'] 	   = $arr[$i]['social'];
		$res[$i]['cid'] 	   = $arr[$i]['cid'];
		$res[$i]['comentario'] = utf8_encode($arr[$i]['comentario']);
		$res[$i]['data']       = date('d-m-Y H-i-s',$arr[$i]['time']);
		//verificando as respostas
		$rcid = $res[$i]['id'];
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '$rcid' ";
		$r = $Qry->query($s);
		$l = $Qry->rows($r);
		$res[$i]['resposta']  = $l;
		//$res[$i]['sql']  	  = $s;
	}
	$msg[926]['comentarios'] = $res;
	$output = $msg[926];
?>