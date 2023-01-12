<?php
    require __DIR__."/vendor/autoload.php";

    use src\CarrinhoCompra;
    
    echo "<h3/>Sem SRP</h3>";
    $carrinho = new CarrinhoCompra();
    
    print_r($carrinho->getItens());

    $carrinho->adicionarItem('Bicicleta', 750.00);
    $carrinho->adicionarItem('Videogame', 5001,99);
    $carrinho->adicionarItem('Geladeira', 7502.10);

    echo "<br/>";
    print_r($carrinho->getItens());
    
    echo "<br/>";
    print_r("Valor total: ".$carrinho->getValorTotal());

    echo "<br/>";
    print_r("Status: ".$carrinho->getStatus());

    if ($carrinho->finalizarPedido()){
        echo "<br/>... Pedido Finalizado ...";
    }
    else{
        echo "<br/>... Não foi possível finalizar o pedido ...";
    }

    echo "<br/>";
    print_r("Status: ".$carrinho->getStatus());