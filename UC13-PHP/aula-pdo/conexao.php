<?php

echo "<h2> Aula PDO </h2>";

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

$consulta = $resultado->fetchAll();

foreach ($consulta as $linha ) {
   echo '<hr> <pre>';
//    var_dump($linha['nome_produto']);
   echo $linha['nome_produto'];
}


// echo "<pre>";
// var_dump($consulta);



?>