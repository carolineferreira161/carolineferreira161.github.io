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
            
             nav#menu ul{   /*elementos do inicio para clicar redirecionar*/
                list-style: none;
                position: absolute;
                left:500px;
                top:30px;
            }
            nav#menu li{  /*elementos do inicio para clicar redirecionar*/
                padding: 15px;
                display: inline-block;
            }
           
            nav#menu li:hover{ /*escrita do idivnicio para clicar redirecionar*/
                background-color: pink;
                transition-delay: 0s;
            }
            nav#interface li:hover{ /*para clicar nas imagens*/
                transition-delay: 0s;
                background-color: rgba(0,0,0,0.2);
                color: white;
            }
             
            nav#interface{ /*div para fundo das imagens */
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:16px;
                width: 1200px;
                height: 400px;
                background-color: rgb(0,0,0,0.6);
                margin: 50px auto 200px auto;
                padding-bottom: 20%;
                box-shadow: 0px 0px 10px #9f7187;
            }

            nav#interface ul{ /* todos as imagens */
                position: absolute;
                list-style: none;
                color: white;
            }
           nav#interface li{
               padding: 15px;
               display: inline-block;
               text-align: center;
               width: 230px;
               height: 400px;  
            }
            .link{
               color: white;
               text-decoration: none;
              }
          
            

            h1{
                position: relative;
                z-index: 1;
                text-align: center;
                padding-bottom: 50px;
            }
            h1:after {
                content: "";
                position: absolute;
                text-align: center;
                left: 29%;
                bottom: 0;
                width: 500px;
                border-bottom: 5px solid red;
            }
          
            footer.rere{
              
                text-align: center;
                position: relative;  
                display: block;
                border-top: 1px solid black;
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
                <img src="images/icone.png" width="70" class="registro"
                     alt="Uma imagem impressionante"/>
                <figcaption class="registre-se">Registre-se</figcaption>
               </a>
           
    <img src="images/sup.png" width="70" class="suporte"/> 
       
</div> 
        
        <nav id="interface"><br>
            <header id="cabeçalho">
                <h1>Lançametos</h1></header>
            <ul>

                <li><a class="link" href="moletons.php"><h2>Moletons</h2>
                    <img src="images/moletommasc.webp" width="220" height="280px"/>
                    <p>Moletom Among Us</p> </a></li>
                    
                    <li><a class="link" href="infantil.php"><h2>Blusas</h2>
                    <img src="images/crianças.webp" width="220" height="280px"/>
                    <p>Blusas Infantis Among Us</p></a></li>
                   
                    <li><a class="link" href="outros.php"><h2>Canecas</h2>
                        <img src="images/caneca" width="220" height="280px"/>
                        <p>Canecas temáticas</p></a></li>
                
                <li><a class="link" href="outros.php"><h2>Outros</h2>
                        <img src="images/almofada_among_us_impostor_69045_1_20201211171834.webp" width="220" height="280px"/>
                        <p>Almofadas, Pop it's e outros</p></a></li>
            </ul>
         
        </nav>
        <footer class='rere'><p>©Among Us 2022-2022 Todos os direitos reservados. | Contrato de compra e venda |
                *Frete Grátis: Confira as regras.</p></footer>
    </body>
</html>
