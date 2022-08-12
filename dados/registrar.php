<?php
   class registrar extends conect {
    
    public static function registro () {
    
    try { 
        $sql="INSERT INTO usuarios (nome,email,data,senha) VALUES (:nome,:email,:data,:senha)";
                   
        $stmt=conect::conexao();
        $reit=$stmt->prepare($sql);
   
   
        $dados=array(
            ':nome'=> filter_input(INPUT_POST,'nome'),
            ':email'=> filter_input(INPUT_POST,'email'),
            ':data'=> filter_input(INPUT_POST,'data'),
            ':senha'=> filter_input(INPUT_POST,'senha'),
        );     
        

        if($reit->execute($dados)){ 
            header("Location: html.php?msgSucesso=Cadastro realizado com sucesso!");
        }
      
        //echo '<pre>';
        //print_r(filter_input_array(INPUT_POST));
        //echo '</pre>';
        
        }
        catch (PDOException) {
            echo 'nao vai registrar';
            header("Location:html.php?msgErro=Erro ao cadastrar.");
    
            
        }
    return $stmt;  
  }
  
   
  }