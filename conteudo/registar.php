<?php
$sql_query = "INSERT INTO utilizadores (username, password, nome, email) VALUES ('".$username."', '".$passowrd."', '".$nome."', '".$email."');";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $username = test_input($_POST["username"]);
   $password = test_input($_POST["password"]);
   $nome = test_input($_POST["nome"]);
   $email = test_input($_POST["email"]);
}
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<table width="860" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="3"><h1>Registar</h1></td>
	</tr>
	<tr valign="top">
		<td width="130"></td>
		<td width="600">
<center>
<form method=POST action="#" name=login id=login>
<table border=0 width=420>
	<tr>
		<td colspan=2 width=420 height=30><b>Registe-se connosco:</b></td>
	</tr>
	<tr>
		<td width=70 height=30><b>Username:</b></td>
		<td width=350 height=30><input type=text name=username class=input-box></input></td>
	</tr>
	<tr>
		<td width=70 height=30><b>Password:</b></td>
		<td width=350 height=30><input type=text name=password class=input-box></input></td>
	</tr>
	<tr>
		<td width=70 height=30><b>Nome:</b></td>
		<td width=350 height=30><input type=text name=nome class=input-box></input></td>
	</tr>
	<tr>
		<td width=70 height=30><b>Email:</b></td>
		<td width=350 height=30><input type=text name=email class=input-box></input></td>
	</tr>
	<tr>
		<td colspan=2 width=420 height=30>
		<center>
		<input type=submit value=Registar class=input-button>      <input type=reset value=Reset class=input-button>
		</center>
		</td>
	</tr>
</table>
</form>
</center>
		</td>
		<td width="130"></td>
	</tr>
</table>