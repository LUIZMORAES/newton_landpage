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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Newton | teste landpage</title>
    <link rel="shortcut icon" href="img/lcam_ico.jpg" />

    <!-- load stylesheets -->

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" href="css/tooplate-style.css"> <!-- Templatemo style -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/multi-form.css?v2">

</head>

<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <div class="tm-top-bar" id="tm-top-bar">
            <!-- Top Navbar -->
            <div class="container" id="divContainer">
                <div class="row">
                    <nav class="navbar navbar-expand-lg narbar-light">
                        <a class="navbar-brand mr-auto" href="#">
                            <img src="img/lp_menu.png" alt="LM">
                        </a>
                        <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                            data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#top">Início <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Passo a passo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">Termos e condições</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Formulário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-7">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#top">Voltar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="tm-section tm-bg-img" id="tm-section-1">
            <section id="sec-oque">
                <div class="container oque-contain oque-conteudo">
                    <h2>Esse formulário tem que disparar o lead e terá que ter a versão mobile do layout.</h2>
                    <h3>É simples e fácil.</h3>
                    <i class="fa fa-arrow-down fa-5x text-blue" aria-hidden="true"></i>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-section tm-section-pad" id="tm-section-4">
        <section id="sec-passoapasso">
            <div class="container">
                <h2>Passo a passo para preencher o formulário </h2>
                <div class="passos-desk">
                    <div class="passo-card">
                        <i class="fa fa-folder-open fa-5x" aria-hidden="true"></i>
                        <h3>Passo 1</h3>
                        <p>Preencha o formulário abaixo e envie sua solicitação</p>
                    </div>
                    <div class="passo-info">
                        <p>Aguarde o e-mail.</p>
                        <div class="linha-passo"></div>
                        <p style="visibility: hidden;"></p>
                    </div>
                    <div class="passo-card">
                        <i class="fa fa-home fa-5x" aria-hidden="true"></i>
                        <h3>Passo 2</h3>
                        <p>Pronto!</br>E-mail chegou ok </p>
                    </div>
                    <div class="passo-info">
                        <p>E-mail não chegou.</p>
                        <div class="linha-passo"></div>
                        <p style="visibility: hidden;"></p>
                    </div>
                    <div class="passo-card">
                        <i class="fa fa-money fa-5x" aria-hidden="true"></i>
                        <h3>Passo 3</h3>
                        <p>Não chegou!</br>
                            Enviar novamente com outro e-mail !</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-5">
        <section id="sec-recomendacoes">
            <div class="container">
                <h2>Termos e condições</h2>
                <ul>
                    <li>O responsável deverá preencher <b>todos os dados corretamente !</b></br></li>
                    <li>Ao digitar <b>o cep correto, será preenchido automaticamente !</b></br></li>
                </ul>
                <div class="container oque-contain oque-conteudo">
                    <i class="fa fa-arrow-down fa-5x text-blue" aria-hidden="true"></i>
                </div>
            </div>
        </section>
    </div>

    <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-6">

        <div class="container">
            <form id="formCadastro">
                <section id="sec-form">
                    <div class="form-inputs">
                        <div class="form-contain">
                            <h1>Formulário para solicitação de teste</h1>
                            </ br>
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab subtitle">
                                <h3>
                                    Informações do responsável
                                </h3>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="nome"
                                                placeholder="NOME DO RESPONSÁVEL" name="nome">
                                            <label for="nome" class="form-label margin-label">NOME DO
                                                RESPONSÁVEL</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="telefone" placeholder="TELEFONE"
                                                name="telefone" maxlength="15">
                                            <label for="telefone"
                                                class="form-label telefone margin-label">TELEFONE</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="email" class="form-control" id="email" placeholder="E-MAIL"
                                                name="email">
                                            <label for="email" class="form-label margin-label">E-MAIL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h3>
                                    Informações
                                </h3>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control"
                                                placeholder="NOME DO ESTABELECIMENTO:" id="nome_estabelecimento"
                                                name="nome_estabelecimento">
                                            <label for="inputEstabelecimento" class="margin-label">NOME DO
                                                ESTABELECIMENTO</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control cep" id="cep" placeholder="CEP"
                                                name="cep" onChange="getCEP()">
                                            <label for="inputCep" class="form-label margin-label">CEP</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="endereco" placeholder="ENDEREÇO"
                                                name="endereco">
                                            <label for="inputEndereco" class="form-label margin-label">ENDEREÇO</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="numero" placeholder="NÚMERO"
                                                name="numero">
                                            <label for="inputNumero" class="form-label margin-label">NÚMERO</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="complemento"
                                                placeholder="COMPLEMENTO" name="complemento">
                                            <label for="inputComplemento"
                                                class="form-label margin-label">COMPLEMENTO</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="bairro" placeholder="BAIRRO"
                                                name="bairro">
                                            <label for="inputBairro" class="form-label margin-label">BAIRRO</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="cidade" placeholder="CIDADE"
                                                name="cidade">
                                            <label for="inputCidade" class="form-label margin-label">CIDADE</label>
                                        </div>
                                        <div class="form-floating col-md-12">
                                            <input type="text" class="form-control" id="estado" placeholder="ESTADO"
                                                name="estado">
                                            <label for="inputEstado" class="form-label margin-label">ESTADO</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <div style="overflow:auto;">
                                    <div style="float:right; margin-top: 5px;">
                                        <button type="button" class="previous">Voltar</button>
                                        <button type="button" class="next">Avançar</button>
                                        <button type="button" id="btn-enviar-formulario" class="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step">1</span>
                                <span class="step">2</span>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        </section>
    </div>

    <section id="contatos">
        <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-7">
            <div class="container">
                <h2>Contato</h2>
                <div class="row">
                    <div class="contatos-contain">
                        <div class="contato-sat">
                            <h3>LCAM</h3>
                            <p id='footer'>
                                Email: comercial@lcaminformatica.com.br<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer-amp">
        <footer class="jsx-1268163409" style="padding: 0 0 41px 0 !important;">
            <div class="endereco">
                <p>Copyright © <span id="ano"></span> LCAM INFORMÁTICA.</p>
            </div>
            </div>
        </footer>
    </section>

    <!-- load JS files -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script> <!-- https://popper.js.org/ -->
    <script src="js/bootstrap.min.js"></script> <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script> <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script> <!-- http://kenwheeler.github.io/slick/ -->

    <script>
    const ano = document.getElementById("ano");
    const anoAtual = new Date();
    ano.innerHTML = anoAtual.getFullYear();
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="js/multi-form.js?v2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script type="text/javascript">
    function getCEP() {
        let cep = document.getElementById("cep").value;
        qtCep = cep.length;
        if (qtCep === 9) {

            regCep = regexCEP(cep);
            var url = "https://viacep.com.br/ws/" + cep + "/json/";
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", url, false);
            xhttp.send();

            var data = JSON.parse(xhttp.responseText);
            if (!data.erro == true) {
                document.getElementById("endereco").value = data.logradouro;
                document.getElementById("bairro").value = data.bairro;
                document.getElementById("cidade").value = data.localidade;
                document.getElementById("estado").value = data.uf;
            }
        }
    }

    function regexCEP(cep) {
        const regex = new RegExp('[0-9]', 'gm')
        const str = cep;
        let m;
        while ((m = regex.exec(str)) !== null) {
            if (m.index === regex.lastIndex) {
                regex.lastIndex++;
            }
        }
        return m;
    }

    $(function() {
        $("#data").datepicker({
            minDate: 1,
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
            dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
                'Setembro', 'Outubro', 'Novembro', 'Dezembro'
            ],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out',
                'Nov', 'Dez'
            ],
            nextText: 'Proximo',
            prevText: 'Anterior',
        })
    });

    //MASCARA CEP
    $('.cep').mask(('00000-000'));

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

    $(document).ready(function() {
        var val = {
            // Specify validation rules
            rules: {
                nome: "required",
                nome_estabelecimento: "required",
                endereco: "required",
                numero: "required",
                complemento: "required",
                bairro: "required",
                cidade: "required",
                estado: "required",
                cep: "required",
                telefone: {
                    required: true,
                    minlength: 13
                },
                email: {
                    required: true,
                    email: true
                }
            },
            // Specify validation error messages
            messages: {
                nome: "*Preenchimento obrigatório!",
                nome_estabelecimento: "*Preenchimento obrigatório!",
                endereco: "*Preenchimento obrigatório!",
                numero: "*Preenchimento obrigatório!",
                complemento: "*Preenchimento obrigatório!",
                bairro: "*Preenchimento obrigatório!",
                cidade: "*Preenchimento obrigatório!",
                cep: "*Preenchimento obrigatório!",
                estado: "*Preenchimento obrigatório!",
                email: {
                    required: "*Preenchimento obrigatório!",
                    email: "Insira um e-mail válido!",
                },
                telefone: {
                    required: "*Preenchimento obrigatório!",
                    minlength: "Deve possuir no mínimo 13 dígitos!"
                }
            }
        }

        $("#formCadastro").multiStepForm({
            validations: val,
        }).navigateTo(0);

        $('#btn-enviar-formulario').click(function() {
            $.ajax({
                type: "POST",
                url: "include/dataController.php",
                data: {
                    "nome": $('#nome').val(),
                    "nome_estabelecimento": $('#nome_estabelecimento').val(),
                    "endereco": $('#endereco').val(),
                    "numero": $('#numero').val(),
                    "complemento": $('#complemento').val(),
                    "bairro": $('#bairro').val(),
                    "cidade": $('#cidade').val(),
                    "cep": $('#cep').val(),
                    "estado": $('#estado').val(),
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
    });
    </script>

</body>

</html>