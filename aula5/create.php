<?php
include 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $id_aula = $_POST ['id_aula'] ?? null;
    $sala = $_POST ['sala']?? null;
    $local = $_POST ['local']?? null;
    $capacidade = $_POST ['capacidade']?? null;
    $materia = $_POST ['materia']?? null;


$sql = "INSERT INTO aulas (id_aula, sala , local , capacidade, materia) VALUES ('$id_aula' , '$sala', '$local', '$capacidade', '$materia')";


if ($conn->query($sql) === TRUE) {
    echo "Novo registro adicionado com sucesso!"; 
} else{
    echo "Erro:" . $sql . "<br>" . $conn -> error;
}
 
$conn -> close();
}
?>

<form method="post" action="create.php">
    ID Aula: <input type="number" name="id_aula" required><br>
    Sala: <input type="number" name="sala" required><br>
    Local: <input type="text" name="local" required><br>
    Capacidade: <input type="text" name="capacidade" required><br>
    Matéria: <input type="text" name="materia" required><br>
    <input type="submit" value="Adicionar aula">

</form>

<a href="read.php">Ver Registros das aulas.</a
