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
<a href="create.php">Inserir novo registro.</a>
