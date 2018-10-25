<a href="index.php?menu=home" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "home")==0 || $menu==""){echo "menu-selected";} else {echo "menu";} ?>">home</a> | 
<a href="index.php?menu=registar" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "registar")==0){echo "menu-selected";} else {echo "menu";} ?>">registar</a> | 
<a href="index.php?menu=pesquisar" class="<?php $menu=$_GET['menu']; if(strcmp($menu, "pesquisar")==0){echo "menu-selected";} else {echo "menu";} ?>">pesquisar</a> | 
