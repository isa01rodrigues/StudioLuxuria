<h2>Página Desativar</h2>
<?php
require_once('class/clienteClass.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $cliente = new clienteClase();
    $cliente->idCliente = $id;
    $cliente->ativar();
}
