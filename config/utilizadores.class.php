<?php
include("baseDados.class.php");
class utilizador {
	public $username = "";
	private $password = "";
	private $email = "";
	private $nome = "";
	
	public function verifica_Username($username){
		if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{3,31}$/', $username) ){
		   return 1;
		}
		else {
		   return 0;
		}
	}
	
	public function verifica_Password($password){
		if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{6,31}$/', $password) ){
		   return 2;
		}
		else {
		   return 0;
		}
	}

	public function verifica_email($email){
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	    return 3;
    	}
		else {
		    return 0;
	}
			
public function inicia_sessao($username, $password){
   $database = new baseDados();
   $sql_query = 'SELECT username, password, user_id FROM utilizadores WHERE username = "'.$username.'";';
   $database->query($sql_query);
   $database->execute();
   $resultado = $database->resultset();
   if ($resultado[$database->rowCount()-1]['username'] == $user_username) {
       if ($resultado[$database->rowCount()-1]['password'] == $user_password) {
   	       $error = "Login com sucesso.";
	       session_start();
   	       $_SESSION['logged']=TRUE;
	       $_SESSION['user_id']=$resultado[$database->rowCount()-1]['user_id'];
/	       }

}
//public function termina_sessao(); 
//public function verifica_sessao();
//public function cria_user();
//public function remove_user();.
//public function verifica_login_duplicado();

}
