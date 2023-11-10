<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php include 'cadastro.php'?>
    <form method="POST">
        <label> Escolha o campo que deseja atualizar: </label>
        <select name="opcao">
            <option value="0"></option>
            <option value="1">Nome</option>
            <option value="2">Telefone</option>
            <option value="3">Endereco</option>
            <option value="4">Cidade</option>
        </select>
        <br><br>

        <label> Dado: </label>
        <input type="Text" id="dado" name="dado" />
    </form>

    <button> Atualizar
        <?php
            
        ?>

    </button>
    
</body>
</html>