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
	 *	email
	 *		endereco de correio eletronico
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$email = $_GET['email']?$_GET['email']:false;
		
	/**
	 *	nome
	 *		nome completo
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$nome= $_GET['nome']?$_GET['nome']:false;
		
	/**
	 *	imagem
	 *		url da imagem
	 *	tipo: string
	 *  
	 */
	/*echo '<br />'.*/$imagem= $_GET['imagem']?$_GET['imagem']:false;
		
	/**
	 *	sexo
	 *		sexo 
	 *	tipo: string
	 *  predefinido: male|female
	 */
	/*echo '<br />'.*/$sexo= $_GET['sexo']?$_GET['sexo']:false;
	
	/**
	 *	cover
	 *		imagem de fundo do facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$cover= $_GET['cover']?$_GET['cover']:false;
		
	/**
	 *	pnome
	 *		primeiro nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$pnome= $_GET['pnome']?$_GET['pnome']:false;
		
	/**
	 *	snome
	 *		sobre nome 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$snome= $_GET['snome']?$_GET['snome']:false;
		
	/**
	 *	fidade
	 *		faixa de idade, range_age no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$fidade = $_GET['fidade']?$_GET['fidade']:false;
	
	/**
	 *	link
	 *		link no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$link = $_GET['link']?$_GET['link']:false;
	
	/**
	 *	localidade
	 *		locale no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$localidade = $_GET['localidade']?$_GET['localidade']:false;
	
	/**
	 *	timezone
	 *		time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$timezone = $_GET['timezone']?$_GET['timezone']:false;
	
	/**
	 *	atualizado
	 *		updated_time no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$atualizado = $_GET['atualizado']?$_GET['atualizado']:false;
	
	/**
	 *	verificado
	 *		verified no facebook 
	 *	tipo: string
	 */
	/*echo '<br />'.*/$verificado = $_GET['verificado']?$_GET['verificado']:false;
	
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
	 * 	definido: 5
	 */
	/*echo '<br />'.*/ $nota = $_GET['nota']?$nota = $_GET['nota']:5;

	/**
	 *	tipo
	 *		define o tipo de cada acao:
	 * 			para acao termo duas opcoes: 
	 *				termo ou politica
	 *			para acao 
	 * 	tipo: string
	 * 	
	 */
	/*echo '<br />'.*/ $tipo = $_GET['tipo'] ? $_GET['tipo'] : 'politica';
	
	/**
	 *	comentario
	 *		comentario do usuário ao filme ou à etiqueta, a qual deve ser inserido no banco de dados associado ao fid
	 *	tipo: string
	 *	tamanho: 256 caracteres
	 */
	/*echo '<br />'.*/ $comentario = addslashes(trim($_GET['comentario']));

	/**
	 *	cid
	 *		id comentarioprimary key do comanteario que esta sendo respondido ou citado pelo usuário que esta comentando
	 *	tipo: integer
	 *	tamanho: 11 Bytes 
	 */
	/*echo '<br />'.*/ $cid = $_GET['cid']?$_GET['cid']:0;

	/**
	 *	spoiler
	 *		indica se o comentario tem ou não spolier
	 *	tipo: integer
	 *	tamanho: 1 Bytes
	 *	predefinida: 0 (false-nao)|1 (verdade-sim) 
	 */
	/*echo '<br />'.*/ $spoiler = $_GET['spoiler'] ? $_GET['spoiler'] : 0;
	
?>