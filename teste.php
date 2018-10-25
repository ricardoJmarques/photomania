<?php
include ("baseDados.class.php");
define("DB_HOST", "localhost");
define("DB_USER", "anafilipa");
define("DB_PASS", "anafilipa");
define("DB_NAME", "phomania");
$database = new baseDados();
$sql_query = "SELECT * FROM produtos;";
$database->query($sql_query);
$database->execute();
$row = $database->resultset();
print_r($row);
echo $database->rowCount();
?>