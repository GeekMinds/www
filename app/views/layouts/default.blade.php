<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GeekMinds Es una comunidad de creativos, el mejor talento de guatemala en freelancers">
    <meta  name="keywords" content="freelancer, contrata, guatemala, plataforma para freelancers de guatemala ">
    <meta name="author" content="@r0b3rtio">
    <title>GeekMinds Community of Creativity | Freelancers Guatemala</title>

  <!-- core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> Necesitas Ayuda | +502 2339 5442</p></div>
                    </div>
                    <div class="col-sm-5 col-xs-4">
                        <div class="top-number login"><p><i class=""></i> <a href="/registro" title="Nuevo Registro en GeekMinds">Registro</a> | <a href="/login" title="Ingresa a la Plataforma GeekMinds">Login</a> </p></div>
                    </div>
                    <div class="col-sm-3 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/geekminds"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/geekmindsgt"><i class="fa fa-twitter"></i></a></li>
                                <!--<li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
                                <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form" action="/buscar" method="POST">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <!--nav -->
          <nav class="navbar navbar-inverse" role="banner">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <h1><a class="navbar-brand" href="/"><img src="/images/logo.jpg" alt="GeeMinds Guatemala"></a></h1>
                  </div>

                  <div class="collapse navbar-collapse navbar-right">
                      <ul class="nav navbar-nav">
                          <li @if(Request::url() === 'http://geekminds.dev')  class="active" @endif ><a href="/" title="Inicio">Inicio</a></li>
                          <li @if(Request::segment(1) === 'como-funciona')  class="active" @endif ><a href="/como-funciona">Como Funciona</a></li>
                          <li @if(Request::segment(1) === 'quiero-trabajar')  class="active" @endif ><a href="/quiero-trabajar">Quiero trabajar</a></li>
                          <li @if(Request::segment(1) === 'quiero-contratar')  class="active" @endif ><a href="/quiero-contratar">Quiero Contratar</a></li>
                          <li ><a href="http://blog.geekminds.gt">Blog</a></li>
                          <li @if(Request::segment(1) === 'contacto')  class="active" @endif ><a href="/contacto">Contact</a></li>
                      </ul>
                  </div>
              </div><!--/.container-->
          </nav>
        <!--/nav-->

    </header><!--/header-->

      @yield('slider')

      @yield('featured')

      @yield('recent-work')

      @yield('services')

      @yield('middle')

      @yield('content')

      @yield('partners')

      @yield('contact-rapid')


    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="http://www.geekminds.gt/" title="GeekMinds Community of Creativity">GeekMinds Guatemala</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/contacto">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/wow.min.js"></script>
</body>
</html>
