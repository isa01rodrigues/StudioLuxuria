<?php 

class Conexao{
    public static function LigarConexao(){
        $conn = new PDO('mysql:dbname=luxuriastudio;host=localhost', 'root', '');
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}

?>