<?php
if ($_SESSION['logged']==TRUE)
{
$database = new baseDados();
$sql_query = 'SELECT nome FROM utilizadores WHERE user_id ="'.$_SESSION['user_id'].'";';
$database->query($sql_query);
$database->execute();
$row = $database->resultset();
print "
<form method=POST action=login/logout.php name=login id=login>
<table width=860 border=0 cellpadding=0 cellspacing=0>
	<tr><td colspan=3 height=10></td></tr>
	<tr>
		<td width=600></td>
    	<td width=160>Ola, ";
echo $row[$database->rowCount()-1]['nome'];
$database = null;
print "!</td>
	    <td width=100>
		<input type=submit value=Logout class=login-input-button>
		</td>
	</tr>
</table>
</form>";
}
else
{
print "
<form method=POST action=login/login.php name=login id=login>
<table width=860 border=0 cellpadding=0 cellspacing=0>
	<tr><td colspan=7 height=10></td></tr>
	<tr>
	    <td width=380></td>
	   	<td width=80>Username:</td>
		<td width=100><input type=text name=username class=login-input-box></td>
		<td width=20></td>
		<td width=80>Password:</td>
		<td width=100><input type=password name=password class=login-input-box></td>
		<td width=20></td>
		<td width=80><input type=submit value=Login class=login-input-button></td>
	</tr>
</table>
</form>";
}
?>