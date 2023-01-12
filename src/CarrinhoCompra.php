<?php
    namespace src;

    class CarrinhoCompra{
        // Atributos
        private $itens;
        private $status;
        private $valor_total;

        // Métodos
        public function __construct()
        {
            $this->itens = array();
            $this->status = 'aberto';
            $this->valor_total = 0.00; 
        }

        public function itemValido(string $descricao, float $valor){
            if ($descricao == '' || $valor <= 0){
                return false;
            }

            return true;
        }

        public function adicionarItem(string $descricao, float $valor){
            if ($this->itemValido($descricao, $valor)){
                array_push($this->itens, array(
                    'descricao' => $descricao,
                    'valor' => $valor
                ));

                $this->valor_total += $valor;
            }
        }

        public function finalizarPedido(){
            if ($this->getItens()){
                $this->enviarEmail();
                $this->status = 'confirmado';
                return true;
            }

            return false;
        }

        public function enviarEmail(){
            echo "<br/>... Email Enviado ...";
        }

        public function getItens(){
            return $this->itens;
        }

        public function getValorTotal(){
            return $this->valor_total;
        }

        public function getStatus(){
            return $this->status;
        }
    }