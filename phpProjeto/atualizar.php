<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>

<body>
    <?php
    function atualizar($opcao, $dado)
    {
        switch ($opcao) {
            case 1:
                $_SESSION['nome'] = $dado;
                return "Atualizando Nome";
                break;

            case 2:
                $_SESSION['telefone'] = $dado;
                return "Atualizando Telefone";
                break;

            case 3:
                $_SESSION['endereco'] = $dado;
                return "Atualizando Endereco";
                break;

            case 4:
                $_SESSION['cidade'] = $dado;
                return "Atualizando Cidade";
                break;
            default:
                return "Faça uma escolha";

        } //Fim do escolha
    } //Fm o Método
    ?>

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

    </form>

    <label> Dado: </label>
    <input type="Text" id="dado" name="dado" />

    <button> Atualizar
        <?php
        session_start();
        $opcao = $_POST['opcao'];
        $dado = $_POST['dado'];
        ?>
    </button>

    <?php
    echo atualizar($opcao, $dado);
    ?>

</body>

</html>