<?php
 session_start();

if(empty($_SESSION)){//se estiver vazio ele manda vc p pagina inicial
    header("Location:../html.php?msgErro ao tentar logar, tente novamente");
    die();
}
/*echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

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

            }

            
            .inicio{   /*elementos do inicio para clicar redirecionar*/
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:15px;
                color: white;
                text-decoration: none;
                cursor:pointer;
               
 
                                 
            }
            
              div#iridium{
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:16px;
                color: white;
                width: 1600px;
                height: 110px;
                margin: 10px auto 10px auto; 
              
            }
            
            nav#menu li{  /*elementos do inicio para clicar redirecionar*/
                padding: 15px;
                position: relative;
                display: inline-block;
            }
              nav#menu ul{   /*elementos do inicio para clicar redirecionar*/
               
                list-style: none;
                position: absolute;
                left:500px;
                top:30px;
              }                 
          
              nav#menu li:hover{ /*escrita do inicio para clicar redirecionar*/
                  background-color: pink;   
                  transition-delay: 0s;
              }
             
          
            .icone{    /*icone do amog us preto*/
                border-radius: 3%;
                position: absolute;
                left: 30px;
                top :10px;
                border: 3px solid black;
            }
            .among{    /*escrita do amongs us*/
                position: absolute;
                left:200px;
                top :50px;

            }
              .registro{  /*icone para se registro*/
                position: absolute;
                left:620px;
                top :10px;
                text-decoration: none;
            }
            .registre-se{  /*icone para se registro*/
                position: relative;
                left: 620px;
                top :80px;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:15px;
                color: red;
                text-decoration: none;
             
              
            }
            .suporte{    /*icone do amog us preto*/
                border-radius: 3%;
                position: absolute;
                left: 1100px;
                top :27px;
                width: 53px;
                border: 3px solid black;

            }
             div#interface{
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:16px;
                color: white;
                width: 1100px;
                height: 400px;
                background-color: #9f7187;
                margin: 50px auto 10px auto;
                padding-bottom: 20%;
                box-shadow: 0px 0px 10px #9f7187;
               
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
               width: 250px;
               height: 330px;
               background-color: #e4e2e2;
               position: relative;
               margin: 0px auto 100px auto;
               border-radius: 5%;
               border: 3px solid #999999;
               color: black;
               text-align: center;
               background-color:rgb(56, 54, 60,0.4);
               
               
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
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Among Us</title>


    </head>
    <body>
        <div id="iridium">
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
                <img src="../images/icone.png" width="70" class="registro"
                   />
                <figcaption class="registre-se">Registre-se</figcaption>
               </a>
           
    <img src="../images/sup.png" width="70" class="suporte"/> 
       
</div> 
        
<div class="box">
  <h2>LOGADO</h2><br>
  <h3>Olá <?php  echo$_SESSION['nome']; ?>, seja bem vindo(a).</h3>
        </div>
 

     <footer class='rere'><p>©Among Us 2022-2022 Todos os direitos reservados. | Contrato de compra e venda |
                *Frete Grátis: Confira as regras.</p></footer>
    </body>
</html>

 
 





















