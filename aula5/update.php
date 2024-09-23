<?php
include 'db.php';

$id_aula = $_GET['id_aula'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sala = $_POST['sala'];
    $local = $_POST['local'];
    $capacidade = $_POST['capacidade'];

    $sql = "UPDATE user SET sala='$sala', local='$local', capacidade='$capacidade' WHERE id=$id_aula";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro adicionado";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error; 
    }

    $conn-> close();
    header ("Location: read.php");
    exit();
}

$sql = "SELECT * FROM user WHERE id_aula=$id_aula";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=" update.php?id=<?php echo $row['id'];?>">
    <label for="sala">Sala</label>
    <input type="number" sala="sala" value="<?php echo $row['sala']; ?>" required>
    <label for="local">Local</label>
    <input type="text" sala="local" value="<?php echo $row['local']; ?>" required>
    <label for="capacidade">Capacidade</label>
    <input type="text" capacidade="capacidade" value="<?php echo $row['capacidade']; ?>" required>
    <input type="submit" value="Atualizar">
</form>

</body>
</html>