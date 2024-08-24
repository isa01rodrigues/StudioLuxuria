<h2>Cadastre um novo Cliente</h2>
<?php

if (isset($_POST['nomeDoCliente'])) {
    $nomeDoCliente = $_POST['nomeDoCliente'];
    $dataDeNasc = $_POST['dataDeNasc'];
    $cpfCliente = $_POST['cpfCliente'];
    $telefoneWhats = $_POST['telefoneWhats']; 
    $emailCliente = $_POST['emailCliente'];
    $sexoCliente = $_POST['sexoCliente'];
    $statusCliente = $_POST['statusCliente'];

    // Incluir a classe do cliente
    require_once('class/clienteClass.php');

    // Criar uma instância do cliente
    $cliente = new clienteClase();

    // Definir as propriedades do cliente
    $cliente->nomeDoCliente = $nomeDoCliente;
    $cliente->dataDeNasc = $dataDeNasc;
    $cliente->cpfCliente = $cpfCliente;
    $cliente->telefoneWhats = $telefoneWhats;
    $cliente->emailCliente = $emailCliente;
    $cliente->sexoCliente = $sexoCliente; 
    $cliente->statusCliente = $statusCliente;

    // Chamar o método para cadastrar o cliente
    $cliente->Cadastrar();

    // Debug para verificar os dados enviados
    var_dump($_POST);
}
?>


<section>
<form class="formulario-CAD" action="index.php?p=cliente&c=cadastrar" method="POST" enctype="multipart/form-data">



    <div class="formulario-Cadastrar site">
     


        <div class="elementoForm">
            <label for="nomeDoCliente" class="form-label">Nome Completo:</label>
            <input type="text" class="form" name="nomeDoCliente" id="nomeDoCliente" require placeholder="Nome do Cliente">
        </div>

        <div class="elementoForm">
            <label for="dataDeNasc" class="form-label">Data de Nascimento:</label>
            <input type="date" class="form" name="dataDeNasc" id="dataDeNasc" require placeholder="Infome sua Data de Nascimento">
        </div>

        <div class="elementoForm">
            <label for="cpfCliente" class="form-label">CPF Cliente:</label>
            <input type="text" class="form" name="cpfCliente" id="cpfCliente" require placeholder="Infome o seu CPF">
        </div>

        
        <div class="elementoForm">
           <label for="telefoneWhats" class="form-label">Telefone:</label>
           <input type="text" class="form" name="telefoneWhats" id="telefoneWhats" required placeholder="Informe o seu telefone">
        </div>

        
        <div class="elementoForm">
           <label for="emailCliente" class="form-label">E-mail:</label>
           <input type="e-mail" class="form" name="emailCliente" id="emailCliente" required placeholder="Informe o seu e-mail">
        </div>

      

        <div class="elementoForm">
            <label for="sexoCliente" class="form-label" name="sexoCliente" id="sexoCliente" require>
                Sexo do Cliente</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="sexoCliente" id="sexoCliente">
                <option selected>Status</option>
                <option>FEMININO</option>
                <option>MASCULINO</option>
             
                
            </select>
        </div> 
        
        
        <div class="elementoForm">
            <label for="statusCliente" class="form-label" name="statusCliente" id="statusCliente" require>
                Status do Cliente</label>
            <!--  <input type="text" class="form-control" name="gpmuscular" id="gpmuscular" require> -->

            <select id="inputState" class="form-control" name="statusCliente" id="statusCliente">
                <option selected>Status</option>
                <option>ATIVO</option>
                <option>PENDENTE</option>
                <option>DESATIVADO</option>
                
            </select>
        </div>

        <div class="BTN">
            <button type="submit" class="btn btn-primary">Novo Cadastro</button>
        </div>


    </div>



</form>

</section>

</section>

<section class="fundo site">