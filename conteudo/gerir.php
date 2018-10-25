<?php
if ($_SESSION['logged']!=TRUE)
   header("Location: index.php");
$db_username = "anafilipa";
$db_password = "anafilipa";
$sql_query1 = "SELECT * FROM utilizadores WHERE user_id =".$_SESSION['user_id'].";";
$sql_query2 = "select * FROM produtos WHERE user_id =".$_SESSION['user_id'].";";
$database = new PDO('mysql:host=localhost;dbname=phomania', $db_username, $db_password);
?>
<table width="860" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="3"><h1>Gerir</h1></td>
	</tr>
	<tr valign="top">
		<td width="420">
<?php
foreach ($database->query($sql_query1) as $row) {
print "		
<table width=420 border=0 cellpadding=0 cellspacing=0>
    <tr><td width=420 height=30 colspan=3><h2>Os meus dados pessoais:</h2></td></tr>
	<tr>
		<td width=100 height=30>Username:</td>
		<td width=20 height=30></td>
		<td width=300 height=30><input type=text name=username class=input-box value=".$row['username']."></td>
	</tr>
	<tr>
		<td width=100 height=30>Password:</td>
		<td width=20 height=30></td>
		<td width=300 height=30><input type=text name=password class=input-box value=".$row['password']."></td>
	</tr>
	<tr>
		<td width=100 height=30>Nome:</td>
		<td width=20 height=30></td>
		<td width=300 height=30><input type=text name=nome class=input-box value=\"".$row['nome']."\"></td>
	</tr>
	<tr>
		<td width=100 height=30>Email:</td>
		<td width=20 height=30></td>
		<td width=300 height=30><input type=text name=email class=input-box value=".$row['email']."></td>
	</tr>
</table>
";
}
?>
		</td>
		<td width="20"></td>
		<td width="420">
		
<table width=420 border=0 cellpadding=0 cellspacing=0>
    <tr><td width=100 height=30 colspan=4><h2>Os meus anuncios:</h2></td></tr>
	<tr>
		<td width=105 height=30>Titulo</td>
		<td width=105 height=30>Descrição</td>
		<td width=105 height=30>Preço</td>
		<td width=105 height=30>Fotografia</td>
	</tr>
<?php
$i = 0;
$bgcolor = "#CCCCCC";
foreach ($database->query($sql_query2) as $row) {
if ($i/2==0)
   {$bgcolor = "#CCCCCC";}
else
   {$bgcolor = "#000000";}
$i++;
print "		
	<tr>
		<td width=105 height=30 bgcolor=".$bgcolor.">".$row['titulo']."</td>
		<td width=105 height=30 bgcolor=".$bgcolor.">".$row['descricao']."</td>
		<td width=105 height=30 bgcolor=".$bgcolor.">".$row['preco']."</td>
		<td width=105 height=30 bgcolor=".$bgcolor.">".$row['fotografia']."</td>
	</tr>
";
}
$database = null;
?>
</table>
		
		</td>
	</tr>
</table>