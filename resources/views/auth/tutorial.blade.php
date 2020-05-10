<!DOCTYPE html>
<html lang="en">
    <head>
    
        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
       
        <title>Tutorial</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/owl.theme.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/flexslider.css">
        <link rel="stylesheet" href="/css/pricing.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="css/intro.css">
        <link rel="stylesheet" href="/css/tutorial.css">
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

                        $(function(){
                        
                            $(document).on( 'scroll', function(){
                        
                                if ($(window).scrollTop() > 100) {
                                    $('.scroll-top-wrapper').addClass('show');
                                } else {
                                    $('.scroll-top-wrapper').removeClass('show');
                                }
                            });
                        
                            $('.scroll-top-wrapper').on('click', scrollToTop);
                        });
                        
                        function scrollToTop() {
                            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                            element = $('body');
                            offset = element.offset();
                            offsetTop = offset.top;
                            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                        }

                        });
 
        </script>
       <!--== nao apaga |||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
    
    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
            
                <div class="section-content" style="right:0px; display: block; transform: translate3d(450px, -20px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo" src="images/Logo_main1.png" class="logo img-responsive">
                        </a>
                    </div>
                    <div id="loader" class="loader"></div>
                    </nav>     <br><br><br><br><br><br><br><br>

                    <div class="container">
                        <div class="row text-center">
                            <div class="btn-group show-on-hover">
                                <button type="button" class="btn btn-default dropdown-toggle amigos" data-toggle="dropdown">
                                <h1 class="section-content-title">Tutorial</h1><span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"></a></li>
                                        <li><a href="#registro">Como Registrar</a></li>
                                        <li><a href="#logar">Como Logar</a></li>
                                        <li><a href="#somos">Quem somos</a></li>                                        
                                        <li><a href="#idoso">Como Registrar Idoso</a></li>
                                        <li><a href="#remedio">Como Registrar o Remédio</a></li>
                                        <li><a href="#detalhe">Acessando detalhes do Idoso</a></li>
                                        <li><a href="#editar">Como Editar o Idoso Registrado</a></li>
                                        <li><a href="#remover">Como Remover o Idoso Registrado</a></li>
                                        <li><a href="#vincular">Como um Vincular o Remédio com um Idoso</a></li>

                                    </ul>
                            </div>
                        </div>
                    </div>
              
             
<br><br><br><br><br>
<section id="registro">
<div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Registrar no Site:</h1></div>
                        
        </div> 
<div class="how-section1">
<div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/cadastro1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                                        
                                         <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                            
                                           </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                                         <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/cadastro2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/cadastro3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                                        <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 4</h4>
                                         <p class="text-muted">Assim que preencher todos os dados, clique no botão “Registrar”, e pronto, o seu cadastro estará feito! </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/cadastro4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>

     
    </section>

    <h1 class="col-md-offset-6">- - - - -</h1>
    <section id="somos">
                        <div class="gradient-shadow"></div>
                                                <div class="container shadow-box3">
                                                    <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                                                    <h1 sytle="color:white;">Como Entrar em Contato Conosco:</h1><h4 class="subheading">Estamos sempre dispostos a receber críticas, seja elas boas ou construtivas.</h4>
                                                   </div>
                                                </div> 
                        <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/contato1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4><p class="text-muted"> Na página inical, no canto superior direito, possui um botão escrito "Fale Conosco", onde te direcionará a página de contato.
                                            
                                            </p>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4><p class="text-muted">Na página exibimos a nossa localização no mapa e nossas redes sociais. </p>
                         </div>
                        <div class="col-md-6 how-img">
                            <img src="images/contato2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/contato3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                            <p class="text-muted">Para nos enviar uma mensagem é muito simples, digite seu nome, em seguida o seu email, o assunto que se trata e por fim a mensagem que desejar.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 4</h4>
                            <p class="text-muted">Por último clique em "Enviar". Pronto sua mensagem será enviada com sucesso!</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/contato4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>

