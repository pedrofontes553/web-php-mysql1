<?php

if(isset($_POST["submit"]))
{
    include_once('config.php');
    $nome = $_POST["nome"];
    $diciplina = $_POST["diciplina"];  
    $telefone = $_POST["telefone"];
    $email = $_POST["email"]; 


    $response = mysqli_query($conexao, "INSERT INTO professor(nome,diciplina,telefone,email) 
VALUES('$nome','$diciplina','$telefone','$email')");
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
        <a class="nav-link" href="form1.php">Form1</a>
      </li>
<body>
<main>

        <div>
        <form action="form2.php" method="post">       
              <label for="nome">Nome</label>
              <input type="text" name="nome" placeholder="Inserir Nome"><br>
              
              <label for="diciplina">Disciplina</label>
              <input type="text" name="diciplina" placeholder="Inserir Disciplina"><br>
              
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone"  placeholder="Inserir o telefone"><br>

              <label for="email">E-mail</label>
              <input type="text" name="email" placeholder="Inserir E-mail"><br>
              
              <input type="submit" name="submit" id="submit">
              </form>
        </div>
        
        
    </main>
</body>