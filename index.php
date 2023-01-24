<?php

ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_lifetime', 600);
ini_set('session.gc_maxlifetime', 600);

// Inicialize a sessão
session_start();

require_once("./include/funcao.php");
enviar_cookie();

?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>LCAM</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/lcam_ico.jpg" type="image/jpg">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/lcam_ico.jpg" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne"
                                aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">CONTATO</a>
                                    </li>
                                </ul>
                            </div>

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/header-bg.png)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Teste de land page</h3>
                            <p class="text">Modelo simples com mobile!</p>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="assets/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Entre em contato</h4>
                        <p class="text">Por gentileza digitar os dados corretos!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="formCadastro" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" id="nome" name="nome" placeholder="Nome"
                                            data-error="Nome requerido." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" id="email" name="email" placeholder="E-mail"
                                            data-error="Email requerido." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" id="nome_empresa" name="nome_empresa" placeholder="Empresa"
                                            data-error="Empresa requerido." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" id="telefone" name="telefone" maxlength="15"
                                            placeholder="Telefone" data-error="Telefone requerido." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="button" id="btn-enviar-formulario" class="main-btn">Enviar
                                            informação</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Modelo de teste <a rel="nofollow"
                                    href="https://landpage.lcaminformatica.com.br">LCAM
                                    INFORMÁTICA
                            </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a class="back-to-top" href="#"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
    //MASCARA TELEFONE
    function mascara(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function mtel(v) {
        v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function id(el) {
        return document.getElementById(el);
    }
    window.onload = function() {
        id('telefone').onkeyup = function() {
            mascara(this, mtel);
        }
    }

    $('#btn-enviar-formulario').click(function() {
        $.ajax({
            type: "POST",
            url: "include/dataController.php",
            data: {
                "nome": $('#nome').val(),
                "empresa": $('#empresa').val(),
                "email": $('#email').val(),
                "telefone": $('#telefone').val(),
            },
            dataType: 'json',
            beforeSend: function() {
                $('#btn-enviar-formulario').html(
                    "<i class='fa fa-pulse fa-spinner'></i> Aguarde...");
                $('#btn-enviar-formulario').attr('disabled', 'disabled');
            },
            success: function(result) {
                if (result.status == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Formulário enviado com sucesso!',
                        showConfirmButton: false,
                        timer: 1000
                    }).then((result) => {
                        location.reload();
                    })
                }
                if (result.status == 'error') {
                    $('#btn-enviar-formulario').html("Enviar");
                    $('#btn-enviar-formulario').removeAttr('disabled');
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Erro ao enviar a formulário!'
                    })
                }
            },
            error: function(error) {
                $('#btn-enviar-formulario').html("Enviar");
                $('#btn-enviar-formulario').removeAttr('disabled');
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Erro ao enviar a formulário!'
                })
            }
        });
    });
    </script>


</body>

</html>