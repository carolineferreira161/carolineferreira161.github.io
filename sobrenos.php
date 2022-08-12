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





            nav#interface{
                position: relative;
                text-align: center;
                font-family: georgia,sans-serif,serif;
                font-weight: bold;
                font-size:16px;
                color: white;
                max-width: 80%;
                min-width: 10%;
                max-height: 30000px;
                min-height: 200px;

                width: auto;
                height: auto;
                top:0%;
                background-color:rgb(98, 0, 0,0.4);
                margin: 100px auto 10px auto;
                padding-bottom: 20%;
                box-shadow: 0px 0px 10px #9f7187;

            }
            @media(min-width:200px)and (max-width:1100px){
                nav#menu ul{
                    left:8%;
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
                display: block;
                border-top: 1px solid black;
            }


            .juntar{
                width: 300px;
                height: auto;
                text-align: justify;
                position: relative;
                left: 0px;
                top:60px;
                display: inline-block;

                padding: 25px;
            }
            .direita{

                width: 300px;
                height: auto;
                text-align: justify;
                position: relative;
                left: 0px;
                top:60px;
                display: inline-block;
                padding: 25px;

            }
            .mas{

                height: auto;
                width: 300px;
                text-align: justify;
                position: relative;
                left: 0px;
                top:60px;
                display: inline-block;

                padding: 25px;
            }
            .camiseta{
                position: absolute;
                left: 40%;
                top:5%;
            }
            .world{
                position: absolute;
                left: 40%;
                top:5%;
            }
            .carrinho{
                position: absolute;
                left: 40%;
                top:5%;
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
        <nav id="interface"><br>
            <h1>Sobre Nós</h1>

            <p> Somos mais do que uma fashiontech. </p>
            <p>Somos um time de inconformados que respira tecnologia para reinventar o negócio da moda. </p> 
            <br>





            <div class="juntar">
                <p >    <img src="images/c.png" width="60" class="camiseta"/>
                    <br><br>
                    Imaginou? A gente tem!<br><br><br>
                    Não importa seu estilo, aqui você encontra qualquer look para atender sua inspiração 
                    ou necessidade, com toda a facilidade e conveniência da compra online. Atualmente,
                    são mais de 6 mil marcas e 400 mil produtos em nosso portfólio! Acreditamos que moda 
                    inteligente é moda para todos - do jovem urbano à mãe contemporânea. </p>
            </div>
            <div class="direita">
                <p ><img src="images/w.png" width="60" class="world"/><br><br>
                    Revolucionamos o ecossistema da moda!<br><br>
                    Inteligência está em nossa essência, na paixão por aprender sempre. Somos mais que uma empresa de moda,
                    respiramos tecnologia para constantemente reinventar o mercado. Nosso propósito está em promover uma revolução
                    no ecossistema da moda, com inteligência em todas as nossas relações: com o mercado, parceiros, colaboradores e consumidores.
                </p>
            </div>

            <div class="mas">
                <p > <img src="images/cc.png" width="60" class="carrinho"/><br><br>
                    Oferecemos moda com curadoria!<br><br><br>
                    Na dúvida de como combinar aquele sapato ou qual casaco escolher? Por meio dos nossos canais de informação 
                    (Dafiti Mag online, Blog Kanui e Blog Tricae) e de nosso super time de influencers (My Look) desenvolvemos 
                    conteúdos diários de moda com informações práticas de estilo, dicas de tamanhos, tendências e seleções com 
                    os melhores produtos.
                </p>
            </div>
        </nav>
        <footer class='rere'><p>©Among Us 2022-2022 Todos os direitos reservados. | Contrato de compra e venda |
                *Frete Grátis: Confira as regras.</p></footer>
    </body>
</html>










