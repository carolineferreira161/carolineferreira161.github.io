<?php
session_start();
$db = new PDO("pgsql:host=localhost;port=5432;dbname=conection;user=postgres;password=bidubidu");
if (filter_input(INPUT_POST, 'submit')) {


    try {
        $sql = "SELECT nome, email, data, senha FROM usuarios WHERE email= :email AND senha= :senha";

        $stmt = $db->prepare($sql);

       

        $stmt->execute(array(
            ':email' => filter_input(INPUT_POST, 'email'),
            ':senha' => filter_input(INPUT_POST, 'senha'),
        ));

        $result = $stmt->fetchAll();

         if($stmt->rowCount()==1){
            
             //print_r($result);
             
            $result=$result[0];
            $_SESSION['nome']=$result['nome'];
            $_SESSION['email']=$result['email']; 
            $_SESSION['data']=$result['data'];
            $_SESSION['senha']=$result['senha']; 
            
            header("Location:logado.php");
            
            
        }else{
            session_destroy();
            header("Location: ../html.php?msgNão achamos seu cadastro, por favor tente novamente ou se cadastre");
        }
        
    } catch (Exception $e) {
        die($e->getMessage());
        echo 'Houve algum erro, tente novamente';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <style>
            body{  /*tela de fundo*/

                background-image: url("../images/the-mandalorian-5k-1920x1080_477555-mm-90.jpg");
                background-repeat:no-repeat;
                background-size: cover;
                background-position: top;
                color: white;
                min-height:400px;
                min-width: 600px;
                width: auto;
                height: auto;


            }


            .inicio{   /*elementos do inicio para clicar redirecionar*/
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:15px;
                color: white;
                text-decoration: none;
                cursor:pointer;



            }

            div.iridium{
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:16px;
                color: white;
                top:5%;
                min-width: 100px;
                max-width: 1400px;

                margin: 10px auto 10px auto;

                max-height: 200px;
                min-height:150px;

                width: auto;
                height: auto;


            }


            nav#menu ul{   /*elementos do inicio para clicar redirecionar*/
                list-style: none;
                position: absolute;
                left:30%;
                top:20%;
                min-width: 450px;

                min-height: 30px;
                height: auto;
                width: auto;
                margin-left: 10px;
                margin-right: 10px;



            }
            nav#menu li{  /*elementos do inicio para clicar redirecionar*/
                padding: 15px;
                display: inline-block;

            }

            nav#menu li:hover{ /*escrita do idivnicio para clicar redirecionar*/
                background-color: pink;
                transition-delay: 0s;

            }





            .icone{    /*icone do amog us preto*/
                border-radius: 3%;
                position: absolute;
                left:5%;
                top :10%;
                border: 3px solid black;

            }
            .among{    /*escrita do amongs us*/
                position: absolute;
                left:20%;
                top :35%;

            }
            .registro{  /*icone para se registro*/
                position: absolute;
                left:85%;
                top :25%;
                text-decoration: none;
                padding-left: 10px;
            }
            .registre-se{  /*icone para se registro*/
                position: absolute;
                left:86%;
                top :60%;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:15px;
                color: red;
                text-decoration: none;


            }
            .suporte{    /*icone do amog us preto*/
                border-radius: 3%;
                position: absolute;
                left:78%;
                top :30%;
                width: 53px;
                border: 3px solid black;

            }






            nav#cabeçalho{
                border-bottom: 2px black solid;
                height: 100px;
            }
            nav#cabeçalho li{  /*elementos do inicio para clicar redirecionar*/
                padding: 15px;
                display: inline-block;
            }

            nav#cabeçalho li:hover{ /*escrita do idivnicio para clicar redirecionar*/
                background-color: pink;
                transition-delay: 0s;
            }

            #selct{
                top:10px;
                width: 100%;
                height: 100px;
                text-align: center;
                background-color: #9f7187;
            }
            .link{
                position: relative;
                color: white;
                text-decoration: none;
            }
            footer.rere{

                text-align: center;
                position: relative;
                bottom: 0;
                border-top: 1px solid black;
            }
            .box{
                font-family: georgia,sans-serif,serif;
                width: 280px;
                height: 330px;
                background-color: #e4e2e2;
                position: relative;
                margin: 10px auto 100px auto;
                border-radius: 5%;
                border: 3px solid #999999;
                color: black;
                text-align: center;
                background-color:rgb(56, 54, 60,0.4);
                top:8%;

            }
            h2{
                font-family: georgia,sans-serif,serif;
                margin-bottom: 0px;
            }


            .caixas{
                font-family: georgia,sans-serif,serif;
                width: 220px;
                border-radius: 5px;
                text-align: center;
                margin: 0px;
                border-color: black;

            }

            .inputsubmit{
                font-family: georgia,sans-serif,serif;
                font-size: 14px;
                padding: 10px;
                border-radius: 10px;
                width: 150px;
                border-radius: 5px;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 10px;
                border-color: black;
                background-color: rgb(173,56,160,0.4);
            }
            .inputsubmit:hover{
                background-color: rgb(235,119,222,0.4);
                cursor: pointer;
            }
            .login{
                font-family: georgia,sans-serif,serif;
                font-size: 14px;
                padding: 10px;
                border-radius: 10px;
                width: 80px;
                border-radius: 5px;
                text-align: center;
                margin-bottom: 10px;
                border-color: black;
                background-color: rgb(173,56,160,0.4);
            }
            .login:hover{
                background-color: rgb(235,119,222,0.4);
                cursor: pointer;
            }
            @media(min-width:200px)and (max-width:1100px){
                nav#menu ul{
                    left:7%;
                    top:100%;
                }
                .suporte{
                    left:65%;
                    top :30%;
                }
                .registro{
                    left:80%;
                    top :25%;
                }
                .registre-se{
                    left:83%;
                    top :60%;
                }
                .box{
                    margin: 80px auto 100px auto;
                }


            }
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Among Us</title>


    </head>
    <body>
        <div class="iridium">
            <nav id='menu'>
                <ul>
                    <li><a class="inicio" href="../html.php" >INÍCIO</a></li>
                    <li class="inicio">|</li>
                    <li><a class="inicio" href="../moletons.php"target="_self">PRODUTOS</a></li>  
                    <li class="inicio">|</li>
                    <li><a class="inicio" href="../sobrenos.php"target="_self">SOBRE NÓS</a></li>
                </ul>

            </nav>
            <a href="../html.php"> <img src="../images/vermelho" width="70" class="icone"/></a> 

            <a href="../html.php"> <img src="../images/Among-Us-–-Logo-PNG.png" width="140" class="among"/></a> 

            <a class="registro" href="../registro.php">
                <img src="../images/icone.png" width="70" height="70" class="registro"
                     />

            </a>
            <a href="../registro.php" class="registre-se" ><p> Registre-se</p></a>

            <img src="../images/sup.png" width="70" height="50" class="suporte"/> 

        </div> 


        <div class="box">
            <h2>LOGIN</h2><br>
            <form action="login.php" method="POST" >

                <p>DIGITE SEU E-MAIL:</p>  <input class="caixas"   type="email" name="email" placeholder="email">

                <p>DIGITE SUA SENHA:</p> <input class="caixas"  type="password" name="senha" placeholder="senha"><br><br><br>

                <input type="submit" name ="submit" class="inputsubmit" value="ENTRAR">

                <a href="../registro.php"> <input class="login" value="VOLTAR"></a>

            </form>
        </div>


        <footer class='rere'><p>©Among Us 2022-2022 Todos os direitos reservados. | Contrato de compra e venda |
                *Frete Grátis: Confira as regras.</p></footer>
    </body>
</html>













