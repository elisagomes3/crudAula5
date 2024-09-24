<?php
include 'db.php';

$sql = "SELECT * FROM professores";

$result = $conn -> query($sql);

if($result -> num_rows > 0) {
    echo"<table border='1'>
    <tr>
    <th>ID Professor</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Matéria</th>
    <th>Ações</th>
    </tr>";

    while($row = $result -> fetch_assoc()){
        echo "<tr>
        <td>{$row['id_professor']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['idade']}</td>
        <td>{$row['materia']}</td>
        <td>
        <a href='updateProfessor.php?id_professor={$row['id_professor']}'>Editar</a> |
        <a href='javascript:void(0);' onclick='confirmDelete({$row['id_professor']});'>Excluir</a>
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
        window.location.href = 'deleteProfessor.php?id_professor=' + id; 
    }
}
</script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
    
</body>
</html>