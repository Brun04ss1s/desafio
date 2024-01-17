<?php
Class BD{

    //Funcção que será chamada pelo setProduto para incluir no banco de dados.
    public function insertBD($nome, $preco, $quantidade){
        $hostname = 'localhost';
        $bancodedados = 'desafio_tecnico';
        $usuario = 'root';
        $senha = '';

        $mysqli = new \mysqli($hostname, $usuario, $senha, $bancodedados);

        if ($mysqli->connect_errno) {
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
        }
        else{
            echo "Conected.";
        }
        $sql = "INSERT INTO produtos (nome_produto, preco_produto, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
        if ($mysqli->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    //Funcção que será chamada no método setVenda.
    public function atualizarBD($nome, $quantidade){
        include_once("Vendas.php");
        $venda = new Venda;

        $hostname = 'localhost';
        $bancodedados = 'desafio_tecnico';
        $usuario = 'root';
        $senha = '';

        $mysqli = new \mysqli($hostname, $usuario, $senha, $bancodedados);

        if ($mysqli->connect_errno) {
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
        }
        else{
            echo "Conected.";
        }
        $sql = "SELECT * FROM produtos WHERE nome_produto = '$nome'";

        $resultado = $mysqli->query($sql);

        if($resultado -> num_rows > 0 ){

            while($user_data = mysqli_fetch_assoc($resultado)){

              $quantidade_nova = $user_data['quantidade'];
              $venda -> setQuantidade($quantidade_nova);
              if($quantidade_nova > 0){
                    $quantidade = $quantidade_nova - $quantidade;
                    $sqlUpdate = "UPDATE produtos SET nome_produto = '$nome', quantidade = '$quantidade'";
                    $mysqli->query($sqlUpdate);
                    header('Location: index.php');
              }
            }
        }
        
    }
}