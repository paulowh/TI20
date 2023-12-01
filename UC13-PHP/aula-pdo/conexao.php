<?php


// echo "<h2> Aula PDO </h2>";

// tipo do banco -> mysql
// host -> localhost
// bando de dados -> aulapdo
// usuario -> root
// senha -> 

$conexao = new PDO("mysql:host=localhost;dbname=aulapdo","root", "");

//exibe as informações e os tipos dela
//var_dump($conexao);

$select = "SELECT * FROM tb_produtos";

$resultado = $conexao->query( $select );

//consulta todas as informações
// $consulta = $resultado->fetch();
$consulta = $resultado->fetchAll();

echo '<h2> CONEXAO.PHP </h2>';
echo '<ul>';
foreach ($consulta as $linha ) {
   //exibe as informações em uma lista não ordenada
   echo '<li>' . $linha['nome_produto'] . '</li>';
}
echo '</ul>';

?>

