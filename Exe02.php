<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    <form action="#" method="post">
    <label>Digite o numero do mês: </label>
    <select name="select" id="select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    <button type="submit">Enviar</button>
    
    </form>

    <?php 

    /*Escreva um programa utilizando o comando switch que imprima um mês de acordo com o número digitado pelo usuário.*/
    $selecao = $_POST["select"];
    $mes = "";
    switch($selecao){
        case 1:
            $mes = "Janeiro";
        break;
        case 2:
            $mes = "Fevereiro";
        break;
        case 3:
            $mes = "Março";
        break;
        case 4:
            $mes = "Abril";
        break;
        case 5:
            $mes = "Maio";
        break;
        case 6:
            $mes = "Junho";
        break;
        case 7:
            $mes = "Julho";
        break;
        case 8:
            $mes = "Agosto";
        break;
        case 9:
            $mes = "Setembro";
        break;
        case 10:
            $mes = "Outubro";
        break;
        case 11:
            $mes = "Novembro";
        break;
        case 12:
            $mes = "Dezembro";
        break;

    }
    echo '<script type="text/javascript">alert("O Mês selecionado é o '. $mes . '") </script>';
    ?>
</body>
</html>