<?php
if ($_SESSION['logged']!=TRUE)
   header("Location: index.php");
?>
<table width=860 border=0 cellpadding=0 cellspacing=0>
	<tr valign=top>
		<td colspan=3 width=860><h1>Contatos</h1></td>
	</tr>
	<tr valign=top>
		<td width=420></td>
		<td width=20></td>
		<td width=420>
<b>Morada:</b><br>
Rua Almeida Garrett<br>
1337-666 - Chaves<br><br>
<b>Tel:</b> 253 000 000<br>
<b>Fax:</b> 253 000 000<br><br>
<table border=0 width=420>
	<tr>
		<td colspan=2 width=420><b>Deixe-nos a sua opinião:</b></td>
	</tr>
	<tr>
		<td width=70><b>Nome:</b></td>
		<td width=350><input type=text name=nome class=input-box></td>
	</tr>
	<tr>
		<td width=70><b>Email:</b></td>
		<td width=350><input type=text name=email class=input-box></td>
	</tr>
	<tr>
		<td colspan=2 width=420><b>Mensagem:</b><br><textarea name=mensagem class=text-box></textarea></td>
	</tr>
</table>
		</td>
	</tr>
		<tr valign=top>
		<td width=420></td>
		<td width=20></td>
		<td width=420></td>
	</tr>
</table>
