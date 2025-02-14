<?php
namespace Rodrigo\OopPhp\Enums;

class Produto
{
    public function __construct(
        public string $nome,
        public int $valor,
        public EstadoPedido $estado

    ) {}

    public function verificarEstado()
    {
        // ----------------- // -----------------
        // Verificando pelo Objeto do EstadoPedido
        // ----------------- // -----------------

        // switch($this->estado){
        //     case EstadoPedido::EsperaDePagamento:
        //         echo "Esperando o Pagamento...";
        //         break;
        //     case EstadoPedido::NaDistribuidora:
        //         echo "Produto na distribuidora, aguarde...";
        //         break;
        //     case EstadoPedido::EmViagem:
        //         echo "Produto a caminho, aguarde...";
        //         break;
        //     case EstadoPedido::Entregue:
        //         echo "Produto entregue, verifique se realmente veio nos conformes...";
        //         break;

        //     default: echo "Estado Inválido";
        // }

        // ----------------- // -----------------
        // Verificando pelo Nome do Objeto do EstadoPedido
        // ----------------- // -----------------

        switch ($this->estado->name) {
            case 'EsperaDePagamento':
                echo "Esperando o Pagamento..." . PHP_EOL;
                break;
            case 'NaDistribuidora':
                echo "Produto na distribuidora, aguarde..."  . PHP_EOL;
                break;
            case 'EmViagem':
                echo "Produto a caminho, aguarde..."  . PHP_EOL;
                break;
            case 'Entregue':
                echo "Produto entregue, verifique se realmente veio nos conformes..."  . PHP_EOL;
                break;

            default:echo "Estado Inválido" . PHP_EOL;
        }
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(EstadoPedido $estado)
    {
        $this->estado = $estado;
    }

    public function pagar(int $dinheiro){
        if($dinheiro >= $this->valor){
            echo "Pago com sucesso... Produto indo para a distribuidora." . PHP_EOL;
            $this->estado = EstadoPedido::NaDistribuidora;
            return $this;
        }
    }
}
