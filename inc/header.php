<?php 
/**
	FRAMEWORK ROMA DEVELOPER 1.0.0
	Framework para desenvolvimento de sites simples em .php que não precisem de tanta complexibilidade
*/?>
<?php 
define("BASEPATH", "http://localhost/framework/"); //DEFINE A URL, OU CAMINHO BASE DO SITE
define("CLIENT", "NOME DO CLIENTE DO PROJETO"); //DEFINE O NOME DO CLIENTE, O NOME PRINCIPAL DO SITE A SER EXIBIDO NA TAG <title></title> 
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<!-- Codificado por Roma Developer / http://www.andreromario.com.br/ -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <meta name="description" content="<?php echo $description; ?>" />
		<title><?php echo $title; ?> | <?php echo CLIENT; ?></title>
		<link rel="stylesheet" href="<?php echo BASEPATH; ?>css/all.min.css" />
		<!-- HTML5 shim e Respond.js para suporte dos elementos do HTML5 e media queries no IE8 -->
	    <!-- WARNING: Respond.js não funcionará se você visualizar a página via file:// -->
	    <!--[if lt IE 9]>
	    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<a href="#" class="view-mirror"></a><!-- LINK DO ESPELHO, UTILIZANDO ESSA FERRAMENTA É POSSÍVEL COMPARAR O RESULTADO DO HTML COM UM .jpg OU .png DA TELA DO PROJETO  -->
		<div class="mirror"><img src="<?php echo BASEPATH; ?>img/mirrors/home.png" alt=""></div><!-- CHAMADA .jpg OU .png DA TELA DO PROJETO  -->

		<header>
			
		</header>
		
		<main>