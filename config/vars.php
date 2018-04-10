<?php
	/**
	 *	Action
	 *	Acão a ser realisada, item pode ser comentario, etiqueta e outros
	 * 		1 - inserir uma item
	 *		2 - remover uma item
	 *		3 - seleciona uma item
	 *		4 - contar as linhas de registro
	 *		5 - Selecionar todos os registros
	 */
	/*echo '<br />'.*/$action = $_GET['action'];
	
	/**
	 *	Pagina
	 *		Define qual pagina deve ser listada em uma selecao do bd
	 *	tipo: interger
	 */
	/*echo '<br />'.*/$pagina = $_GET['pagina'] ? $_GET['pagina'] : 1;
		
	/**
	 *	quantidade
	 *		Define a quantidade de item (linha) mostrada por pagina
	 *	tipo: interger
	 *  predefinida: 20 linhas
	 */
	/*echo '<br />'.*/$qtde = 10;
		
	/**
	 *	order
	 *		define a ordem de apresentacao
	 *	tipo: string
	 *  predefinida: ASC | DESC
	 */
	/*echo '<br />'.*/$order = $_GET['order']? $_GET['order'] :'DESC';
		
	/**
	 *	uid
	 *		uid da rede social que foi autenticado
	 */
	/*echo '<br />'.*/ $uid = $_GET['uid'];
	
	/**
	 *	social
	 *		corresponde a rede social que o usuario usou para se autenticar
	 * 	tipo: string
	 *	tamanho: 32 caracteres
	 */
	/*echo '<br />'.*/ $social = $_GET['social'];
	
	/**
	 *	fid
	 *		uid do filme no The Movie DB
	 *	documentacao: themoviedb.org/documentation/api
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
	 *	tipo: string
	 *	tamanho: 16 caracteres
	 */
	/*echo '<br />'.*/ $etiqueta  = addslashes($_GET['etiqueta']);
	
	/**
	 *	nota
	 *		nota atribuida por um usuario
	 * 	tipo: integer
	 * 	tamanho: 2 Bytes
	 *	min: 1
	 *	max: 5
	 */
	/*echo '<br />'.*/ $nota = $_GET['nota'];

	/**
	 *	tipo
	 *		nota atribuida por um usuario
	 * 	tipo: string
	 */
	/*echo '<br />'.*/ $tipo = $_GET['tipo'] ? $_GET['tipo'] : 'politica';
	
	/**
	 *	comentario
	 *		comentario do usuário ao filme ou à etiqueta, a qual deve ser inserido no banco de dados associado ao fid
	 *	tipo: string
	 *	tamanho: 256 caracteres
	 */
	/*echo '<br />'.*/ $comentario = addslashes($_GET['comentario']);

	/**
	 *	cid
	 *		id comentarioprimary key do comanteario que esta sendo respondido ou citado pelo usuário que esta comentando
	 *	tipo: integer
	 *	tamanho: 11 Bytes 
	 */
	/*echo '<br />'.*/ $cid = $_GET['cid'];
	
?>