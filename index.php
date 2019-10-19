<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sistema Web</title>
</head>
<body> 
    <div class="container">
        <h2>Cadastro de Cliente</h2>
        <form action="recebe.php" method="post" Sstyle="width:500px;">
            <label for="">Nome:</label>
            <input type="text" name="nome" class="form-control" required> <!-- required bloqueia-->
            <label for="">Idade:</label>
            <input type="number" name="idade" class="form-control" >
            <label for="">E-mail:</label>
            <input type="email" name="email" class="form-control" >
            <br>
            <input type="submit" value="enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>