<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>CONFIRMADOS PARA O SHOW:</h1>
    <?php
    //Definir a comunicação com o banco de dados
    $servidor = "localhost";
    $usuario =  "root";
    $senha = "";
    $dbnome = "banco";

    //Criar a conexão com o banco
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    //Definri o comando do SQL SERVER para acessar a tabela
    $comando_banco = "SELECT * FROM nomes";

    //Executar o resultado da consulta SQL
    $resultad_tabela = mysqli_query($conexao, $comando_banco);

    //Percorrer todos os registros e imprimir na pagina
    while($linha_registro = mysqli_fetch_assoc($resultad_tabela)){
        //imprime o valor nome
        echo "<p>Nome: ". $linha_registro['nome'] . "</p>";
        //imprime o sobrenome
        echo "<p>Sobrenome: ". $linha_registro['sobrenome'] . "</p>";
        echo "<hr>";
    }

    mysqli_close($conexao);


    ?>
    
    
    
</body>
</html>