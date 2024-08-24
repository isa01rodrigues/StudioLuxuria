<?php

$id = $_GET["id"];

require_once('class/clienteClass.php');
$cliente = new clienteClase($id);

if (isset($_POST['nomeDoCliente'])) {
    $nomeDoCliente = $_POST['nomeDoCliente'];
    $dataDeNasc = $_POST['dataDeNasc'];
    $cpfCliente = $_POST['cpfCliente'];
    $telefoneWhats = $_POST['telefoneWhats'];
    $emailCliente = $_POST['emailCliente']; 
    $sexoCliente = $_POST['sexoCliente'];
    $statusCliente = $_POST['statusCliente'];
    
    // Defina propriedades no objeto cliente
    $cliente->nomeDoCliente = $nomeDoCliente;
    $cliente->dataDeNasc = $dataDeNasc;
    $cliente->cpfCliente = $cpfCliente;
    $cliente->telefoneWhats = $telefoneWhats;
    $cliente->emailCliente = $emailCliente;
    $cliente->sexoCliente = $sexoCliente;
    $cliente->statusCliente = $statusCliente;
    
    $cliente->Atualizar();
}
?>

<section>
    <form class="formulario-CAD" action="index.php?p=cliente&c=atualizar&id=<?php echo $cliente->idCliente; ?>" method="POST" enctype="multipart/form-data">
        <div class="formulario-Cadastrar site">
            <div class="elementoForm">
                <label for="nomeDoCliente" class="form-label">Nome Completo:</label>
                <input type="text" class="form" name="nomeDoCliente" id="nomeDoCliente" value="<?php echo $cliente->nomeDoCliente; ?>" required placeholder="Nome do Cliente">
            </div>

            <div class="elementoForm">
                <label for="dataDeNasc" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form" name="dataDeNasc" id="dataDeNasc" value="<?php echo $cliente->dataDeNasc; ?>" required placeholder="Informe sua Data de Nascimento">
            </div>

            <div class="elementoForm">
                <label for="cpfCliente" class="form-label">CPF Cliente:</label>
                <input type="text" class="form" name="cpfCliente" id="cpfCliente" value="<?php echo $cliente->cpfCliente; ?>" required placeholder="Informe o seu CPF">
            </div>

            <div class="elementoForm">
                <label for="telefoneWhats" class="form-label">Telefone:</label>
                <input type="text" class="form" name="telefoneWhats" id="telefoneWhats" value="<?php echo $cliente->telefoneWhats; ?>" required placeholder="Informe o seu telefone">
            </div>

            <div class="elementoForm">
                <label for="emailCliente" class="form-label">E-mail:</label>
                <input type="email" class="form" name="emailCliente" id="emailCliente" value="<?php echo $cliente->emailCliente; ?>" required placeholder="Informe o seu e-mail">
            </div>

            <div class="elementoForm">
                <label for="sexoCliente" class="form-label">Sexo:</label>
                <input type="text" class="form" name="sexoCliente" id="sexoCliente" value="<?php echo $cliente->sexoCliente; ?>" required placeholder="Informe o sexo do Cliente">
            </div>

            <div class="elementoForm">
                <label for="statusCliente" class="form-label">Status do Cliente</label>
                <select id="inputState" class="form-control" name="statusCliente" required>
                    <option value="ATIVO" <?php if ($cliente->statusCliente == "ATIVO") echo 'selected'; ?>>ATIVO</option>
                    <option value="PENDENTE" <?php if ($cliente->statusCliente == "PENDENTE") echo 'selected'; ?>>PENDENTE</option>
                    <option value="DESATIVADO" <?php if ($cliente->statusCliente == "DESATIVADO") echo 'selected'; ?>>DESATIVADO</option>
                </select>
            </div>

            <div class="BTN">
                <button type="submit" class="btn btn-primary">Atualizar Cadastro</button>
            </div>
        </div>
    </form>
</section>
<section class="fundo site"></section>
