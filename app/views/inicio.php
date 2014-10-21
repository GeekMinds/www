<!DOCTYPE html>
<html>
  <head>
    <script src="js/jquery.min.js"></script>
    <script src="js/kickstart.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/kickstart.css" media="all" />
    <link rel="stylesheet" href="style.css" media="all" />
    <title>GeekMinds Guatemala | Comunidad Frelancers</title>
  </head>
  <body>
    <div id="header">
      <nav class="main-nav">
        <h1>
          <a href="javascript:void(0)"class="" title="GeekMinds | Community Of Creativity "><img src="imagenes/logo.jpg" alt="GeekMinds Guatemala | Comunidad Frelancers"/></a>
        </h1>
        <ul class="navbar-list">
          <li class="first navbar-item"><a href="">Como Funciona</a></li>
          <li class="navbar-item"><a href="">Quiero Contratar</a></li>
          <li class="last navbar-item"><a href="">Quiero Trabajar</a></li>
        </ul>
      </nav>
    </div>
    <script>
      (function () {

          // Create mobile element
          var mobile = document.createElement('div');
          mobile.className = 'navbar-mobile';
          document.querySelector('.main-nav').appendChild(mobile);

          // hasClass
          function hasClass(elem, className) {
              return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
          }

          // toggleClass
          function toggleClass(elem, className) {
              var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
              if (hasClass(elem, className)) {
                  while (newClass.indexOf(' ' + className + ' ') >= 0) {
                      newClass = newClass.replace(' ' + className + ' ', ' ');
                  }
                  elem.className = newClass.replace(/^\s+|\s+$/g, '');
              } else {
                  elem.className += ' ' + className;
              }
          }

          // Mobile nav function
          var mobileNav = document.querySelector('.navbar-mobile');
          var toggle = document.querySelector('.navbar-list');
          mobileNav.onclick = function () {
              toggleClass(this, 'navbar-mobile-open');
              toggleClass(toggle, 'navbar-active');
          };
      })();
    </script>
  </body>
</html>
