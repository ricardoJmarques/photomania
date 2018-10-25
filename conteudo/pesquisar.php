<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $categoria = $_POST['categoria'];
	list($categoria_id, $categoria_nome) = explode('%', $categoria);
}
else {
$categoria_id = "0";
$categoria_nome = "--";
}
$sql_query1 = "SELECT * FROM categorias;";
$sql_query2 = "SELECT * FROM produtos WHERE categoria_id = ".$categoria_id.";";
$database = new PDO('mysql:host=localhost;dbname=phomania', $db_username, $db_password);
?>
<table width=860 border=0 cellpadding=0 cellspacing=0>
	<tr valign=top>
		<td colspan=3><h1>Pesquisar</h1></td>
	</tr>
	<tr valign=top>
		<td width=130></td>
		<td width=600>
		<center>
		<form method=POST action="#" name=pesquisa id=pesquisa>
		<select name=categoria class=select-box onchange="this.form.submit()">
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $categoria_id != 0){
		print "<option selected value=".$categoria_id."%".$categoria_nome.">".$categoria_nome."</option>";
		print "<option value=0>--</option>";
	}
	else {
		print "<option value=0>--</option>";
	}
	foreach ($database->query($sql_query1) as $row) {
	print "<option value=".$row['categoria_id']."%".$row['categoria_nome'].">".$row['categoria_nome']."</option>";
	}
?>
		</select>
		</form>
		</center>
		</td>
		<td width=130></td>
	</tr>
	<tr>
		<td colspan=3 height=30></td>
	</tr>
	<tr>
		<td colspan=3>
<center>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
	    foreach ($database->query($sql_query2) as $row) {
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
	}
	$database = null;
?>
</center>
		 </td>
	</tr>
</table>