<?php
include 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $sala = $_POST ['sala']?? null;
    $local = $_POST ['local']?? null;
    $capacidade = $_POST ['capacidade']?? null;
    $materia = $_POST ['materia']?? null;


$sql = "INSERT INTO aulas (sala , local , capacidade, materia) VALUES ('$sala', '$local', '$capacidade', '$materia')";


if ($conn->query($sql) === TRUE) {
    echo "Novo registro adicionado com sucesso!"; 
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
    <title>Criar Aula</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="post" action="create.php">
    <h1>Criar uma Aula:</h1>
    Sala: <input type="number" name="sala" required><br><br>
    Local: <input type="text" name="local" required><br><br>
    Capacidade: <input type="text" name="capacidade" required><br><br>
    Matéria: <input type="text" name="materia" required><br><br>
    <br>
    <input type="submit" value="Adicionar aula" class="adicionar">
    <button type="button" onclick="window.location.href='read.php';" class="registros">Ver registros</button> 
    <button type="button" onclick="window.location.href='index.html';" class="registros">Voltar a página inicial</button> 
</form>

</body>
</html>


