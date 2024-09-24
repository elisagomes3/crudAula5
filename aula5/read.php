
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>

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
    <th>Matéria</th>
    <th>Ações</th>
    </tr>";

    while($row = $result -> fetch_assoc()){
        echo "<tr>
        <td>{$row['id_aula']}</td>
        <td>{$row['sala']}</td>
        <td>{$row['local']}</td>
        <td>{$row['capacidade']}</td>
        <td>{$row['materia']}</td>
        <td>
        <a href='update.php?id_aula={$row['id_aula']}'>Editar</a> |
        <a href='javascript:void(0);' onclick='confirmDelete({$row['id_aula']});'>Excluir</a>
        </td>
        </tr>";
    }
echo "</table>";
}else{
    echo "Nenhum registro encontrado.".

$conn -> close();
}

?>

<script>
function confirmDelete(id) {
    if (confirm("Você tem certeza que deseja excluir este registro?")) {
        window.location.href = 'delete.php?id_aula=' + id; 
    }
}
</script>

</body>
</html>

