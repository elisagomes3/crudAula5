<?php
include 'db.php';

$id_aula = $_GET['id_aula'];

$sql = "DELETE FROM aulas WHERE id_aula=$id_aula";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn -> close();

header ("Location: read.php");
exit();

?>