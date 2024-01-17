<?php

class Produto{
    protected $nome;
    protected $preco;
    protected $quantidade;

    public function setProduto($data, $BD){
        $insert = $BD;
        $this->nome = $data[0];
        $this->preco = $data[1];
        $this->quantidade = $data[2];
        $insert->insertBD($this->nome, $this->preco, $this->quantidade);
    }
    
    public function getProduto(){

        if($this->nome != null){
            echo "Nome: "+$this->nome+"\nPreco: "+$this->preco+"\nQuantidade: "+$this->quantidade;
        }
        else{
            echo "Nenhum produto cadastrado atualmente";
        }
    }
    
}

