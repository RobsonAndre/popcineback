<?php
	//header
	header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
	
	
	//Diretivas
	/** /
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	/**/
	
	//Var
	/**
	 *	conn
	 *		connect result
	 *	Descr		
	 *		status da conexão com a base de dados 
	 */
	$conn;
	/**
	 *	output
	 *		array
	 *	Descr		
	 *		saida do resultado 
	 */
	$output = array();
	/**
	 *	idApp
	 *		string
	 *	Descr		
	 *		identificado do app 
	 */
	$idApp  =  $_GET['id'];
	/**
	 *	idUsr
	 *		Interger
	 *	Descr		
	 *		identificado do usuario logado atraves das redes sociais
	 * 		documentacao themoviedb.org/documentation/api
	 */
	$idUsr  =  $_GET['token'];
	/**
	 *	tSocial
	 *		Interger
	 *	Descr		
	 *		1 - FaceBook
	 */
	$tSocial  =  $_GET['tsoc'];
	/**
	 *	idFlm
	 *	identificador do filme no themoviedb.org
	 * 	documentacao themoviedb.org/documentation/api
	 * 		1 - insert
	 *		2 - delete
	 */
	$idFlm  =  $_GET['flm'];
	/**
	 *	Action
	 *	Acão a ser adotada
	 * 		1 - insert
	 *		2 - delete
	 */
	$action =  $_GET['act'];
	/**
	 *	Action
	 *	Acão a ser adotada
	 * 		1 - insert
	 *		2 - delete
	 */
	$etiqueta =  $_GET['etq'];
	/**
	 *	conn
	 *	identificador link da conexao com o bando de dados
	 */
	$conn =  false;
	
	//validar o idApp
	function validaAPP($idApp){
		return true;
	}
	//validar o idUser
	function validaUSER($id, $rede){
		return $rede==1 && $id;
	}
	//conexao com o banco de dados
	function conBD(){
		$host = "mysql50.bs2.com.br";
		$user = "papiroweb";
		$pass = "Yae2Eep5";
		$db   = "papiroweb";
		//conectar ao banco
		$conn = mysql_connect($host, $user, $pass) or die("Erro, Servidor:" . mysql_error() );
		if($conn){
			mysql_select_db($db) or die("Erro, Data Base!");
		}
	}
	
	//desconecta o banco de dados
	function desconBD(){
		if($conn){
			mysql_close($conn);
		}
	}
	//grava etiqueta
	function gravaEtiqueta($idApp, $idUsr, $tSocial, $idFlm, $etiqueta){
		if(validaAPP($idApp) && validaUSER($idUsr, $tSocial)){
			$rede_social = $tSocial == 1 ?'facebook':'';
			$time = time();
			conBD();
			//verificando se esta etiqueta ja nao foi colocada neste filme
			$s = "SELECT indice FROM papiroweb.popcine_etiqueta WHERE user_id='$idUsr' AND rede_social='$rede_social' AND filme_id='$idFlm' AND etiqueta='$etiqueta'";
			$r = mysql_query($s) or die(mysql_error());
			$l = mysql_num_rows($r);
			if($l){
				$array = array( "status_code"=>5,
								 "status_message"=>"Etiqueta ja existe",
								 "success"=>false
							    );
				return $array;
				//return '["status_code":5,"status_message":"Etiqueta ja existe","success":false}';
			}else{
				$s = "INSERT INTO papiroweb.popcine_etiqueta ( user_id, rede_social, filme_id, etiqueta, time ) VALUES ( '$idUsr', '$rede_social', '$idFlm', '$etiqueta', '$time' )";
				$r = mysql_query($s) or die(mysql_error());
			}
			desconBD();
			$array = array( "status_code"=>1,
							 "status_message"=>"Etiqueta inserida com sucesso",
							 "success"=>true
						    );
			return $array;
			
			//return '{"status_code":1,"status_message":"Etiqueta inserida com sucesso","success":true}';
		}else{
			$array = array( "status_code"=>2,
							 "status_message"=>"Erro ao tentar inserir a etiqueta",
							 "success"=>false
						    );
			return $array;
			//return '{"status_code":2,"status_message":"Erro ao tentar inserir a etiqueta","success":false}';
		}
	}
	if($action==1){
		$output = gravaEtiqueta($idApp, $idUsr, $tSocial, $idFlm, $etiqueta);
	}elseif($action==2){
		$output = array( "status_code"=>3,
						 "status_message"=>"Erro acão em desenvolvimento",
						 "success"=>false
				    );
		//echo '{"status_code":3,"status_message":"Acão em desenvolvimento","success":false}';
	}else{
		$output = array( "status_code"=>3,
					  "status_message"=>"Erro acão não reconhecida",
					  "success"=>false
		     	    );
		//echo '{"status_code":4,"status_message":"Acão não reconhecida","success":false}';
	}
	echo json_encode($output);
?>