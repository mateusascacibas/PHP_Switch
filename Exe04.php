<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <form action="#" method="post">
    <label>Digite seu gênero: </label>
    <input type="text" name= "genero" id= "genero">
    <button type= "submit">Enviar</button>
    </form>

    <?php 
    /*Crie um algoritmo que imprima o gênero de uma pessoa utilizando um dos caracteres(M ou F) como entrada. */
    $genero = $_POST["genero"];
    $genero = strtoupper($genero);

    switch ($genero){
        case "M":
            $genero = "Masculino";
            break;
        case "F":
            $genero = "Feminino";
            break;
        default:
            $genero = "Gênero não especificado";
            break;
    }

    
    echo '<script type="text/javascript">alert("O seu sexo é: ' . $genero . '")</script>';  
    ?>

</body>
</html>