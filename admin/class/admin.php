<?php

require_once('conexaoBD.php');

class AdiminClase{
    public $idAdmin;    
    public $emailAdmi; 
    public $senhaAdmin;

}



if(isset($_POST['email'])) 
{
    // Instancia um novo objeto da classe InstrutorClass para manipular operações relacionadas aos instrutores
    $Adminacess = new  AdiminClase();

     // Extrai o valor do campo 'email'e'password' enviado pelo formulário e o armazena na variável $emailLogin
    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['password'];

    // Define os valores do email e senha no objeto $funcionarios para  verificação
    $Adminacess->$emailAdmi = $emailLogin;
    $Adminacess->$senhaAdmin = $senhaLogin;

    // Chama o método verificarLogin() para vereficação
    if($idAdmin = $Adminacess->verificarLogin()) {
        session_start();
         // Armazena o ID do funcionário na variável de sessão $_SESSION['idAdmin']
        $_SESSION['idAdmin'] = $idAdmin;
        echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso', 'idAdmin' => $idAdmin]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Login não realizado. Email ou senha inválidos']);
    }
}
