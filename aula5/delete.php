<?php
include 'db.php';

if (isset($_GET['id_aula'])) {
    $id_aula = intval($_GET['id_aula']); 

    
    $sql = "DELETE FROM aulas WHERE id_aula = $id_aula";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID da aula não fornecido."; 
}


$conn->close();


header("Location: read.php");
exit();
?>