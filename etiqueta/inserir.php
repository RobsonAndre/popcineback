<?php
	// Inserir etiqueta
	/**
	 *	token
	 *		String
	 *	Descr		
	 *		identificado do usuario no sistema 
	 * 		
	 */
	$token  =  $_GET['token'];
	
	/**
	 *	uid
	 *		Interger
	 *	Descricao		
	 *		identificado do usuario logado atraves das redes sociais
	 * 		
	 */
	$uid =  $_GET['uid'];
	
	/**
	 *	social
	 *		String
	 *	Descr
	 *		tipo de rede social a qual o usuario usou para login		
	 *	Opcao
	 *		facebook
	 *	
	 */
	
	$social  =  $_GET['social']?$_GET['social']:'null';
	
	/**
	 *	fid
	 *		integer
	 *	Descricao
	 *		identificador do filme no themoviedb.org
	 * 	Documentacao 
	 *		themoviedb.org/documentation/api
	 *
	 */
	$fid  =  $_GET['fid'];
	
	/**
	 *	Etiqueta
	 *		string
	 *	Descricao
	 *		tag a ser adicinada para o filme na base de dados
	 *
	 */
	$etiqueta =  $_GET['etiqueta'];
	
	
	//Verificando de a etiqueta ja nao foi adicionada
	$time = time();
	$Conn = new Conn;
	$Qry  = new Qry; 
	$c = $Conn->connect(HOST,USER,PASS,DB);
	$s = "SELECT indice FROM papiroweb.popcine_etiqueta WHERE uid='$uid' AND social='$social' AND fid='$fid' AND etiqueta='$etiqueta'";
	$r = $Qry->query($s);
	$l   = $Qry->rows($r);
	if($l){
		$output = $status[901];	
	}else{
		$s = "INSERT INTO papiroweb.popcine_etiqueta ( uid, social, fid, etiqueta, time ) VALUES ( '$uid', '$social', '$fid', '$etiqueta', '$time' )";
		if($r = $Qry->query($s)){
			//$output = $status[902];
			$output = "{'success': true}"; 
		}else{
			$output = $status[903];
		}
	}
	$Conn->desconnect($c);
	
	/** /
	$output = array(
			 		"token"		=> $token,
					"uid"		=> $uid,
					"social"	=> $social,
					"fid"		=> $fid,
					"etiqueta"	=> $etiqueta
				);
	/**/
?>