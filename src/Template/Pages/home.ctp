<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>SISET</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/Bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" type="text/css" href="class/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="shortcut icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style type="text/css">
    .corpo{
        padding: 0px !important;  
        width: 100% !important;  
    }

    .header_area {
        position: absolute;
        width: 160%;
        z-index: 9999;
        background: #ffffff;
        margin-left: -33%; 
        padding-left: 10%; 
        padding-right: 10%;
        
    }
    .header_area .menu_nav {
        width: 100%; }
    .header_area .navbar {
        background: transparent;
        padding: 0px;
        border: 0px;
        border-radius: 0px;
        width: 100%; }
    .header_area .navbar .nav .nav-item {
        margin-right: 45px; }
    .header_area .navbar .nav .nav-item .nav-link {
        font: 500 14px/100px "Rubik", sans-serif;
        text-transform: uppercase;
        color: #000000;
        padding: 0px;
        display: inline-block; }
     .header_area .navbar .nav .nav-item .nav-link:after {
        display: none; }
     .header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
        color: #fd7e14; }
    .header_area .navbar .nav .nav-item.submenu {
        position: relative; }
    .header_area .navbar .nav .nav-item.submenu ul {
        border: none;
        padding: 0px;
        border-radius: 0px;
        box-shadow: none;
        margin: 0px;
        background: #fff; }
    @media (min-width: 992px) {
        .header_area .navbar .nav .nav-item.submenu ul {
              position: absolute;
              top: 120%;
              left: 0px;
              min-width: 200px;
              text-align: left;
              opacity: 0;
              transition: all 300ms ease-in;
              visibility: hidden;
              display: block;
              border: none;
              padding: 0px;
              border-radius: 0px;
              box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.1); } }
          .header_area .navbar .nav .nav-item.submenu ul:before {
             content: "";
             width: 0;
             height: 0;
             border-style: solid;
             border-width: 10px 10px 0 10px;
             border-color: #eeeeee transparent transparent transparent;
             position: absolute;
             right: 24px;
             top: 45px;
             z-index: 3;
             opacity: 0;
             transition: all 400ms linear; }
          .header_area .navbar .nav .nav-item.submenu ul .nav-item {
             display: block;
             float: none;
             margin-right: 0px;
             border-bottom: 1px solid #ededed;
             margin-left: 0px;
             transition: all 0.4s linear; }
          .header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
              line-height: 45px;
              color: #000000;
              padding: 0px 30px;
              transition: all 150ms linear;
              display: block;
              text-transform: capitalize;
              margin-right: 0px; }
          .header_area .navbar .nav .nav-item.submenu ul .nav-item:last-child {
              border-bottom: none; }
          .header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link {
              color: #fff; }
        @media (min-width: 992px) {
            .header_area .navbar .nav .nav-item.submenu:hover ul {
                 visibility: visible;
                opacity: 1;
                 top: 100%; } }
            .header_area .navbar .nav .nav-item.submenu:hover ul .nav-item {
                margin-top: 0px; }
            .header_area .navbar .nav .nav-item:last-child {
                margin-right: 0px; }
            .header_area.navbar_fixed .main_menu {
                position: fixed;
                width: 100%;
                top: -70px;
                left: 0;
                right: 0;
                background: #ffffff;
                transform: translateY(70px);
                transition: transform 500ms ease, background 500ms ease;
                -webkit-transition: transform 500ms ease, background 500ms ease;
                box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.1); }
            .header_area.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
                line-height: 70px; }
        @media (min-width: 992px) {
            .header_area.white_menu .navbar .navbar-brand img {
                display: none; }
            .header_area.white_menu .navbar .navbar-brand img + img {
                display: inline-block; } }
        @media (max-width: 991px) {
            .header_area.white_menu .navbar .navbar-brand img {
                display: inline-block; }
            .header_area.white_menu .navbar .navbar-brand img + img {
                display: none; } }
            .header_area.white_menu .navbar .nav .nav-item .nav-link {
                color: #fff; }
            .header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img {
                display: inline-block; }
            .header_area.white_menu.navbar_fixed .main_menu .navbar .navbar-brand img + img {
                display: none; }
            .header_area.white_menu.navbar_fixed .main_menu .navbar .nav .nav-item .nav-link {
                line-height: 70px;
                color: #000000; }
            .altura_cards{
                height: 87.5% !important;
            }    
</style>
<body>
    <!--================ Start Header Area =================-->

    <header class="header_area ">
        <div class="main_menu">
            <nav class="cor navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <img class="animated fadeInDown img-responsive" src="img/logo1.png" alt="" style="margin-top: 1.5%;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="logo" style="margin-top: 1.7%;"><strong style="color: #000000;">ESCOLA DE ENSINO MÉDIO EM TEMPO INTEGRAL<br><div style="margin-left: 20%;">CAPELÃO FREI ORLANDO<br>
                    </div><div style="margin-left:27%; font-size: 0.75em; ">Código-MEC: 23264640</div></strong></span>
                    <!-- Collect the nav links, forms, and other content faor toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="cor-menu nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item"><a class="nav-link" href="#inicio">INÍCIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#infor">INFORMAÇÕES</a></li>
                            <li class="nav-item"><a class="nav-link" href="#entrar">ENTRAR</a></li>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#contatos">CONTATOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    </div>
    </div>
    <!--<header class="header_area">hhdrysc\TR FYF 
        <div class="main_menu">
            <nav class="cor larg  m-0 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid corpo">
                     Brand and toggle get grouped for better mobile display 
                    <img class="animated fadeInDown img-responsive" src="img/logo1.png" alt="">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="logo"><strong>EEMTI Capelão Frei Orlando</strong></span>
                    Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="cor-menu nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item"><a class="nav-link" href="#inicio">INÍCIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#infor">INFORMAÇÕES</a></li>
                            <li class="nav-item"><a class="nav-link" href="#entrar">ENTRAR</a></li>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#contato">CONTATOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header> -->
    <!--================ End Header Area =================-->

    <!--================ Start Home Banner Area =================-->
    <div class="container">
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase">Hello</h3>
                            <h1 class="text-uppercase animated bounceInLeft">Bem-Vindo ao SISET</h1>
                            <h5 class="text-uppercase">Sistema de Escolha de Eletivas</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="#infor"><span>Saiba mais</span></a>
                                <a class="primary_btn tr-bg" href="#entrar"><span>Entrar</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="animated fadeInRight" src="img/home-right.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features_area"id=infor>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Benefícios do sistema</h2>
                        <p>
                            Perceba abaixo as vantagens que este sistema está gerando<br>Para a Escola de Tempo Integral Capelão Frei Orlando
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item altura_cards">
                        <img src="img/services/s1.png" alt="">
                        <h4>Facilidade de acesso</h4>
                        <p>O Estudante escolhe de forma simples e direta a disciplina que pretende estudar</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item altura_cards">
                        <img src="img/services/s2.png" alt="">
                        <h4>Mais Integração</h4>
                        <p>Os estudantes estão cada vez mais integrados com a utilização deste distema</p><br>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item altura_cards">
                        <img src="img/services/s3.png" alt="">
                        <h4>Flexibilidade ampliada</h4>
                        <p>É possivel remover ou adicionar um novo estudante com muito mais facildiade</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item altura_cards">
                        <img src="img/services/s4.png" alt="">
                        <h4>Mais Agilidade </h4>
                        <p >Agora é possivel gerar o relatório de todas as turmmas de forma muito mais otimizada</p>
                    </div>
                </div >

            </div>
            <div id="entrar"></div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <div class="main_title" >
                        <h2>Faça login no sistema</h2>
                        <p>Escolha um dos usuários abaixo para fazer no login no siset<br>
                            Em seguida preencha as informações soliticatas</p>
                    </div>
<section class="content" >

                <div class="grid grid--effect-rigel">
                    <style type="text/css">
                                .titulo{
                                    font-size:1.3em;
                                    font-weight:bold;
                                }
                                a{
                                    color: black;
                                }
                                a:hover{
                                    color: #FF8C00;
                                }
                                @media(max-width:360px){
                                    .title{
                                     font-size:1em;
                                    }
                                }
                     </style>
                    <div class="col-md-4 text-center">
                       <div class="stack__figure">
                             <img class="stack__img img-responsive" src="img/1.png" alt="Image"/>
                       </div>
                            <br>
                            <div class="titulo title title2">
                            <?= $this->Html->link('ALUNO', ['prefix' => 'aluno', 'controller' => 'alunos', 'action' => 'login'], ['escape' => false]) ?>
                            </div>
                    </div>
                   <div class="col-md-4 text-center">
                       <div class="stack__figure">
                             <img class="stack__img img-responsive" src="img/2.png" alt="Image"/>
                       </div>
                            <br>  
                            <div class="titulo title title2">
                                <?= $this->Html->link('PROFESSOR', ['prefix' => 'professor', 'controller' => 'professores', 'action' => 'login'], ['escape' => false]) ?>
                            </div>
                        
                    </div>
                    <div class="col-md-4 text-center">
                       <div class="stack__figure">
                             <img class="stack__img img-responsive" src="img/3.png" alt="Image"/>
                       </div>
                            <br>
                        <div class="titulo title title2"> 
                            <?= $this->Html->link('ADMINISTRADOR', ['prefix' => 'admin', 'controller' => 'administradores', 'action' => 'login'], ['escape' => false]) ?>
                        </div>
                    </div>
             </div>
    </section>

    <!--================ Start Newsletter Area =================-->

    <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.314581596642!2d-39.31416478464307!3d-4.351960847880929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7bf0765bb3a4da7%3A0xd251170f8d512733!2sEscola+Ensino+M%C3%A9dio+Integral+Capel%C3%A3o+Frei+Orlando!5e0!3m2!1spt-BR!2sbr!4v1551391634254" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                            <h4>Siga-nos</h4>
                        </div>
                        <div class="footer_social">
                            <a href="https://www.facebook.com/CapelaoFreiOrlando/" target="_blank"><img src="img/facebook.png"></a>
                            <a href="https://www.instagram.com/eemtifreiorlando/" target="_blank"><img src="img/instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <p style="text-align: center;">E-mail: eemtifreiorlando@escola.ce.gov.br</p>
            <p style="text-align: center;">Telefone: (85) 3343-6814</p>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<br>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | EEMTI Capelão Frei Orlando <i class="fa fa-heart-o" aria-hidden="true"></i> by Estudantes da EEEP José Vidal Alves
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/anime.min.js"></script>
        <script src="js/main.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
</div>
</body>

</html>