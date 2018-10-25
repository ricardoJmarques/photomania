<?php
if ($_SESSION['logged']!=TRUE)
   header("Location: index.php");
?>
<?php
$db_username = "anafilipa";
$db_password = "anafilipa";
$sql_query = "SELECT * FROM categorias;";
$database = new PDO('mysql:host=localhost;dbname=phomania', $db_username, $db_password);
?>
<table width="860" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="3"><h1>Inserir Anuncio</h1></td>
	</tr>
	<tr valign="top">
		<td width="420"></td>
		<td width="20"></td>
		<td width="420">
<table width="420" border="0" cellpadding="0" cellspacing="0">
    <tr>
	    <td width="80" height="30">Categoria:</td>
		<td width="20" height="30"></td>
		<td width="320" height="30">
			<select name="categoria" class=select-box>
  			    <option selected value=""></option>
				<?php
				foreach ($database->query($sql_query) as $row) {
						print "<option value=".$row['categoria_id'].">".$row['categoria_nome']."</option>";
				}
				$database = null;
				?>
			</select>
		</td>
    </tr>
    <tr>
		<td width="80" height="30">Titulo:</td>
		<td width="20" height="30"></td>
		<td width="320" height="30"><input type=text name=titulo class=input-box></td>
    </tr>
    <tr>
		<td width="80" height="30">Preço:</td>
		<td width="20" height="30"></td>
		<td width="320" height="30"><input type=text name=preco class=input-box></td>
    </tr>
    <tr>
		<td width="80" height="30">Descrição:</td>
		<td width="20" height="30"></td>
		<td width="320" height="30"><textarea name=descricao class=text-box></textarea></td>
    </tr>
    <tr>
		<td width="80" height="30">Fotografia:</td>
		<td width="20" height="30"></td>
		<td width="320" height="30"><input type=text name=fotogragia class=input-box></td>
    </tr>
    <tr>
		<td width="420" height="30" colspan="3"><input type=submit value=Inserir class=input-button>    <input type=reset value=Reset class=input-button></td>
    </tr>

</table>
		</td>
	</tr>
</table>