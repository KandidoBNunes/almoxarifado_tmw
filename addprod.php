<?php
include_once('config.php'); 

if(isset($_POST['submit'])){
    $produto = isset($_POST['produto']) ? $_POST['produto'] : '';
    $preco = isset($_POST['preco']) ? $_POST['preco'] : '';
    $quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : '';
    $prateleira = isset($_POST['prateleira']) ? $_POST['prateleira'] : '';
    $data_comp = isset($_POST['data_comp']) ? $_POST['data_comp'] : '';
    $validade = isset($_POST['validade']) ? $_POST['validade'] : '';

    $result = mysqli_query($conexao, "INSERT INTO produtos (produto, preco, quantidade, prateleira, data_comp, validade) VALUES ('$produto', '$preco', '$quantidade', '$prateleira', '$data_comp', '$validade')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(85, 0, 105), rgb(157, 0, 255));
        }
        .box {
            color: rgb(255, 255, 255);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 350px;
        }
        fieldset {
            border-radius: 20px;
            border: 3px solid rgb(157, 0, 255);
        }
        legend {
            border: 1px solid rgb(157, 0, 255);
            padding: 10px;
            text-align: center;
            background-color: rgb(157, 0, 255);
            border-radius: 8px;
        }
        .inputBox {
            position: relative;
        }
        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_comp, #validade {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            width: 90%;
        }
        #submit, #voltar {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: rgb(255, 255, 255);
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-top: 10px;
        }
        #submit:hover, #voltar:hover {
            background-image: linear-gradient(to right, rgb(0, 255, 0), rgb(0, 255, 0));
        }
    </style>
    <title>Cadastro de Itens</title>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>Cadastro de Itens</b></legend>
            <form id="produtoForm" method="POST" action="">
                <br><br>
                <div class="inputBox">
                    <input type="text" id="produto" name="produto" class="inputUser" required>
                    <label for="produto" class="labelInput">Nome do Produto</label>
                    <br><br>
                </div>
                <div class="inputBox">
                    <input type="number" id="quantidade" name="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                    <br><br>
                </div>
                <div class="inputBox">
                    <input type="number" id="preco" name="preco" class="inputUser" step="0.01" required>
                    <label for="preco" class="labelInput">Preço</label>
                    <br><br>
                </div>
                <div class="inputBox">
                    <input type="text" id="prateleira" name="prateleira" class="inputUser" required>
                    <label for="prateleira" class="labelInput">Prateleira</label>
                    <br><br>
                </div>
                <label for="data_comp"><b>Data de Compra:</b></label>
                <input type="date" name="data_comp" id="data_comp" required>
                <br><br>
                <label for="validade"><b>Data de Validade:</b></label>
                <input type="date" name="validade" id="validade" required>
                <br><br>
                <input type="submit" id="submit" name="submit" value="Adicionar Produto">
                <button type="button" id="voltar" onclick="window.location.href='hub.html'">Voltar</button>
            </form>
            <div id="response"></div>
        </fieldset>
    </div>
</body>
</html>
