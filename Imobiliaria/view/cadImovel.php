<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imovel</title>
</head>
<body>

    <form name="cadImovel" id="cadImovel" action="" method="post">
        Descrição: <input type="text" name="descricao" id="descricao"><br/>
        Foto <input type="file" nome="foto" id="foto"><br/>
        Valor <input type="number" nome="valor" id="valor"><br/>
        Tipo <br/>
        <select name="tipo" id="tipo">
            <option value="D">casa</option>
            <option value="F">chacara</option>
            <option value="V">apartamento</option>
            <option value="T">kitnet</option>
        </select><br/><br/>
        <input type="submit" name="btnSalvar" id="btnSalvar">
    </form>

</body>

</html>
<?php

if(isset($_POST['btnSalvar'])){

    require_once '../controller/ImovelController.php';
    call_user_func(array('ImovelController','salvar'));
}

?>

