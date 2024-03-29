<html lang="en">
    <head>

        <link rel="shortcut icon" href="{{asset('images/Logo_main1.png')}}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Remédios Idosos</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/zteste.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        
        
       



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
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default2 navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <div class="section-content" style="right:0px; display: block; transform: translate3d(0px, 0px, 0px);" >
                            <a class="navbar-brand" href="{{asset('/')}}">
                                <img id="logo2" src="{{asset('images/Logo_main2.png')}}" class="logo img-responsive">
                            </a>
                        </div>
           
        </nav>
        <br><br><br><br><br><br><br><br>





<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="table-responsive">
            <table id="mytable" class="table table-bordered table-sm m-0">
               <thead>
                
                  <th>Nome</th>
                  <th>Dosagem</th>
                  <th>Horário</th>                                                              
                  <th>Editar</th>
                  <th>Deletar</th>
                 
               </thead>
               <tbody>
               
                 <h1> {{$nome_idoso}} </h1>

                @foreach($remedio_idoso as $p)                                                                                                                                                                                             
                 <tr>
                     
                     <td width="600px;">{{$p->nome}}</td>
                     <td width="200px;">{{$p->dosagem}}</td>
                     <td width="10px;">{{$p->horario}}</td>
                     <td>
                        <p data-placement="top" style="height: 15px;" data-toggle="tooltip" title="Editar"><button type="button" class="btn carlos btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit{{ $p->id }}"><span class="fas fa-edit fa-2x"></span></button></p>
                     </td>
                    <td>
                        <a href="/idosos/remedios/remove/{{ $p->id }}/{{ $id_idoso }}"  onclick="return confirm('Deseja mesmo excluir este item?');" data-placement="top" style="height: 15px;" data-toggle="tooltip" title="Excluir" ><button  style="height: 30px; width: 40px;" type="button" class="btn-danger carlos btn-xs" ><span style="font-size: 20px;" class="fas fa-trash-alt fa-2x"></span></button></a>
                     </td>
                  </tr>


                 <div class="modal" id="edit{{ $p->id }}" tabindex="-1"  aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i></button>
                        </div>
                        <form action="/idosos/descricao/remedios" method="get">
                                <div class="modal-body">
                                    <div class="form-group">
                                    <input name="dosagem" id="dosagem" class="form-control empty"  type="text" placeholder="Dosagem"  style="font-size: 15px;" required>
                                    </div>
                                    <div class="form-group" >
                                    <h2>Horário</h2><input name="horario" id="horario" class="form-control empty" type="time" placeholder="Horário" style="font-size: 15px;" required>
                                    </div>
                                    <div class="form-group" >
                                   <input name="id_remedio_idoso" value="{{ $p->id }}" class="form-control empty" type="hidden">
                                    </div>
                                    <div class="form-group" >
                                    <input name="id_idoso" value="{{ $id_idoso }}" class="form-control empty" type="hidden">
                                    </div>     
                                </div>
                        <div class="modal-footer">
                            <button type="submit" class="form-control btn btn-send" style="width: 100%;"><h2>Salvar</h2></button>
                        </div>
                    </div>
                    </form>


                            <!-- /.modal-content --> 
                        </div>
                        <!-- /.modal-dialog --> 
                </div>



                @endforeach

                 
               </tbody>
            </table>
            
         </div>
      </div>
   </div>
</div>



                                                


<div class="modal" id="edit" tabindex="-1"  aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
      
         <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i></button>
        </div>
        <form action="/idosos/descricao/remedios" method="get">
                <div class="modal-body">
                    <div class="form-group">
                    <input name="dosagem" id="dosagem" class="form-control empty"  type="text" placeholder="Dosagem"  style="font-size: 15px;" required>
                    </div>
                    <div class="form-group" >
                    <h2>Horário</h2><input name="horario" id="horario" class="form-control empty" type="time" placeholder="Horário" style="font-size: 15px;" required>
                    </div>
                </div>
         <div class="modal-footer">
            <button type="submit" class="form-control btn btn-send" style="width: 100%;"><h2>Salvar</h2></button>
         </div>
      </div>
      </form>


      <!-- /.modal-content --> 
   </div>
   <!-- /.modal-dialog --> 
</div>

                            <br><br><br><br><br><br><br><br>
                           
                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-6 col-xs-offset-1" method="get" action="/remedios2/{{$id_idoso}}">
                                    <div class="form-group">
                                        <a href="/remedios2/{{$id_idoso}}"><button class="btn btn-primary2 btn-circle btn-lg"><span data-tooltip2="Adicione Remédio para o(a) {{$nome_idoso}}"><i class="fas fa-notes-medical" style="color: white;"></span></button></i></a>
                                    </div>
                                </form>
                            </div>

                           
                           
                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-10 col-xs-offset-1" method="get" action="/idosos">
                                    <div class="form-group">
                                        <a href="/idosos" target="_blank"><button class="btn btn-primary btn-circle btn-lg"><span data-tooltip="Listagem de Idosos"><i class="fas fa-user fa-1x" style="color: white;"></span></button></i></a>
                                    </div>
                                </form>
                            </div>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>





      <footer class="footer2 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <h4>
                                &copy; Copyright, 2018 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </h4>
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
                                <script type="text/javascript" src="{{asset('js/jquery.hoverdir.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jQuery.scrollSpeed.js')}}"></script>
                                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                <script src="{{asset('js/script.js')}}"></script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>'
                                 


                                </body>
                                </html>
