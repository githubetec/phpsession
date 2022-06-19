<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>

<body>
    <?php
    if($_POST != null) {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['nome']=$_POST['nome'];
        $_SESSION['celular']=$_POST['celular'];
    }
    ?>
    <h3>Cadastros</h3>
    <br>
    <form action="index.php" method="POST">
        <label for="nome">Nome...:</label>
        <input type="text" name="nome" id="nome" />
        <br>
        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <input type="submit" formaction="exibir.php" value="Exibir">
    </form>
</body>

</html>