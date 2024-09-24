<?php

include 'db.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $id_professor = $_POST ['id_professor'] ?? null;
    $nome = $_POST ['nome']?? null;
    $idade = $_POST ['idade']?? null;
    $materia = $_POST ['materia']?? null;

    $sql = "INSERT INTO professores (id_professor, nome , idade , materia) VALUES ('$id_professor' , '$nome', '$idade', '$materia')";


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
    <title>Document</title>
</head>
<body>
<form method="post" action="createProfessor.php">
    ID Professor: <input type="text" name="id_professor" required><br>
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    Matéria Professor: <input type="text" name="materia" required><br>
    <input type="submit" value="Adicionar usuário">
    <a href="readProfessor.php">Ver registros</a>

</form>
</body>
</html>

</form>