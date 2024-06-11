<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>SHOW DO LUAN SANTANA</h1>
    <img src="LuanSantana.jpg" alt="" width="300px">
    <br>
    <h3>📅15/06/2024</h3>
    <h3>📌Mogi das Cruzes, SP</h3>
    <br><br>
    <h3>CONFIRME SUA PRESENÇA PARA O SHOW:</h3>
   <div class="formulario">
   <form method="post">
        <label>Nome</label>
        <input type="text" name="campo1">
        <br><br>
        <label>Sobrenome</label>
        <input type="text" name="campo2">
        <br><br>
        <input class="botao" type="submit" value="Enviar">
    </form>
    <br>
    
    <a href="index.php">VEJA SE VOCÊ ESTÁ NA LISTA</a>
 
    <?php
    //Conectar com o banco de dados
    $conectar_banco = mysqli_connect("localhost", "root", "", "banco");

    //verivicar se o formulario foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $campo1 = $_POST['campo1'];
        $campo2 = $_POST['campo2'];
    
        //criar os valores (comando sql) einserir na tabela
        $comando_banco = "INSERT INTO nomes (nome, sobrenome) VALUES ('$campo1', '$campo2')";

        //verifica se foi enviado ou ocorreu um erro
        if(mysqli_query($conectar_banco, $comando_banco)){
            echo "Presença confirmada com sucesso";
        }else{
            echo "Presença confirmada registro";
        }
    }
  

    ?>
</body>
</html>