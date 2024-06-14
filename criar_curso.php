<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Curso</title>
</head>
<body>
    <h1>Criar Curso</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome"><br>

        <input type="submit" value="Criar Curso">

        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = ['nome' => $_POST['nome']];

                $option = [
                    'http' => [
                        'header' => "Content-type:application/json\r\n",
                        'method' => 'POST',
                        'content' => json_encode($data),
                    ],
                ];

                $context = stream_context_create($option);

                $result = file_get_contents('http://127.0.0.1:5000/cursos', false, $context);

                if ($result === FALSE) {
                    echo 'Erro ao criar curso!';
                } else {
                    header('Location: cursos.php');
                }
            }
        ?>

    </form>
</body>
</html>