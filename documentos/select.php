<?php
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	if($tipo == 't'){
		$s = "SELECT * FROM papiroweb.".PFIX."termo ORDER BY time DESC";
	}else{
		$s = "SELECT * FROM papiroweb.".PFIX."politica ORDER BY time DESC";
	}
	$r = $Qry->query($s);
	$d = $Qry->arr($r);
	
	/** /
	echo $d[0]['texto'];
	//print_r($d);
	die();
	/**/
	
	//$msg[921]['texto'] = $d[0]['texto'];
	//$msg[921]['texto'] = "Teste teste.";
	/**/
	
	//array_push($msg[921],$d[0]['texto']);
	$versao = $d[0]['versao'];
	$tipo   = $tipo;
	$data   = date('d-m-Y H-i-s',$d[0]['time']);
	$texto  = nl2br(utf8_encode($d[0]['texto']));
	$msg[921] = array('status_code'=>921,'status_message'=>'Sucesso: documento.','success'=>true,'texto'=>$versao,'tipo'=>$tipo,'data'=>$data,'texto'=>$texto,'versao'=>$versao);
	$output = $msg[921];
	//print_r($output);
?>