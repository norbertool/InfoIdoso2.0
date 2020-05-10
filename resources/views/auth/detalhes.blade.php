<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="shortcut icon" href="{{asset('images/Logo_main1.png')}}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Detalhes Idosos</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <!--== nao apaga ||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
        <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.flexslider.min.js')}}"></script>
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


        </script>
        <!--== nao apaga |||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('rua').value = ("");
                document.getElementById('bairro').value = ("");
                document.getElementById('cidade').value = ("");
                document.getElementById('uf').value = ("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value = (conteudo.logradouro);
                    document.getElementById('bairro').value = (conteudo.bairro);
                    document.getElementById('cidade').value = (conteudo.localidade);
                    document.getElementById('uf').value = (conteudo.uf);

                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }

            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('rua').value = "...";
                        document.getElementById('bairro').value = "...";
                        document.getElementById('cidade').value = "...";
                        document.getElementById('uf').value = "...";


                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            }
            ;


$(document).ready(function(){
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $("#logo2").attr("src", "{{asset('images/Logo_stick1.png')}}")
        }
        else {
             $("#logo2").attr("src", "{{asset('images/Logo_main1.png')}}")
        }
    });
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
                    <head><link rel="stylesheet" href="{{asset('css/intro.css')}}"></head>
                <div id="loader" class="loader"></div>
                    <div class="section-content" style="right:0px; display: block; transform: translate3d(450px, -30px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo2" src="{{asset('images/Logo_main1.png')}}" class="logo2 img-responsive">
                        </a>
                    </div>
                    </nav>     <br><br><br><br><br><br><br><br>


                    <!--==<div class="col-md-10 col-md-offset-4 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Gestão de Idosos</h1>
                    </div>
                    <br><br><br><br><br><br><br><br>==-->
                            
                           

                    <div class="text-center" >
                        <h2 class="section-content-title">{{ $idosos->nome }}</h2>
                    </div>
                    <br><br><br><br><br><br>

                    <div class="col-md-10 col-md-offset-5 col-sm-10 col-sm-offset-1">
                        <div class="item">
                            <a>
                            <img class="boxInner" src="{{ url("storage/imagens/$idosos->foto")}}"alt="FotoPerfil.png"/>
                            </a>
                        </div>
                    </div>
                  

                <div class="container"  sytle="background-color:#f8af95d4;">
                    <div class="row" sytle="background-color:#f8af95d4;" >
                        <div class="col-md-12 col-sm-10 col-sm-offset-0">
                            <div class="row" sytle="background-color:#f8af95d4;">
                            <br><br><br>
                            <form>
                
                            <div class="form-group">
                                    <div class="col-md-1 col-sm-10 col-md-offset-2">
                                    <label> Dia </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="dia" type="text" class="form-control"  value="{{$idosos-> dia}}" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                    <div class="col-md-1 col-sm-10 ">
                                    <label> Mês </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="mes" type="text" class="form-control"  value="{{$idosos-> mes}}" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-1 col-sm-10 ">
                                    <label> Ano </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="ano" type="text" class="form-control"  value="{{$idosos-> ano}}" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-2 col-sm-10 ">
                                    <label> Sexo </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="sexo" type="hidden"  class="form-control"  value="{{$idosos-> sexo}}">
                                    @if($idosos->sexo=="M")
                                    <input type="text" name="sexo" class="form-control" value="Masculino" readonly="readonly">                              
                                    @else
                                    <input type="text" name="sexo" class="form-control" value="Feminino" readonly="readonly">                              
                                    @endif
                                
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-3 col-sm-10">
                                    <label> RG </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="rg" type="text" class="form-control"  value="{{$idosos-> rg}}" readonly="readonly">
                                </div>
                            </div>

                            <br><br><br><br>
                            <div>
                           <div class="form-group">
                                <div class="col-md-2 col-sm-10 col-md-offset-2">
                                    <label> CPF </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="cpf" type="text" class="form-control"  value="{{$idosos-> cpf}}"readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-sm-10">
                                    <label> Alimentaçãao </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    
                                 <input name="alimentacao" type="hidden"  class="form-control"  value="{{$idosos-> alimentacao}}">
                                    @if($idosos->alimentacao=="P")
                                    <input type="text" name="alimentacao" class="form-control" value="Pastosa" readonly="readonly">                              
                                     @elseif($idosos->alimentacao=="L")
                                    <input type="text" name="alimentacao" class="form-control" value="Líquida" readonly="readonly">
                                     @elseif($idosos->alimentacao=="S")
                                    <input type="text" name="alimentacao" class="form-control" value="Solida" readonly="readonly">    
                                    @else
                                    <input type="text" name="alimentacao" class="form-control" value="Outras" readonly="readonly">                              
                                    @endif
                                
                                
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-sm-10">
                                    <label> Descrição Alimentação </label>  
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="descricaoal" type="text" class="form-control"  value="{{$idosos-> descricaoal}}" readonly="readonly">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-10 col-md-offset-2">
                                    <label> Doença Psicológica </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="doencap" type="hidden"  class="form-control"  value="{{$idosos-> doencap}}">
                                    @if($idosos->doencap=="P")
                                    <input type="text" name="doencap" class="form-control" value="Psicológica" readonly="readonly">                              
                                    @else
                                    <input type="text" name="doencap" class="form-control" value="Não apresenta" readonly="readonly">                              
                                    @endif
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-6 col-sm-10">
                                    <label> Descrição Doença Psicológica </label>  
                                    <input type="hidden"  name="id" value=" {{$idosos-> id}}">
                                    <input name="descricaop" type="text" style="height: 130px;" class="form-control"  value="{{$idosos-> descricaop}}" readonly="readonly">
                                </div>
                            </div>
                            <br><br><br><br><br>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-10 col-md-offset-2">
                                    <label> Doença Fisica </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="doencaf" type="hidden"  class="form-control"  value="{{$idosos-> doencaf}}">
                                    @if($idosos->doencaf=="F")
                                    <input type="text" name="doencaf" class="form-control" value="Física" readonly="readonly">                              
                                    @else
                                    <input type="text" name="doencaf" class="form-control" value="Não apresenta" readonly="readonly">                              
                                    @endif
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-6 col-sm-10">
                                    <label> Descrição Doença Física </label>  
                                    <input type="hidden" name="id" style="height: 130px;" value=" {{$idosos-> id}}">
                                    <input name="descricaof" type="text" style="height: 130px;" class="form-control"  value="{{$idosos-> descricaof}}" readonly="readonly">
                                </div>
                            </div>
                            
                            <br><br><br><br><br>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10 col-md-offset-5">
                                    <h2>Para contato</h2>
                                    </div>
                            </div>
                            <br><br><br><br>
                            <div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10 col-md-offset-2">
                                    <label> Responsável </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="responsalvel1" type="text" class="form-control"  value="{{$idosos-> responsavel1}}"readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10">
                                    <label> Telefone </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="telefone1" type="text" class="form-control"  value="{{$idosos-> telefone1}}"readonly="readonly">
                                </div>
                            </div>
                            </div>
                            <br><br><br>
                            <div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10 col-md-offset-2">
                                    <label> Responsável2 </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="responsalvel2" type="text" class="form-control"  value="{{$idosos-> responsavel2}}"readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10">
                                    <label> Telefone </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="telefone2" type="text" class="form-control"  value="{{$idosos-> telefone2}}"readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-10 col-md-offset-2">
                                    <label> CEP </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="CEP" type="text" class="form-control"  value="{{$idosos-> cep}}"readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-10">
                                    <label> Cidade </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="cidade" type="text" class="form-control"  value="{{$idosos-> cidade}}"readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-10">
                                    <label> Rua </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="rua" type="text" class="form-control"  value="{{$idosos-> rua}}"readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <div class="col-md-3 col-sm-10 col-md-offset-2">
                                    <label> Bairro </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="bairro" type="text" class="form-control"  value="{{$idosos-> bairro}}"readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-1 col-sm-10">
                                    <label> Estado </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="uf" type="text" class="form-control"  value="{{$idosos-> uf}}"readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-4 col-sm-10">
                                    <label> Entidade </label> 
                                    <input type="hidden" name="id" value=" {{$idosos-> id}}">
                                    <input name="entidade" type="hidden" class="form-control"  value="{{$idosos->id_entidade}}"readonly="readonly">
                                    @if($idosos->id_entidade=="1")
                                    <input type="text" name="entidade" class="form-control" value="Lar São Francisco de Assis" readonly="readonly">                              
                                    @elseif($idosos->id_entidade=="2")
                                    <input type="text" name="entidade" class="form-control" value="Instituto Coronel João Leite" readonly="readonly">
                                    @elseif($idosos->id_entidade=="3")
                                    <input type="text" name="entidade" class="form-control" value="Sociedade Santo Antônio" readonly="readonly">    
                                    @elseif($idosos->id_entidade=="4")
                                    <input type="text" name="entidade" class="form-control" value="Conferência São Vicente de Paula" readonly="readonly">    
                                    @elseif($idosos->id_entidade=="5")
                                    <input type="text" name="entidade" class="form-control" value="Casa de Repouso Emanuel" readonly="readonly">    
                                    @else($idosos->id_entidade=="6")
                                    <input type="text" name="entidade" class="form-control" value="Juca de Andrade Vila Pahin" readonly="readonly">                                  
                                    @endif






                                </div>
                            </div>
                        </div>


                            <br><br><br><br>
                            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <div class="text-center">
                                    <button class="btn btn-send" type="button" onClick="history.go(-1)">Voltar</button>
                                </div>
                            </div>    
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    
            <br><br><br>
                    
                    
                    
                                <footer>
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


                                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                                <script src="{{asset('js/owl.carousel.min.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}" ></script>
                                <script src="{{asset('js/wow.min.js')}}"></script>
                                <script src="{{asset('js/jquery.validate.js')}}"></script>
                                <script type="text/javascript" src="js/jquery.hoverdir.js')}}"></script>
                                <script type="text/javascript" src="js/jQuery.scrollSpeed.js')}}"></script>
                                <script src="{{asset('js/script.js')}}"></script>
                                <script src="{{asset('js/intro.js')}}"></script>


                                </body>
                                </html>