</section>
<h1 class="col-md-offset-6">- - - - -</h1>
    
   
    <section id="logar"><div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Logar no Site:</h1>
                            <h4 class="subheading">Você ja possui um cadastro e precisa de ajuda para se logar?</h4>
</div>
                        
        </div> 
    <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/login1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                            <p class="text-muted"> Vá para página inicial do site, no seu canto inferior esquerdo, possui um botão escrito "Login", clique nele.
                                            
                                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                            <p class="text-muted">Assim que clicar, o site irá te direcionar a seguinte página, onde você colocará o seu email e senha escolhidos no cadastro.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/login2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/login3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                            <p class="text-muted">Feito isso, clique em "entrar". Pronto, você estará logado no Info Idoso. </p>
                         </div>
                    </div>
			 
    
    </section>

       
       <h1 class="col-md-offset-6">- - - - -</h1>



 <section id="idoso">  
 <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Registrar o Idoso:</h1><h4 class="subheading">Você precisa de ajuda para registrar um paciente? </h4>
</div>
                        
        </div> 
 <div class="how-section1">                    
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                            <p class="text-muted">Assim que logar no site, você será direcionado para a seguinte página.</p>
                       </div>
                        <div class="col-md-6 how-img">
                            <img src="images/cadastroidoso1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/cadastroidoso2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                           <p class="text-muted">No canto inferior direito, possui um botão com o seguinte símbolo "+", clique nele. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                            <p class="text-muted">Então você será direcionado para uma página de cadastro do idoso, onde você irá preencher com o nome completo do residente, data de nascimento, RG, CPF, selecionar o tipo de alimentação do pacinte (Sólida, Líquida, Pastosa ou Outra) e adiconar uma descrição para o idoso.  </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/cadastroidoso3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/cadastroidoso4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                            <div class="col-md-6">
                            <h4>Passo 4</h4>
                            <p class="text-muted">Se o idoso possui alguma doença psicológica ou/e física, será marcado nos seguintes campos, podendo ser adiocionada alguma descrição para cada doença, assim o mesmo poderá ter os cuidados nescessários. </p>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 5</h4>
                            <p class="text-muted">Assim que preencher todos os dados, clique no botão “Registrar”, e pronto, o seu cadastro estará feito! </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/cadastroidoso5.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                
                <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/cadastroidoso6.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 6</h4>
                            <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                         </div>
                    </div>

			
                          
        
    
    </section>
    <h1 class="col-md-offset-6">- - - - -</h1>
    <section id="remedio">  
                    <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Registrar o Remédio:</h1></div>
                        </div> 
                        
                        <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/remedio1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                                        <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                            
                                           </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                                        <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                        <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/remedio2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/remedio3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                                        <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                        <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 4</h4>
                                        <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                                        <p class="text-muted">Assim que preencher todos os dados, clique no botão “Registrar”, e pronto, o seu cadastro estará feito! </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/remedio4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>

			
                          
        
    
    </section>
    <h1 class="col-md-offset-6">- - - - -</h1>
    <section id="detalhe"> 
                    <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Acessando os Detalhes do Idoso Registrado:</h1></div>
                        </div> 
                        
                        <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/detalhes1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                                        <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                            
                                           </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                                        <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                        <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/detalhes2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/detalhes3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                                        <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                        <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 4</h4>
                                        <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                                        <p class="text-muted">Assim que preencher todos os dados, clique no botão “Registrar”, e pronto, o seu cadastro estará feito! </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/detalhes4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>

			
                          
        
    
    </section>

    <h1 class="col-md-offset-6">- - - - -</h1>

<section id="remover"> 
                <div class="gradient-shadow"></div>
                    <div class="container shadow-box3">
                        <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                        <h1 sytle="color:white;">Removendo um Idoso Registrado:</h1></div>
                    </div> 
                    
                    <div class="how-section1">
                <div class="row">
                    <div class="col-md-6 how-img">
                        <img src="images/remover1.png" class="rounded-circle img-fluid" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <h4>Passo 1</h4>
                                    <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                    <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                        
                                       </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Passo 2</h4>
                                    <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                    <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                    </div>
                    <div class="col-md-6 how-img">
                        <img src="images/remover2.png" class="rounded-circle img-fluid" alt=""/>
                    </div>
                </div>                                          
            </div>		                      
       
