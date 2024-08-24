<h2>Página Desativar</h2>
<?php
require_once('class/agendaClass.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $agenda = new agendaClase();
    $agenda->idProcedimento = $id;
    $agenda->desativar();
}
