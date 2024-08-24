<?php

require_once('conexaoBD.php');

class agendaClase{
    //ATRIBUTOS
   public $idProcedimento; 

   public $procedimento;

   public $dataProcedimento;

   public$comecoProcedimento; 

   public $fimProcedimento;

   public $valorProcedimento; 

   public $formaPagamento; 

   public $statusPagamento; 

   public $idCliente;



   
   public function __construct($id = false)
   {

       if ($id) {

           $this->idProcedimento = $id;
           $this->Carregar();
       }
   }

   //LISTAR 
   public function listarAgenda(){
    $sql = "SELECT tblprocedimento.idProcedimento, tblprocedimento.procedimento, tblprocedimento.dataProcedimento, tblprocedimento.comecoProcedimento, tblprocedimento.fimProcedimento, tblprocedimento.valorProcedimento, tblprocedimento.formaPagamento, tblprocedimento.statusPagamento, tblcliente.nomeDoCliente FROM tblprocedimento JOIN tblcliente ON tblprocedimento.idCliente = tblcliente.idCliente ORDER BY tblprocedimento.idProcedimento ASC;";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;
   }

   //CADASTRAR
   public function CadastrarAgenda(){
    $query = "INSERT INTO `tblprocedimento`(
                              `procedimento`,
                              `dataProcedimento`, 
                              `comecoProcedimento`,
                              `fimProcedimento`, 
                              `valorProcedimento`, 
                              `formaPagamento`,
                              `statusPagamento`, 
                              `idCliente`) 
VALUES ('".$this->procedimento."',
        '".$this->dataProcedimento."',
        '".$this->comecoProcedimento."',
        '".$this->fimProcedimento."',
        '".$this->valorProcedimento."',
        '".$this->formaPagamento."',
        '".$this->statusPagamento."',
        '".$this->idCliente."');
";
        
     $conn = Conexao::LigarConexao(); 
     $conn->exec($query);
    
   echo " <script>document.location='index.php?p=agendamento'</script>";
}

   //RESPONSAVEL DE PASSAR AS INFORMAÇÕES DO BANCO DE DADOS
   public function Carregar(){
    $query = "SELECT * FROM tblprocedimento WHERE idProcedimento='".$this->idProcedimento."';";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
        $this->idProcedimento = $linha['idProcedimento'];
        $this-> procedimento= $linha['procedimento'];
        $this->dataProcedimento = $linha['dataProcedimento'];
        $this->comecoProcedimento = $linha['comecoProcedimento'];
        $this->fimProcedimento = $linha['fimProcedimento'];
        $this->valorProcedimento = $linha['valorProcedimento'];            
        $this->formaPagamento = $linha['formaPagamento'];
        $this->statusPagamento = $linha['statusPagamento'];
        $this->idCliente = $linha['idCliente'];

    }
}

public function AtualizarAgenda() {
    $query = " UPDATE `tblprocedimento` SET `procedimento`= '".$this->procedimento."', 
    `dataProcedimento`= '".$this->dataProcedimento."', 
    `comecoProcedimento`= '".$this-> comecoProcedimento."',
     `fimProcedimento`= '".$this->fimProcedimento."',
      `valorProcedimento`= '".$this->valorProcedimento."', 
      `formaPagamento`= '".$this->formaPagamento."', 
      `statusPagamento`= '".$this->statusPagamento."',
       `idCliente`= '".$this->idCliente."' 
    WHERE idProcedimento = '".$this->idProcedimento."';
    ";

    echo $query; // Adicione esta linha para depurar a instrução SQL

    $conn = Conexao::LigarConexao();   
    $conn->query($query);
    echo "<script>document.location='index.php?p=agendamento'</script>";
}

public function ativar() {
    $sql = "UPDATE tblprocedimento SET statusPagamento = 'REALIZADO' WHERE idProcedimento = '" .$this->idProcedimento."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo "<script>document.location='index.php?p=agendamento'</script>";

   

  
}

public function desativar(){
    $sql = "UPDATE tblprocedimento SET statusPagamento = 'PENDENTE' WHERE idProcedimento = '".$this->idProcedimento."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo "<script>document.location='index.php?p=agendamento'</script>";

}

}