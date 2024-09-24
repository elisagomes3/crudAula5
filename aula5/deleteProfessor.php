<?php
include 'db.php';

if (isset($_GET['id_professor'])) {
    $id_professor = intval($_GET['id_professor']); 

    
    $sql = "DELETE FROM professores WHERE id_professor = $id_professor";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID do Professor não fornecido."; 
}


$conn->close();


header("Location: readProfessor.php");
exit();
?>