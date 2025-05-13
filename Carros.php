<?php

class Carros{

    public $modelo;
    public $descricao;
    public $cor;
    public $portas;
    public $rodas;
    public $motor;
    public $preco;
    public $ano;
    public $placa;
    public $quilometragem;

    public function aquisicao(){
        echo " o cliente fez uma aquisição";
    }

    public function troca(){
        echo "o cliente solicitou uma troca de veiculos";

}
}