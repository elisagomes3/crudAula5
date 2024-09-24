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

<form method="post" action="create.php">
    Sala: <input type="number" name="sala" required><br>
    Local: <input type="text" name="local" required><br>
    Capacidade: <input type="text" name="capacidade" required><br>
    Matéria: <input type="text" name="materia" required><br>
    <input type="submit" value="Adicionar aula">

</form>

<a href="read.php">Ver Registros das aulas.</a
