<?php
	//Verificando se o usuário ja comentou este filme
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	
	$ini = ($pagina*$qtde)-$qtde;
	
	$s = "SELECT uid, social, fid, cid, comentario, time FROM papiroweb.".PFIX."comentario WHERE fid='$fid' ORDER BY time $order LIMIT $ini, $qtde";
	$r = $Qry->query($s);
	$l = $Qry->rows($r);
	$msg[926]['linhas'] = $l;
	$arr = $Qry->arr($r);
	//print_r($arr);
	//die();
	/**/
	for($i=0;$i<count($arr);$i++){
		$res[$i]['fid'] 	   = $arr[$i]['fid'];
		$res[$i]['uid'] 	   = $arr[$i]['uid'];
		$res[$i]['social'] 	   = $arr[$i]['social'];
		$res[$i]['cid'] 	   = $arr[$i]['cid'];
		$res[$i]['comentario'] = $arr[$i]['comentario'];
		$res[$i]['data']       = date('d-m-Y H-i-s',$arr[$i]['time']);
	}
	/**/
	$msg[926]['comentarios'] = $res;
	$output = $msg[926];
?>