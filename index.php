<?php
    include_once('viacep.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <link rel="stylesheet" href="style.css">
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

</head>
<body>

<script>
$(document).ready(function(){
    $('#cep').mask('00000-000');
});


</script> 
    <form action="." method="post">
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" id="cep" value="<?php echo $address->cep?>">
        <input type="submit">
        <input type="text" placeholder="rua" name="rua" value="<?php echo $address->logradouro?>">
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro?>">
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $address->localidade?>">
        <input type="text" placeholder="estado" name="estado" value="<?php echo $address->uf?>">
    </form>
</body>
</html>


