<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #f4f4f4;
        }
    </style>
    <title>Vender Produto</title>

</head>

<body>
    <div class="box">
        <form method="POST" action="vender.php">
            <fieldset>
                <legend align='center'><b>Vender Produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                </div>
                <br><br><br>
                <br><br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
<a style="text-decoration: none;" href="index.php" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg></a>
</html>

<?php
include_once("Vendas.php");
include ("BD.php");
if (isset($_POST['submit'])) {
    $BD = new BD;
    $vendas = new Venda;
    $data = array(
    $nome = $_POST['nome'],
    $quantidade = $_POST['quantidade']
    );

    $vendas->setVenda($nome,$quantidade, $BD);
}

?>

</html>