<?php
include 'db.php';

$id_professor = $_GET['id_professor'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $materia = $_POST['materia'];

    $sql = "UPDATE professores SET nome='$nome', idade='$idade', materia='$materia' WHERE id_professor=$id_professor";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro adicionado";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error; 
    }

    $conn-> close();
    header ("Location: readProfessor.php");
    exit();
}

$sql = "SELECT * FROM professores WHERE id_professor=$id_professor";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Atualizar Usuário:</h1>
    <form method="POST" action=" updateProfessor.php?id_professor=<?php echo $row['id_professor'];?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br><br>
    <label for="idade">Idade</label>
    <input type="number" name="idade" value="<?php echo $row['idade']; ?>" required><br><br>
    <label for="materia">Matéria</label>
    <input type="text" name="materia" value="<?php echo $row['materia']; ?>" required><br><br>
    <input type="submit" value="Atualizar" class="adicionar">
</form>

</body>
</html>