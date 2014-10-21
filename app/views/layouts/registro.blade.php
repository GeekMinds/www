<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GeekMinds Es una comunidad de creativos, el mejor talento de guatemala en freelancers">
    <meta name="keywords" content="freelancer, contrata, guatemala, plataforma para freelancers de guatemala ">
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    @yield('custom-script')
</head><!--/head-->

<body class="homepage">
    <header id="header">
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
                  <div class="collapse navbar-collapse navbar-right top-number">
                    <p><i class=""></i>Modulo para Registro</p>
                      <p><i class="fa fa-phone-square"></i> Necesitas Ayuda | +502 2339 5442</p>
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
