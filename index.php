<?php
session_start(); 
include("config/baseDados.class.php");
//include("config/utilizadores.class.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/layout.css" type="text/css" />
	<link rel="stylesheet" href="css/logotipo.css" type="text/css" />
	<link rel="stylesheet" href="css/menu.css" type="text/css" />
	<script type="text/javascript" src="scripts/menu.js"></script>
	<title>Photomania</title>
</head>
<body>
<div align="center">
	<div class="spacer"></div>
<!-- Inicio do logotipo. Dentro do logotipo está incluido o menu de login/logout. -->
<!-- O menu login/logout é responsavel por verificar se o utilizador é válido e -->
<!-- por gerir a sessão de utilizador. -->	
	<div class="logotipo-box">
		<div class="login-box"><?php include("login/login-menu.php");?></div>
	</div>
<!-- fim do logotipo -->
	<div class="spacer"></div>
<!-- inicio do menu. O menu assume duas formas. Uma forma quando o utilizador está -->
<!-- sem sessão iniciada e outra quando a sessão está iniciada. -->
	<div class="menu-box">
	  <div class="menu-content">
	    <?php 
			  if($_SESSION['logged']==TRUE)
			      include("menus/menu_logged.php");
			  else
			      include("menus/menu.php");
		?>
	  </div>
    </div>
<!-- fim do menu -->
	<div class="spacer"></div>
<!-- inicio do conteudo. A area de conteudo é a area fundamental da pagina. Nela são incluidas -->
<!-- todas as funcionalidades apontadas pelos menus. -->
   	<div class="page-area">
	  <div class="conteudo">
	    <?php
	      $menu=$_GET['menu'];
	      if(strcmp($menu, "home")==0){include("conteudo/ultimos.php");}
	      else if(strcmp($menu, "registar")==0){include("conteudo/registar.php");}
	      else if(strcmp($menu, "pesquisar")==0){include("conteudo/pesquisar.php");}
	      else if(strcmp($menu, "inserir")==0){include("conteudo/inserir.php");}
	      else if(strcmp($menu, "gerir")==0){include("conteudo/gerir.php");}
	      else if(strcmp($menu, "remover")==0){include("conteudo/remover.php");}
	      else if(strcmp($menu, "enviar")==0){include("conteudo/enviar.php");}
	      else if(strcmp($menu, "receber")==0){include("conteudo/receber.php");}
	      else {include("conteudo/ultimos.php");}
	    ?>
	  </div>
	</div>
<!-- fim do conteudo -->

	<div class="spacer"></div>
	
<!-- inicio do rodape -->
	<div class="page-area">
	  <div class="bottom-box">
	      P<b>hoto</b>M<b>ania</b>
	  </div>
	</div>
    <!-- fim do rodape -->

</div>
</body>
</html>