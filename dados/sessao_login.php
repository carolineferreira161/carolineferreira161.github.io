
<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
        
     $endereco = 'localhost';
     $banco = 'conection';
     $usuario = 'postgres';
     $senhas = 'bidubidu';

     print_r($_POST['email']);
     print_r($_POST['senha']);
   
   
    include_once ('conect.php');
     $email=$_POST['email'];
     $senha=$_POST['senha'];

    $teste=new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha);

     $mysql="SELECT * FROM usuarios WHERE email='$email' and senha = '$senha'";

     $result=$teste->prepare($mysql);
     $result->execute();
   
   if($result->execute()){
        echo 'SIM LOGIN!';
    }else{
        echo 'NAO LOGIN!';
    }
      echo 'acessou a conta';
    
}else{
    echo'não acessou o cliente';

}



 