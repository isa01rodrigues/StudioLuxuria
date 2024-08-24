<h2>Sua agenda</h2>
<?php
$id = $_GET["id"];

require_once('class/agendaClass.php');

$agenda = new agendaClase($id);

if (isset($_POST['procedimento'])) {
    $procedimento = $_POST['procedimento'];
    $dataProcedimento = $_POST['dataProcedimento'];
    $comecoProcedimento = $_POST['comecoProcedimento'];
    $fimProcedimento = $_POST['fimProcedimento']; 
    $valorProcedimento = $_POST['valorProcedimento'];
    $formaPagamento = $_POST['formaPagamento'];
    $statusPagamento = $_POST['statusPagamento'];
    $idCliente = $_POST['idCliente'];




    $agenda->procedimento = $procedimento;
    $agenda->dataProcedimento = $dataProcedimento;
    $agenda->comecoProcedimento = $comecoProcedimento;
    $agenda->fimProcedimento = $fimProcedimento;
    $agenda->valorProcedimento = $valorProcedimento;
    $agenda->formaPagamento = $formaPagamento; 
    $agenda->statusPagamento = $statusPagamento; 
    $agenda->idCliente = $idCliente;

    // Chamar o método para cadastrar o cliente
    $agenda->AtualizarAgenda();

    // Debug para verificar os dados enviados
    var_dump($_POST);
}
?>

<section>
<form class="formulario-CAD" action="index.php?p=agendamento&a=atualizar&id=<?php echo isset($agenda->idProcedimento) ?>" method="POST" enctype="multipart/form-data">



    <div class="formulario-Cadastrar site">
     


        <div class="elementoForm">
            <label for="procedimento" class="form-label">Nome do Procedimento:</label>
            <input type="text" class="form" name="procedimento" id="procedimento" 
                 value="<?php echo $agenda->procedimento; ?>"
            require placeholder="Nome do Procedimento">
        </div>

        <div class="elementoForm">
            <label for="dataProcedimento" class="form-label">Data:</label>
            <input type="date" class="form" name="dataProcedimento" id="dataProcedimento"
            value="<?php echo $agenda->dataProcedimento; ?>" 
            require placeholder="Infome a data ">
        </div>

        <div class="elementoForm">
            <label for="comecoProcedimento" class="form-label">Começo - Horas:</label>
            <input type="time" class="form" name="comecoProcedimento" id="comecoProcedimento"
            value="<?php echo $agenda->comecoProcedimento; ?>" 
            require placeholder="Horario marcado ">
        </div>

        
        <div class="elementoForm">
           <label for="fimProcedimento" class="form-label">Fim:</label>
           <input type="time" class="form" name="fimProcedimento" id="fimProcedimento" 
           value="<?php echo $agenda->fimProcedimento; ?>"
           required placeholder="Horario">
        </div>

        
        <div class="elementoForm">
           <label for="valorProcedimento" class="form-label">Preço:</label>
           <input type="number" class="form" name="valorProcedimento" id="valorProcedimento"
           value="<?php echo $agenda->valorProcedimento; ?>"
           required placeholder="Preço do Procedimento">
        </div>

        
        <div class="elementoForm">
            <label for="formaPagamento" class="form-label" name="formaPagamento" 
            id="formaPagamento" value="<?php echo $agenda->formaPagamento; ?>" require>
                Forma de Pagamento:</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="formaPagamento" id="formaPagamento"
            value="<?php echo $agenda->formaPagamento; ?>"
            >
                <option selected>Pagamento</option>
                <option>Cartão de Credito</option>
                <option> Cartão de Débito</option>
                <option>Pix</option>
                <option>Boleto</option>
                
                
            </select>
        </div>
        
        <div class="elementoForm">
            <label for="statusPagamento" class="form-label" name="statusPagamento" id="statusPagamento" 
             value="<?php echo $agenda->statusPagamento; ?>"
            require>
                Status do Pagamento</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="statusPagamento" id="statusPagamento"
            value="<?php echo $agenda->statusPagamento; ?>" >

                <option selected>Status</option>
                <option>REALIZADO</option>
                <option>PENDENTE</option>
                <option>DESATIVADO</option>
                
            </select>
        </div>

        
        <div class="elementoForm">
           <label for="idCliente" class="form-label">ID do Cliente:</label>
           <input type="number" class="form" name="idCliente" id="idCliente"
            required placeholder="Preço do Procedimento">
        </div>

        <div class="BTN">
            <button type="submit" class="btn btn-primary">Novo Cadastro</button>
        </div>


    </div>



</form>

</section>

</section>

<section class="fundo site">