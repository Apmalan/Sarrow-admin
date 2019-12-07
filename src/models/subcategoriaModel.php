<?php
require_once realpath(dirname(__FILE__,2).'/config/config.php');
class subcategoriaModel {
    public static function listarTodos(){
        
        $conexao = Database::getConection();
        $sql = "SELECT * FROM subcategorias";
        
        $resultado = $conexao->query($sql) or 
        die ("Erro ao listar todas as subcategorias").mysql_error();
        if($resultado){
            return $resultado;
        }else{
            return false;
        }
    }
    public function incluir($dados){
        var_dump($dados);
        $conexao = Database::getConection();

        $nome = $dados['txtNomesubcategoria'];
        $novo = $conexao->prepare("INSERT INTO subcategorias (nome) VALUES (?)");
        //Mescla o valor da váriavel lá no comando SQL Prepare onde você colocou
        $novo->bind_param('s',$nome);
        //Grava no banco
        $novo->execute();
        if($novo->affected_rows > 0){
            //$id = mysqli_stmt_insert_id($novo);
            header('Location: subcategorias.php');
            
        }else {
            return "Erro ao gravar no banco de dados";
        }
    }
    public function alterar($dados){
        var_dump($dados);
        $conexao = Database::getConection();
    
        $nome = $dados['txtAlterarNomesubcategoria'];
        $novo = $conexao->prepare("UPDATE `subcategorias` SET `nome`=(?)");
        //Mescla o valor da váriavel lá no comando SQL Prepare onde você colocou
        $novo->bind_param('s',$nome);
        //Grava no banco
        $novo->execute();
        if($novo->affected_rows > 0){
            //$id = mysqli_stmt_insert_id($novo);
            header("Location: subcategorias.php");
            
        }else {
            return "Erro ao gravar no banco de dados";
        }
    }

    public function exluir($dados){
        var_dump($dados);
        $conexao = Database::getConection();
    
        $nome = $dados['txtDeletarsubcategoria'];
        $novo = $conexao->prepare("DELETE `subcategorias` SET `nome`=(?)");
        //Mescla o valor da váriavel lá no comando SQL Prepare onde você colocou
        $novo->bind_param('s',$nome);
        //Grava no banco
        $novo->execute();
        if($novo->affected_rows > 0){
            //$id = mysqli_stmt_insert_id($novo);
            header("Location: categorias.php");
            
        }else {
            return "Erro ao gravar no banco de dados";
        }
    }

    }




//Nas classes de model você criar esse IF que servira como hub direcionando
//um post ou get para uma determinada function
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // aqui é onde vai decorrer a chamada se houver um *request* POST    
    $subcategorias = new subcategoriaModel;
    var_dump($_POST);
    $acao = ($_POST['acao']);
     if($acao == "insert"){
         print_r("entrou insert");
         $subcategorias->incluir($_POST);                
     }if($acao == "update"){
         print_r("entrou update");
        $subcategorias->alterar($_POST);
 }if($acao == "delete"){
    print_r("entrou delete");
   $subcategorias->deletar($_POST);
}
}