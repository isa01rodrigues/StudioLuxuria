<?php

//CONEXÃO COM O BANCO DE DADOS 
try {
    $conn = new PDO('mysql:dbname=luxuriastudio;host=localhost', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

// CONSULTA DO SQL AGENDA
$sql = "SELECT tblprocedimento.procedimento, tblprocedimento.dataProcedimento, tblprocedimento.comecoProcedimento, tblprocedimento.fimProcedimento, tblprocedimento.valorProcedimento, tblcliente.nomeDoCliente 
        FROM tblprocedimento 
        JOIN tblcliente ON tblprocedimento.idCliente = tblcliente.idCliente 
        ORDER BY tblprocedimento.idProcedimento ASC";

$stmt = $conn->query($sql);
$procedimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

try {
    
    // Consulta SQL
    $sql = "SELECT 
                COUNT(*) AS total,
                COUNT(CASE WHEN sexoCliente = 'FEMININO' THEN 1 END) AS feminino,
                COUNT(CASE WHEN sexoCliente = 'MASCULINO' THEN 1 END) AS masculino
            FROM tblcliente";

    // Executar a Consulta
    $stmt = $conn->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Luxuria</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/reset.css">

    <link rel="stylesheet" href="../css/stely.css">
    <link rel="stylesheet" href="css/responsiv.css">
</head>

<body>


<section>
    <div class="box-painel">

        <!----LISTA DOS CLIENTES--->
        <div class="box-clientes">
            
            <table>
                    <tr>
                        <th>Total de Clientes</th>
                        <th>Clientes Femininos</th>
                        <th>Clientes Masculinos</th>
                    </tr>
                    <tr>
                        <td><?php echo htmlspecialchars($result['total']); ?></td>
                        <td><?php echo htmlspecialchars($result['feminino']); ?></td>
                        <td><?php echo htmlspecialchars($result['masculino']); ?></td>
                    </tr>
            </table>

        </div>
        <!----LISTA DE AGENDAMENTO--->
        <div class="box-agenda">
        <table>
            <tr>
                <th>Procedimento</th>
                <th>Data</th>
                <th>Início</th>
                <th>Fim</th>
                <th>Valor</th>
                <th>Cliente</th>
            </tr>
            <?php
            if (!empty($procedimentos)) {
                // Saída de dados de cada linha
                foreach ($procedimentos as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["procedimento"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["dataProcedimento"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["comecoProcedimento"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["fimProcedimento"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["valorProcedimento"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["nomeDoCliente"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum resultado encontrado</td></tr>";
            }
            ?>
        </table>
        </div>

    </div>
</section>
</body>