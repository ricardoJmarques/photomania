<?php
    include("../config/utilizadores.class.php");
	$user_username = $_POST['username'];
    $user_password = $_POST['password'];
	$user = new utilizador();
	$erro = 0;
    $erro = $user->verifica_string($user_username);
	if ($erro == 0)
	   $erro = $user->verifica_string($user_password);
	if ($erro == 0)
	   echo "Bad Password"

//	if ($user_username == "" || $user_password == ""){
//	   $error = "campos vazios";
//	   $goto = "Location: ../index.php?error=".$error;
//	   header($goto);
//	   die;
//    }
//    else {
//       include("../config/baseDados.class.php");
//	   $database = new baseDados();
//       $sql_query = 'SELECT username, password, user_id FROM utilizadores WHERE username = "'.$user_username.'";';
//	   $database->query($sql_query);
//	   $database->execute();
//	   $resultado = $database->resultset();
//	   if ($resultado[$database->rowCount()-1]['username'] == $user_username) {
//	       if ($resultado[$database->rowCount()-1]['password'] == $user_password) {
//	   	       $error = "Login com sucesso.";
//		       session_start();
//	   	       $_SESSION['logged']=TRUE;
//		       $_SESSION['user_id']=$resultado[$database->rowCount()-1]['user_id'];
//	       }
//	       else {
//	   	       $error = "Password incorrecta.";
//	       }
//	   }
//	   else {
//	   $error = "Username inexistente.";
//	   }
//	$database = null;
//	$goto = "Location: ../index.php?error=".$error;
//	header($goto);
//    die;
//}
?>
