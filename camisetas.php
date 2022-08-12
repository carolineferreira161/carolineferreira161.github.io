<!DOCTYPE html>
<html lang="en">
    <head>

        <style>
            body{  /*tela de fundo*/

                background-image: url("images/the-mandalorian-5k-1920x1080_477555-mm-90.jpg");
                background-repeat:no-repeat;
                background-size: cover;
                background-position: top;
                color: white;
                min-height:1080px;
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
                max-width: 1600px;
                max-height: 110px;
                margin: 10px auto 10px auto;
                
                max-width: 1400px; 
                min-width: 100px;
                
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

            
            
            
            div#interface{ /*div para fundo das imagens */
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:100%;
                max-width: 90%;
                min-width: 10%;
                max-height: 2000px;
                min-height: 500px;
              
                width: auto;
                height: auto;
                top:10%;
                background-color: rgb(0,0,0,0.6);
                margin: 80px auto 200px auto;
           
                box-shadow: 0px 0px 10px #9f7187;
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

                
            }

            div#interface ul{ /* todos as imagens */
               
                list-style: none;
                color: white;
               width: auto;
               height: auto;
             margin-left: 0px;
             margin-right: 40px;
                top:10%;
            }
            div#interface li{
                padding: 20px;
                display: inline-block;
                text-align: center;
            }
                 
            div#interface li:hover{ /*para clicar nas imagens*/
                transition-delay: 0s;
                background-color: rgba(0,0,0,0.2);
                color: white;
        
            }
            
            nav#cabeçalho{
                border-bottom: 2px black solid;
                height: 100px;
            }
           @media(min-width:681px)and (max-width:890px){
                nav#cabeçalho{
                  
                }
                div#interface{
                   font-size: 70%;
                }
                
            }
               @media(min-width:300px)and (max-width:680px){
              
                div#interface{
                   font-size: 60%;
                }
                
            }
            
            
            #selct{
                top:10px;
                width: 100%;
                height: 100px;
                text-align: center;
                background-color: #9f7187;
            }
            nav#cabeçalho li{  /*elementos do inicio para clicar redirecionar*/
                padding: 15px;
                display: inline-block;
            }
          
            nav#cabeçalho li:hover{ /*escrita do idivnicio para clicar redirecionar*/
                background-color: pink;
                transition-delay: 0s;
            }
            footer.rere{
              
                text-align: center;
                position: relative;  
                display: block;
                border-top: 1px solid black;
            }
            .link{
               color: white;
               text-decoration: none;
              }
              .FEMININO{
                 margin: 10px auto 10px auto; 
                   border: 3px solid black;
              }
              
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Among Us</title>
        <link rel="icon" href="images/preto.png">


    </head>
    <body>
       
          
        <div class="iridium">
            <nav id='menu'>
                <ul>
                    <li><a class="inicio" href="html.php" >INÍCIO</a></li>
                    <li class="inicio">|</li>
                    <li><a class="inicio" href="moletons.php"target="_self">PRODUTOS</a></li>  
                    <li class="inicio">|</li>
                    <li><a class="inicio" href="sobrenos.php"target="_self">SOBRE NÓS</a></li>
                </ul>

            </nav>
            <a href="html.php"> <img src="images/vermelho" width="70" class="icone"/></a> 

            <a href="html.php"> <img src="images/Among-Us-–-Logo-PNG.png" width="140" class="among"/></a> 

            <a class="registro" href="registro.php">
                <img src="images/icone.png" width="70" height="70" class="registro"
                     alt="Uma imagem impressionante"/>
                
            </a>
            <a  class="registre-se" href="registro.php"><p> Registre-se</p></a>

            <img src="images/sup.png" width="70" height="50" class="suporte"/> 

        </div> 

       

    <div id="interface"> 
        <div id="selct">
            <nav id='cabeçalho'>    
                <ul>
                   <li><a class="link" href="moletons.php" ><h1>MOLETONS</h1></a></li>
                    <li><a class="link" href="camisetas.php"><h1>CAMISETAS</h1></a></li> 
                    <li><a class="link" href="infantil.php"><h1>INFANTIL</h1></a></li> 
                    <li><a class="link" href="outros.php"><h1>OUTROS</h1></a></li>
                </ul>
            </nav>
        </div> 
        <a href="html.php"> <img src="images/MASCULINO.jpg" width="300" class="FEMININO"/></a> 
    </div>
        
      
 <footer class='rere'><p>©Among Us 2022-2022 Todos os direitos reservados. | Contrato de compra e venda |
                *Frete Grátis: Confira as regras.</p></footer>
    </body>
</html>

 
 