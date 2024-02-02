



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Magic Library</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style2.css">

</head>


<body>

    <div class="container">
        <div class="for-image">
          <img src="assets/img/undraw_reading_time_re_phf7.svg" alt="">
        </div>

        

<div id="listagem">
 <h2 class="titulo">Minha Biblioteca</h2>



 <form action="incio.php" method = "GET">
    <div class="search-box">
        <input type="text" name ="busca" class="search-text" placeholder="encontre seus livros...">
        <BUtton type ="submit" name = "submit">Buscar</BUtton>
        <!-- <a href="#" class="search-btn">
            <img class="loupe-blue" src="assets/img/loupe-blue.svg" alt="" width="25px" height="25px">
            <img class="loupe-white" src="assets/img/loupe-white.svg" alt="" width="25px" height="25px">
        </a> -->
     </div>

</form> 


<table class="table table-light table-striped">
<thead>
    <tr>
        <th>book</th>
        <th>nome</th>
        <th>genero</th>
        <th>data de leitura</th>
    </tr>
</thead>
<tbody>


<?php

include_once('config.php');

if(isset($_GET["submit"]) && isset($_GET["busca"])){
    $busca = $_GET["busca"];
    $sql = "SELECT * FROM `cadastro` WHERE book LIKE '%$busca%'";

    $consulta = mysqli_query($conexao, $sql);
    
    
    while( $dados = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
        echo " <tr>
        
        <td>$dados[book]</td> 
        <td>$dados[nome]</td> 
        <td>$dados[genero]</td> 
        <td>$dados[termino_leitura]</td> 
        </tr>";
    }
}




?>
</tbody>
</table>
</div>






</body>
</html>

