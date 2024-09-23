
<?php
include 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $id_aula = $_POST ['id_aula'];
    $sala= $_POST ['sala'];
    $local = $_POST ['local'];
    $capacidade = $_POST ['capacidade'];


$sql = "INSERT INTO aulas (id_aula, sala , local , capacidade) VALUES ('$id_aula' , '$sala', '$local', '$capacidade')";


if ($conn->query($sql) === true) {
    echo "Novo registro"; 
} else{
    echo "Erro:" . $sql . "<br>" . $conn -> error;
}
 
$conn -> close();
}
?>

<form method="post" action="create.php">
    ID Aula: <input type="number" name="id_aula" required><br>
    Sala: <input type="number" sala="sala" required>
    Local: <input type="text" local="local" required>
    Capacidade: <input type="text" capacidade="capacidade" required>
    <input type="submit" value="Adicionar aula">

</form>

<a href="read.php">Ver Registros das aulas.</a>

