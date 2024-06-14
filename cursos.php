<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
</head>
<body>
    <h1>Cursos</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php 
            $api_url = 'http://127.0.0.1:5000/cursos';
            $cursos = json_decode(file_get_contents($api_url));

            foreach ($cursos as $curso){
                echo "<tr>";
                echo "<td>{$curso->id}</td>";
                echo "<td>{$curso->nome}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>