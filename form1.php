<?php

if(isset($_POST["submit"]))
{
    include_once('config.php');
    $nome = $_POST["nome"];
    $datanasc = $_POST["datanasc"];
    $genero = $_POST["genero"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"]; 
    $matricula = $_POST["matricula"];  

    $response = mysqli_query($conexao, "INSERT INTO aluno(nome,datanasc,genero,endereco,telefone,email,matricula) 
VALUES('$nome','$datanasc','$genero','$endereco','$telefone','$email','$matricula')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ir para outra pagina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="form2.php">Form2</a>
      </li>
</nav>
<main>

        <div>
        <form action="form1.php" method="post">       
            
              <label for="nome">Nome</label>
              <input type="text" name="nome" placeholder="Inserir Nome"><br>
              
              <label for="datanasc">Data de nascimento</label>
              <input type="date" name="datanasc" placeholder="Inserir Data de nascimento"><br>
              
              <label for="genero">Genêro</label>
              <input type="text" name="genero" placeholder="Inserir genêro"><br>
              
              <label for="endereco">Endereço</label>
              <input type="text" name="endereco" placeholder="Inserir endereço"><br>
              
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone"  placeholder="Inserir o telefone"><br>

              <label for="email">E-mail</label>
              <input type="text" name="email" placeholder="Inserir E-mail"><br>
        
              <label for="matricula">Matrícula</label>
              <input type="date" name="matricula" placeholder="Inserir Matrícula"><br>
              
              <input type="submit" name="submit" id="submit">
              </form>
        </div>
        
        
    </main>
</body>