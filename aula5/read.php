<?php
include 'db.php';

$sql = "SELECT * FROM aulas";

$result = $conn -> query($sql);

if($result -> num_rows > 0) {
    echo"<table border='1'>
    <tr>
    <th>ID</th>
    <th>Sala</th>
    <th>Local</th>
    <th>Capacidade</th>
    <th>Ações</th>
    </tr>";

    while($row = $result -> fetch_assoc()){
        echo "<tr>
        <td>{$row['id_aula']}</td>
        <td>{$row['sala']}</td>
        <td>{$row['local']}</td>
        <td>{$row['capacidade']}</td>
        </td>
        </tr>";
    }
echo "</table>";
}else{
    echo "Nenhum registro encontrado.".

$conn -> close();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="create.php">Inserir novo .</a>
<br>
<a href="delete.php">Excluir</a>
    
</body>
</html>

