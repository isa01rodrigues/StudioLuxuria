<?php
require_once('conexaoBD.php');
class clienteClase
{
    //ATRIBUTOS
    public $idCliente;
    
     public $nomeDoCliente;	
    
     public $dataDeNasc;	
    
     public $cpfCliente;	
    
     public $telefoneWhats;	

     public $emailCliente;
    
     public $sexoCliente;	
    
     public $statusCliente;	


     //METODO DA CLASSE
     
     
    public function __construct($id = false)
    {
 
        if ($id) {
 
            $this->idCliente = $id;
            $this->Carregar();
        }
    }

    // LISTAR
    public function Listar()
    {
        $sql = "SELECT * FROM `tblcliente` WHERE statusCliente in ('ATIVO','PENDENTE','DESATIVADO') ORDER BY FIELD(statusCliente, 'ATIVO', 'PENDENTE', 'DESATIVADO') ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    

    //CADASTRAR
    public function Cadastrar(){
        $query = "INSERT INTO `tblcliente`(`nomeDoCliente`, 
        `dataDeNasc`,
         `cpfCliente`, 
         `telefoneWhats`,
          `emailCliente`,
           `sexoCliente`,
            `statusCliente`) 
        
        VALUES ('".$this->nomeDoCliente."',
        '".$this-> dataDeNasc."',
        '".$this-> cpfCliente."',
        '".$this-> telefoneWhats."',
        '".$this-> emailCliente."',
        '".$this-> sexoCliente."',
        '".$this-> statusCliente."');";
            
         $conn = Conexao::LigarConexao(); 
         $conn->exec($query);
        
       echo " <script>document.location='index.php?p=cliente'</script>";
    }
    

    //RESPONSAVEL DE PASSAR AS INFORMAÇÕES DO BANCO DE DADOS
    public function Carregar(){
        $query = "SELECT * FROM tblcliente WHERE idCliente='".$this->idCliente."'";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            $this->idCliente = $linha['idCliente'];
            $this->nomeDoCliente = $linha['nomeDoCliente'];
            $this->dataDeNasc = $linha['dataDeNasc'];
            $this->cpfCliente = $linha['cpfCliente'];
            $this->telefoneWhats = $linha['telefoneWhats'];
            $this->emailCliente = $linha['emailCliente'];            
            $this->sexoCliente = $linha['sexoCliente'];
            $this->statusCliente = $linha['statusCliente'];
        }

    }

    public function Atualizar() {
                    $query = "UPDATE `tblcliente` SET`nomeDoCliente`= '".$this->nomeDoCliente."',
            `dataDeNasc`= '".$this->dataDeNasc."',
            `cpfCliente`= '".$this->cpfCliente."',
            `emailCliente`= '".$this->emailCliente."',
            `telefoneWhats`= '".$this->telefoneWhats."',
            `sexoCliente`= '".$this->sexoCliente."',
            `statusCliente`= '".$this->statusCliente."'

            WHERE  idCliente = '".$this->idCliente."';
        ";
    
        echo $query; // Adicione esta linha para depurar a instrução SQL
    
        $conn = Conexao::LigarConexao();   
        $conn->query($query);
        echo "<script>document.location='index.php?p=cliente'</script>";
    }
    

    public function ativar() {
        $sql = "UPDATE tblcliente SET statusCliente = 'Ativo' WHERE idCliente = '" . $this->idCliente ."';";
        $conn = Conexao::LigarConexao();
        $conn->exec($sql);
    
        echo "<script>document.location='index.php?p=cliente'</script>";
       

      
    }
   
    public function desativar(){
        $sql = "UPDATE tblcliente SET statusCliente = 'DESATIVADO' WHERE idCliente = '" . $this->idCliente ."';";
        $conn = Conexao::LigarConexao();
        $conn->exec($sql);
    
        echo "<script>document.location='index.php?p=cliente'</script>";
    }

       
    
}
