<?php
    if (isset($_POST['submit'])){
        // print_r($_POST["Nome"]);
        // print_r($_POST["email"]);
        // print_r($_POST["telefone"]);

        include_once('config.php');
        $Nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,nascimento,cidade,estado,endereco) 
        VALUES ('$nome','$email','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "styleform.css" rel = "stylesheet">
    <title>Cadastro</title>
</head>
<body>
    

    <div class = "formCadastro">
        <form action = "form.php" method="post">
            <fieldset>
                <legend id = "titulo"><b>Cadastro</b></legend><!--o <b> serve para deixar a palavra em negrito-->
                <br>
                <div class = "inputBox"><!-- .nome cria uma div com uma class ja-->
                    <input type = "text" name = "nome" id = "nome" class = "inputUser" required>
                    <label for = "nome" class="labelInput"> Nome completo</label>
                </div>
                <br><br>
                <div class = "inputBox"><!-- .nome cria uma div com uma class ja-->
                    <input type = "text" name = "email" id = "email" class = "inputUser" required>
                    <label for = "email" class="labelInput"> Email</label>
                </div>
                <br><br>
                <div class = "inputBox"><!-- .nome cria uma div com uma class ja-->
                    <input type = "tel" name = "telefone" id = "telefone" class = "inputUser" required>
                    <label for = "telefone" class="labelInput"> Telefone</label>
                </div>
                <br>
                <p class = "inputBox">Sexo: </p>
                <input type = "radio" id = "feminino" name = "genero" value = "feminino" required>
                <label for = "feminino" class = "inputBox">Feminino</label>

                <input type = "radio" id = "masculino" name = "genero" value = "masculino" required>
                <label for = "masculino" class = "inputBox">Masculino</label>

                <input type = "radio" id = "outro" name = "genero" value = "outro" required>
                <label for = "outro" class = "inputBox">Outro</label>
                <br><br><br>
                
                <label for = "data_nascimento" id = "data_texto">Data de nascimento: </label>
                <input type = "date" name = data_nascimento id = data_nascimento required>
                
                <br><br>
                <div class = "inputBox">
                    <input type = "text" nome = "cidade" id = "cidade" class = "inputUser" required>
                    <label for = "cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class = "inputBox">
                    <input type = "text" nome = "estado" id = "estado" class = "inputUser" required>
                    <label for = "estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class = "inputBox">
                    <input type = "text" nome = "endereco" id = "endereco" class = "inputUser" required>
                    <label for = "endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type = "submit" name = "submit" id = "submit">
            </fieldset>
        </form>

    </div>

    <video autoplay muted loop id = "background-video">
        <source src = "video1.mp4">
    </video>
    
</body>
</html>