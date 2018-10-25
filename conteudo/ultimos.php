<?php
$database = new baseDados();
$sql_query = "SELECT * FROM produtos;";
$database->query($sql_query);
$database->execute();
$row = $database->resultset();
?>
<table width="860" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="3"><h1>Ultimas novidades</h1></td>
	</tr>
	<tr valign="top">
		<td width="10"></td>
		<td width="840">
<center>
<?php
    for ($i=0; $i < $database->rowCount(); $i++){
	print "		
<table width=700 border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td colspan=3><h2>".$row[$i]['titulo']."</h2></td>
	</tr>
	<tr>
		<td witdh=580 height=100 rowspan=2>".$row[$i]['descricao']."</td>
		<td witdh=20 height=100></td>
		<td witdh=100 height=100>
			<img witdh=100 height=100 src=".$row[$i]['fotografia']."></img>
		</td>
	</tr>
	<tr>
		<td witdh=20></td>
		<td witdh=100>".$row[$i]['preco']." €</td>
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