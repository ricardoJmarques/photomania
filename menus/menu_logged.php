<a href="index.php?menu=home" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "home")==0 || $menu==""){echo "menu-selected";} else {echo "menu";} ?>">home</a> | 
<a href="index.php?menu=pesquisar" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "pesquisar")==0){echo "menu-selected";} else {echo "menu";} ?>">pesquisar</a> | 
<a href="index.php?menu=inserir" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "inserir")==0){echo "menu-selected";} else {echo "menu";} ?>">inserir</a> | 
<a href="index.php?menu=gerir" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "gerir")==0){echo "menu-selected";} else {echo "menu";} ?>">gerir</a> | 
<a href="index.php?menu=remover" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "remover")==0){echo "menu-selected";} else {echo "menu";} ?>">remover</a> | 
<a href="index.php?menu=enviar" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "enviar")==0){echo "menu-selected";} else {echo "menu";} ?>">enviar</a> | 
<a href="index.php?menu=receber" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "receber")==0){echo "menu-selected";} else {echo "menu";} ?>">receber</a>