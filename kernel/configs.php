<?php 
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "system");

$conn = mysqli_connect(HOST, USER, PASS, DB) or die("Não é possível conectar-se ao banco de dados.");

$titulo_site = "System DTR";
$imagem_site = "https://www.habbo.com.br/habbo-imaging/badge/b21134s42114s36114t27114s39011789364e27acf65a25f2a2b9f05939cdd.gif";

?>
