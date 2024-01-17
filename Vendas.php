<?php
include_once("Produtos.php");

class Venda extends Produto{
    
    public function setVenda($nome, $quantidade, $BD){
        
        $this-> nome = $nome;
        $BD->atualizarBD($nome, $quantidade);

    }
    public function setQuantidade($quantidade){
        $this-> quantidade = $quantidade;
    }
    public function getVendas(){

        if($this->nome != null){
            echo "Nome: "+$this->nome+"\nPreco: "+$this->preco+"\nQuantidade: "+$this->quantidade;
        }
        else{
            echo "Nenhuma venda registrada.";
        }

    }
}