<!DOCTYPE html>
<html lang="en">
    <head>
    
        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Quem somos</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/owl.theme.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/flexslider.css">
        <link rel="stylesheet" href="/css/pricing.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/pessoas.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

        <!--== nao apaga ||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(-22.4249526, -46.9509746),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-22.4249526, -46.9509746),
                    title: "Etec Pedro Ferreira Alves"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            
            $(document).ready(function(){
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $("#logo2").attr("src", "{{asset('images/Logo_stick2.png')}}")
        }
        else {
             $("#logo2").attr("src", "{{asset('images/Logo_main2.png')}}")
        }
    });
});
        </script>
       <!--== nao apaga |||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
    
    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default3 navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <div class="section-content" style="right:0px; display: block; transform: translate3d(470px, -30px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo2" src="images/Logo_main2.png" class="logo img-responsive">
                        </a>
                        <div id="loader" class="loader"></div>
                    </div>
                    </nav>     <br><br><br><br><br><br><br><br>

                    <div class="text-center" >
                        <h1 class="section-content-title">Membros</h1>
                    </div>
                    <br>



 <div class="content">
        <div class="container">
            
            <div class="row">
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa22.jpg" alt="">
                            <div class="team-content">
                                <h4 class="text-white mb0" style="color: white;">João Pedro Barbosa</h4>
                                <p class="team-meta">- Criador de Conteúdo</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="mb0 text-white" style="color: white;">João Pedro Barbosa</h4>
                                    <p class="mb30 team-meta">- Criador de Conteúdo</p>
                                    <p>Mauris tincidunt dolor eget diam dapibus vitae finibusnisl friuisque pretiuam egete euismod justam ac temlibern rutrum nisli in mi rhoncac pharetra odioacin ntesque dictum vel risus quis egeaecenas necese purus quaroin tincidunt neque malesuda vulputate lecton pretiume.</p>
                                    <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/joaopedro.barbosa.39589" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/jpedrobrs/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/JoaoPBarbosa1" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp
                                   
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa4.jpg" alt="">
                            <div class="team-content">
                                <h4 class="text-white mb0" style="color: white;">João Vitor dos Santos</h4>
                                <p class="team-meta">- Designer Gráfico</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="mb0 text-white" style="color: white;">João Vitor dos Santos</h4>
                                    <p class="mb30 team-meta">- Designer Gráfico</p>
                                    <p>"Aluno da escola ETEC Pedro Ferreira Alves, 17 anos, um dos responsáveis pelo design e HTML do site. Uma vez minha mãe disse “faça direito ou então faça duas vezes”, então eu tento sempre fazer o meu melhor, com isso progredir socialmente e profissionalmente." </p>
                                    <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/fiodamarcia" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/fiodamarcia" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/jaozinho_santus" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp
                                  
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa6.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white mb0"style="color: white;">Norberto Motta</h4>
                                <p class="team-meta">- Programador</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="mb0 text-white"style="color: white;">Norberto motta</h4>
                                    <p class="mb30 team-meta">- Programador</p>
                                    <p>"Estou finalizando o 3º ano do ensino técnico integrado ao ensino médio, responsável pela criação e manutenção do banco de dados e desenvolvimento dos códigos PHP. Prentendo seguir na área, estando sempre disposto a novos desafios."</p>
                                    <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/profile.php?id=100011962873569" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/motta.norberto/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/MottaNorberto" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp
                                 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa5.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white mb0" style="color: white;">Rafael Bronzatto</h4>
                                <p class="team-meta">- Programador</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                        
                                    <h4 class="text-white mb0" style="color: white;">Rafael Bronzatto</h4>
                                    <p class="mb30 team-meta">- Programador</p>
                                    <p>"Sou aluno do terceiro ano do ensino médio, tenho 18 anos e sou um dos integrantes do projeto Info Idoso. Estive encarregado da criação da estrutura do software, desde partes do HTML até a criação de formulários. Creio que com nosso projeto facilitará o dia-dia dos asilos em Mogi-Mirim." </p>
                                <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/Rafael.Bronzattto" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/rafael_bronzatto/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/rafaelbronzatt" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp

                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa1.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white mb0" style="color: white;">Pedro Maranha</h4>
                                <p class=" mb30 team-meta">- Auxiliar Gráfico</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="text-white mb0" style="color: white;">Pedro Maranha</h4>
                                    <p class=" mb30 team-meta">- Auxiliar Gráfico</p>
                                    <p>"Estive encarregado dos auxilios nas partes gráficas durante o desenvolvimento do trabalho, assim como realizei parte da documentação do projeto. Infelizmente, por motivos pessoais, tive que abandonar o projeto ao meio, mas ajudei o maximo que pude meus comapnaheiros."</p>
                                    <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/pedro.maranha.9" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/pmaranha/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/?lang=pt-br" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp
                        
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="images/pessoa3.jpg" alt="" class="img-fluid">
                            <div class="team-content">
                                <h4 class="text-white mb0" style="color: white;">Lucas Fernando</h4>
                                <p class=" mb30 team-meta">- Auxiliar de Desenvolvimento</p>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="text-white mb0" style="color: white;">Lucas Fernando</h4>
                                    <p class="team-meta">- Auxiliar de Desenvolvimento</p>
                                    <p>"Durante a elaboração do projeto estive encarregado de conectar com os orientadores e entregar as atividades propostas durante as aulas, assim como ajudar meus companheiros a solucionar problemas que não conseguiam encontrar. Infelizmente tive que abandonar o projeto no meio, mas passei a ajudar de outra maneira." </p>
                                    <div class="col-md-offset-3">
                                    <a href="https://www.facebook.com/profile.php?id=100001842731772" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://www.instagram.com/luukinhas921/?hl=pt-br" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>&nbsp&nbsp
                                    <a href="https://twitter.com/luukinhas92" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&nbsp&nbsp
                       
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.team-img -->
            </div>
            

            </div>
        </div>
    </div>

                                                

<div id="result">
    <div class="thumbnail">
        <img src="images/jordan.png"  alt="" />
    </div>
    <blockquote>
        <p id="quote">O talento vence jogos, mas só o trabalho em equipe ganha campeonatos.</p>
    </blockquote>
    <div class="attribution">
        <p id="author">Michael Jordan</p>
        <p id="work"></p>
    </div>
</div>

    
                                <footer class="footer3">
                                    <div class="container" sytle="">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="copyright text-center">
                                                    <p>
                                                        &copy; Copyright, 2018 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </footer>



                                <script src="js/bootstrap.min.js"></script>
                                <script src="js/owl.carousel.min.js"></script>
                                <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
                                <script src="js/wow.min.js"></script>
                                <script src="js/jquery.validate.js"></script>
                                <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
                                <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
                                <script src="js/script.js"></script>



                                </body>
                                </html>