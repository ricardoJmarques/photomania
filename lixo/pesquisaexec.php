<?php
$categoria_id = $_POST['categoria'];
$db_username = "anafilipa";
$db_password = "anafilipa";
$sql_query = "SELECT * FROM produtos WHERE categoria_id = ".$categoria_id.";";
$database = new PDO('mysql:host=localhost;dbname=phomania', $db_username, $db_password);
?>
<table width="860" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="3"><h1>Pesquisar</h1></td>
	</tr>
	<tr valign="top">
		<td width="10"></td>
		<td width="840">
<center>
<?php
	foreach ($database->query($sql_query) as $row) {
	print "		
<table width=700 border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td colspan=3><h2>".$row['titulo']."</h2></td>
	</tr>
	<tr>
		<td witdh=580 height=100 rowspan=2>".$row['descricao']."</td>
		<td witdh=20 height=100></td>
		<td witdh=100 height=100>
			<img witdh=100 height=100 src=".$row['fotografia']."></img>
		</td>
	</tr>
	<tr>
		<td witdh=20></td>
		<td witdh=100>".$row['preco']." €</td>
	</tr>
</table>
<br>
";
}
$database = null;
?>	
</center>
		</td>
		<td width="10"></td>
	</tr>

</table>