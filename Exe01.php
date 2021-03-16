
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <form action="#" method="post">
    <label>Valor Total: </label>
    <input type="text" name="total" id="total">
    <label>Código: </label>
    <input type="text" name="codigo" id="codigo">
    <button type="submit">Enviar</button>
    
    </form>
    <?php
    #Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips.
    #Faça um programa que calcule o valor total a ser pago por uma pessoa. 
    #O programa deverá ler o valor total da compra efetuada e um código que identifique se o comprador é:
    #Um cliente comum (1), funcionário (2) ou vip (3).

    $total = $_POST["total"];
    $codigo = $_POST["codigo"];
    $valor = 0;

    switch ($codigo){
        case 2:
            $desconto = ($total / 100) * 10;
            $valor = $total - $desconto;
            break;

        case 3:
            $desconto = ($total / 100) * 5;
            $valor = $total - $desconto;
            break;

        default:
            break;
    }

        echo '<script type="text/javascript">alert("O valor total é: ' . $total . ' mas com o desconto de ' . $desconto . ' fica ' . $valor .'")</script>';
    
   
    ?>

</body>
</html>