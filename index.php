<?php

if(isset($_POST['submit']))
{
    // print_r($_POST['book']);
    // print_r('<br>');
    // print_r($_POST['name']);
    // print_r('<br>');
    // print_r($_POST['genero']);
    // print_r('<br>');
    // print_r($_POST['termino_leitura']);

 include_once('config.php');

    $book = $_POST['book'];
    $name = $_POST['nome'];
    $genero = $_POST['genero'];
    $termino_leitura = $_POST['termino_leitura'];
    // $arquivo = $_FILES['arquivo']['name'];
    // $diretorio = "./assets/img/";
    
    // move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio . $novo_nome);

     $result = mysqli_query($conexao, "INSERT INTO cadastro (book, nome, genero, termino_leitura)
     VALUES ('$book', '$name', '$genero', '$termino_leitura')");
 }


// $inserirConsultaSQL = "INSERT INTO cadastro(book, nome, genero, termino_leitura, arquivo)"
// VALUES ('')


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Magic Library</title>
</head>


<body>
    
<div class="container">
   <div class="for-image">
     <img src="assets/img/undraw_book_lover_re_rwjy.svg" alt="">
   </div>

   <div id="cadastro">
 <form action="index.php"  method= "POST" id="cadastro">

<h2>Cadastro do Livro</h2>

   <div id="inputs">
    <div id="input-box">
        <label for="name">
            Name do livro
            <div class="input-field">
                <img width="30" height="30" src="https://img.icons8.com/glyph-neue/30/book--v1.png" alt="book--v1"/>
                   <input type="text" name="book" id="name" required>
            </div>
        </label>
    </div>

    <div id="input-box">
        <label for="name">
            Autor do livro
            <div class="input-field">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nOXSMSuFURjA8V/CysgXYJWNWbeUD0CJzcAHsJEUN4uwMxPfwXpLjCxyY/ERWO4rdSa5vY9z3uXmX09Pb+/p/JbDf2scu7jDW9o7GGsKmEYX1S/zgqlSYBRPfYAqzWM6l91aDVClWS1BLoLIeQlyE0SuS5CjINIuQWbRqwF6mFHYSQ1yrIGGsI/PH5d/YC/9b6xJrGM77QmD0Dw2MmYuCmwFn23VZzYjSKcQ6USQh0LkPoJcFSKXEWShEGkJdpAJHPpjy3gNXt7FisxGsIQz3OIZ72l/f59iEcO5wGD1BRr0yeNrskq8AAAAAElFTkSuQmCC">
                  <input type="text" name="nome" id="name" required>
            </div>
        </label>
    </div>

    <div id="input-box">
        <label for="name">
            Gênero
            <div class="input-field">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABJElEQVR4nO2VMWoCQRSGP7YQlAi22nuA6A3UkGJziXRC2kRJZfQiCWlTpcgNJEVyAZMIWnmApIlBMAz8xQYizMzOuhb7wcLCm//Nz8x7b6Cg4ECpABNgDmyAbYDPmjLwHGhTLwNjCRZAFyjhx6PyXLgK5xJ2SMdKeZquwo2ERykNrJXHXKkT7xKa48/lBM4lXAK9PGogAh4y6AKnboiAPjANOAec29FwLAPfwCVQ5y82ye8Uu8aDJ4nN5v9hY+BNsZaPgU+J6ykMfClW8zGwtTAwAoZZGbiX+GpH/GbHf7AraCeKcAA0PHLc+hRhDLwkxule2/AswyFkZeBVC4cpxrDhQ3lOXYXrwK9h1VU4SxRNLidwksH8d34DYtXCT14GCgrYF79iI/az3PSAhQAAAABJRU5ErkJggg==">
                   <input type="text" name="genero" id="name" required>
            </div>
        </label>
    </div>

    <div id="input-box">
        <input type="date" name="termino_leitura" id="termino_leitura" class="inputUser" required>
        <label for="termino_leitura">Término da leitura</label>
    </div>


   </div>

   <input type="submit" name="submit" id="submit" required>
   <!-- <a href="incio.php">Avançar</a> -->

  </form>
  <a href="incio.php">Avançar</a>

</div>
</div>



</body>
</html>