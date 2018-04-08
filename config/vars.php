<?php
	/**
	 *	Action
	 *	Acão a ser realisada
	 * 		1 - inserir uma etiqueta
	 *		2 - remover uma etiqueta
	 */
	/*echo '<br />'.*/$action =  $_GET['action'];
	
	
	/**
	 *	uid
	 *		uid da rede social que foi autenticado
	 */
	/*echo '<br />'.*/ $uid    = $_GET['uid'];
	
	/**
	 *	social
	 *		corresponde a rede social que o usuario usou para se autenticar
	 */
	/*echo '<br />'.*/ $social = $_GET['social'];
	
	/**
	 *	fid
	 *		uid do filme no The Movie DB
	 *	documentacao
	 *		themoviedb.org/documentation/api
	 */
	/*echo '<br />'.*/ $fid    = $_GET['fid'];
	
	/**
	 *	tokem
	 *		identificado enviado pelo sistema popcine para o usuário autenticado
	 */
	/*echo '<br />'.*/ $token  = $_GET['token'];

	/**
	 *	etiqueta
	 *		rotulo ou etiqueta que deve ser inserido no banco de dados associado ao fid
	 */
	/*echo '<br />'.*/ $etiqueta  = $_GET['etiqueta'];
	
	/**
	 *	nota
	 *		nota atribuida por um usuario
	 */
	/*echo '<br />'.*/ $nota    = $_GET['nota'];

	/**
	 *	tipo
	 *		nota atribuida por um usuario
	 */
	/*echo '<br />'.*/ $tipo    = $_GET['tipo']?$_GET['tipo']:'politica';
?>