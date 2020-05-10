@extends('auth/mainLogin')
   
@section('title', 'Login')


@section('content')
<!--<head><link rel="stylesheet" href="css/intro.css"></head>
                <div id="loader" class="loader"></div>-->
    <br><br><br><br><br><br><br><br>


                    <div class="col-md-12 col-md-offset-5 col-sm-1" >
                        <h1 class="section-content-title">Login</h1>
                    </div>
                    <br><br><br>

        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <form class="contact-form" method="post" action="/func/login">
                            @csrf
                                     <div class="col-md-3 col-sm-6 col-md-offset-4">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control empty iconified" id="email" required="required" placeholder=" Email">
                                    </div>
                                    </div>
                                    <br><br><br>
                                     <div class="col-md-3 col-sm-6 col-md-offset-4">
                                 <div class="form-group">
                                        <input name="password" type="password" class="form-control empty iconified" id="pass" required="required" placeholder=" Senha">
                                    </div>
                                    </div>
                                    <div class="col-md-offset-0">
                                                <br><br><br><br>
                                
                                <div class="col-md-3 col-sm-6 col-md-offset-4">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Enviar </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<br><br><br><br><br><br><br><br>
<footer class="fixed-bottom">
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
