<?php

echo"Verifique se os dados de cadastro conferem";

if(isset($_REQUEST['cli'])){
    echo "<br>CPF: ".$_REQUEST['cpf'];
    echo "<br>Nome: ".$_REQUEST['nome'];
    echo "<br>Sobrenome: ".$_REQUEST['lastn'];
    echo "<br>Endereço: ".$_REQUEST['add'];
    echo "<br>Cidade: ".$_REQUEST['city'];
    echo "<br>Estado: ".$_REQUEST['state'];
    echo "<br>Pais: ".$_REQUEST['country'];
} else {   
    echo "<br>ID: ".$_REQUEST['id'];
    echo "<br>Nome: ".$_REQUEST['nome'];
    echo "<br>Quantidade: ".$_REQUEST['qtde'];
    echo "<br>Periculosidade: ".$_REQUEST['warn'];
}

echo "<br><button>Confirmar</button>"

?>