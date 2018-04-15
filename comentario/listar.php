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
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '$cid' ";
	}
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[926]['total'] = $l;
	// pegando o comentario
	if($tipo==1){
		//pegar apenas p primeiro comentario
		$s = "SELECT indice, uid, social, fid, cid, comentario, spoiler, time FROM papiroweb.".PFIX."comentario WHERE uid = '$uid' AND fid='$fid' AND social = '$social' AND cid = '0' ORDER BY indice ASC LIMIT 0, 1";
	}else{
		$s = "SELECT indice, uid, social, fid, cid, comentario, spoiler, time FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '$cid' ORDER BY time $order LIMIT $ini, $qtde";
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
		$res[$i]['spoiler']    = $arr[$i]['spoiler'];
		//verificando as respostas
		$rcid = $res[$i]['id'];
		$s = "SELECT indice FROM papiroweb.".PFIX."comentario WHERE fid='$fid' AND cid = '$rcid' ";
		$r = $Qry->query($s);
		$l = $Qry->rows($r);
		$res[$i]['resposta']  = $l;
		//$res[$i]['sql']  	  = $s;
		//verificando o usuario que respondeu
		$uid = $res[$i]['uid'];
		$social = $res[$i]['social'];
		$s = "SELECT nome, imagem FROM papiroweb.".PFIX."user_log WHERE uid='$uid' AND social = '$social' ";
		$r = $Qry->query($s);
		$d = $Qry->arr($r);
		$res[$i]['unome'] 	= $d[0]['nome'];
		$res[$i]['uimagem'] = $d[0]['imagem'];
		//$res[$i]['sql']  	  = $s;
		
	}
	$msg[926]['comentarios'] = $res;
	$output = $msg[926];
?>