</section>
<h1 class="col-md-offset-6">- - - - -</h1>

<section id="editar"> 
                    <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Editando as Informações do Idoso Registrado:</h1></div>
                        </div> 
                        
                        <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/editar1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                                        <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                            
                                           </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                                        <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                        <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/editar2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/editar3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                                        <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                        <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 4</h4>
                                        <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                                        <p class="text-muted">Assim que preencher todos os dados, clique no botão “Registrar”, e pronto, o seu cadastro estará feito! </p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/editar4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>

			
                          
        
    
    </section>
    <h1 class="col-md-offset-6">- - - - -</h1>

    <section id="vincular"> 
                    <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Vinculando um Remédio com um Idoso</h1></div>
                        </div> 
                        
                        <div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="images/addRemedio1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                                        <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        <p class="text-muted">Para começar o cadastro, vá para a página inicial, sem rolar para baixo, clique no botão escrito “cadastro” que está localizado no canto inferior esquerdo. 
                                            
                                           </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                                        <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                        <p class="text-muted">Em seguida preencha os campos com os seguintes dados: nome e sobrenome, email, telefone, seu sexo, a senha que você desejar, CPF, RG e data de nascimento. Fique tranquilo que os seus dados estarão seguros com a gente.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="images/addRemedio2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/addRemedio3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 3</h4>
                                        <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                        <p class="text-muted">Ainda na página de cadastro, preencha os campos de seu endereço com: CEP, nome da rua, bairro, cidade, estado e por último marque a casa de repouso em que você trabalha dentre as seis localizadas em Mogi Mirim, Lar São Francisco de Assis, Coronel João Leite, Sociedade Santo Antônio, São Vicente de Paula, Casa de Repouso Emanue ou Juca de Andrade.</p>
                        </div>
                    </div>
			
    </section>
    
    <h1 class="col-md-offset-6">- - - - -</h1>

   <section>  
 <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Remover o Remédio Vinculado com o Idoso:</h1><h4 class="subheading">Você precisa de ajuda para registrar um paciente? </h4>
</div>
                        
        </div> 
 <div class="how-section1">                    
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                            <p class="text-muted">Assim que logar no site, você será direcionado para a seguinte página.</p>
                       </div>
                        <div class="col-md-6 how-img">
                            <img src="images/rrmedio1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/rrmedio2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                           <p class="text-muted">No canto inferior direito, possui um botão com o seguinte símbolo "+", clique nele. </p>
                        </div>
                    </div>	
                                  
    
    </section>

    <h1 class="col-md-offset-6">- - - - -</h1>

<section>  
 <div class="gradient-shadow"></div>
                        <div class="container shadow-box3">
                            <div class="color-bg hidden-xs col-sm-12 dis-table-cell">
                            <h1 sytle="color:white;">Como Editar o Remédio Vinculado com o Idoso:</h1><h4 class="subheading">Você precisa de ajuda para registrar um paciente? </h4>
</div>
                        
        </div> 
 <div class="how-section1">                    
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Passo 1</h4>
                            <p class="text-muted">Assim que logar no site, você será direcionado para a seguinte página.</p>
                       </div>
                        <div class="col-md-6 how-img">
                            <img src="images/eremedio1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="images/eremedio2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Passo 2</h4>
                           <p class="text-muted">No canto inferior direito, possui um botão com o seguinte símbolo "+", clique nele. </p>
                        </div>
                    </div>	
                                  
    
    </section>

    <h1 class="col-md-offset-6">- - - - -</h1>

        <footer>
            <div class="container">
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
        
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
            <i class="fa-3x fas fa-angle-up "></i>
            </span>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
        <script src="js/script.js"></script>         
        <script src="js/intro.js"></script>


    </body>
</html>