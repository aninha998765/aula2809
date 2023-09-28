<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEIÇÕES</title>
</head>
<style> 
.img{
    width: 370px;
    filter: drop-shadow(12px 12px 7px rgba (0, 0, 0, 0.7));
}

.body{
background-color: pink;}
</style>
<body>
    <form method="post" action="">
        <label for="idade">DIGITE SUA IDADE: </label>
        <input type="number" id="idade" name="idade">
        <button type="submit">ENVIAR</button>
    </form> 


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $idade = $_POST['idade'];

    if($idade < 16){
        echo "NÃO PODE VOTAR";
    }
    if($idade >= 16 && $idade <= 18){
        echo "VOTO FACULTATIVO";
    }
    if($idade >= 19 && $idade <= 65){
        echo "VOTO OBRIGATÓRIO";
    }
    if($idade >= 66){
        echo "VOTO FACULTIVO";
    }
}
?>
    <img src="img/download.png" alt="" class="img">

</body>
</html>
