<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <form action="#" method="post">
    <label>Valor do produto: </label>
    <input type="text" name = "valor" id = "valor">
    <label>Forma de pagamento: </label>
    <select name="select" id="select">
        <option value="1">À vista</option>
        <option value="2">À prazo</option>
    </select>
    <button type="submit"> Enviar </button>
    </form>
    <?php 
    /*Dado o valor do produto e a forma de pagamento.
    1= à vista;
    2= à prazo.
    Se o produto for pago à vista aplique um desconto de 10% antes de mostrar o valor final
    senão informe o mesmo valor do produto.*/
    $pagamento = $_POST["select"];
    $valor = $_POST["valor"];
    $desconto = 0;
    switch ($pagamento){
        case 1:
            $desconto = ($valor / 100) * 10;
            $valor = $valor - $desconto;
            break;
    }

    echo '<script type="text/javascript">alert("O valor do desconto é ' . $desconto .' e o valor final: '. $valor . '")</script>';
    
    ?>
</body>
</html>