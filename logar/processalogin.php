<?php
require_once '../Conexao/conect.php';



if(!empty($_POST)){
    session_start();
    try{
        $sql="SELECT nome,email,data,senha FROM usuarios WHERE email= :email AND senha= :senha";
        
        $stmt=$pdo->prepare($sql);
        
        $dados=array(
            ':email'=> $_POST['email'],
            ':senha'=> $_POST['senha'],
        );
        
        $stmt->execute($dados);
        
        $result=$stmt->fetchall();
        
        if($stmt->rowCount()==1){
            
            $result=$result[0];
            $_SESSION['nome']=$result['nome'];
            $_SESSION['email']=$result['email']; 
            $_SESSION['data']=$result['data'];
            $_SESSION['senha']=$result['senha']; 
            
            header("Location:logado.php");
        }
        
    } catch (Exception $ex) {
        echo 'não tem esse registro,se cadastre';
    }
}

?>