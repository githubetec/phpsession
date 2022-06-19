<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Cadastros</title>
</head>

<body>
    <?php
    if($_POST != null) {
            session_start();
            $nome=$_SESSION['nome'];
            $celular=$_SESSION['nome'];
    }
    ?>
    <?php echo 'Nome:' . $_SESSION['nome']; ?>
    <br>
    <?php echo 'Celular: ' . $_SESSION['nome']; ?>
    <br>
</body>

</html>