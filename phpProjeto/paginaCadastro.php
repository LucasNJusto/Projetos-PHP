<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
</head>
<body>
    <?php include 'cadastro.php';?>  <!-- Vai incluir a outra pagina -->
    <form method="POST">
        <label>CPF: </label>
        <input type="text" id="tCPF" name="tCPF"/>
        <br><br>
        
        <label>Nome: </label>
        <input type="text" id="tNome" name="tNome"/>
        <br><br>
        
        <label>Telefone: </label>
        <input type="text" id="tTel" name="tTel"/>
        <br><br>
        
        <label>Endereco: </label>
        <input type="text" id="tEnd" name="tEnd"/>
        <br><br>
        
        <label>Cidade: </label>
        <input type="text" id="tCid" name="tCid"/>
        <br><br>
        

        <button> Cadastrar
        <?php

            //Passe o dado para o construtor
            session_start();
            //passe o dado para o construtor
            $_SESSION['cpf'] = $_POST['tCPF'];
            $_SESSION['nome'] = $_POST['tNome'];
            $_SESSION['telefone'] = $_POST['tTel'];
            $_SESSION['endereco'] = $_POST['tEnd'];
            $_SESSION['cidade'] = $_POST['tCid'];
        ?>
        </button>

        <button><a href="index.php"> Home </a></button>

    </form>
</body>
</html>