<?php

include 'db.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST ['nome']?? null;
    $idade = $_POST ['idade']?? null;
    $materia = $_POST ['materia']?? null;

    $sql = "INSERT INTO professores (nome , idade , materia) VALUES ('$nome', '$idade', '$materia')";


    if ($conn->query($sql) === TRUE) {
        echo "Novo registro adicionado!"; 
    } else{
        echo "Erro:" . $sql . "<br>" . $conn -> error;
    }
     
    $conn -> close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário Professor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Criar um usuário:</h1>
<form method="post" action="createProfessor.php">
    Nome: <input type="text" name="nome" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    Matéria Professor: <input type="text" name="materia" required><br><br>
    <input type="submit" value="Adicionar usuário" class="adicionar">
    <button type="button" onclick="window.location.href='readProfessor.php';" class="registros">Ver registros</button> 

</form>
</body>
</html>

</form>