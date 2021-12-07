<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gravitacion Universal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="index.html">Gravitacion<span>U</span>niversal</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/Inercia-fisica.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">Fuerza Sobre Una Masa En Un Campo Gravitatorio</h3>
      <p align="left"><span>Física es un término que proviene del griego phisis y que significa 
        “realidad” o “naturaleza”. Se trata de la ciencia 
        que estudia las propiedades de la naturaleza con el apoyo de la matemática.</span>
      <br>
      <p align="left">La física se encarga de analizar las características de la energía, el tiempo y la materia, así como también los vínculos que se establecen entre ellos.
Por ejemplo: «Mañana tengo que rendir un examen de física»,
 «El jarrón se cayó por las leyes de la física», «Un experto en física advirtió 
 que 
un desplazamiento a esa velocidad genera un riesgo para el deportista».</p>
      </p>
      <footer></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <br>
    <h1><strong>¿Como funciona la fuerza gravitacional?</strong></h1>
    <br>
    <p><span><u>Todos los objetos son atraídos hacia la Tierra. 
        La fuerza de atracción que ejerce la Tierra sobre un objeto se llama "fuerza gravitacional". 
        Esta fuerza se dirige hacia el centro de la Tierra 
        (suponiendo que la masa de la Tierra se distribuye uniformemente) 
        y su magnitud se llama "peso" del objeto.</u></span></p>
    <br>
    <h1><strong>¿Como calcular la fuerza gravitacional?</strong></h1>
    <br>
    <p><span><u>Calcular la fuerza de gravedad entre dos objetos. Define la ecuación para la fuerza de gravedad que atrae un objeto,
         Fgrav = (G=m1*m2)/d2. Para poder calcular correctamente la fuerza gravitacional de un objeto, 
         esta ecuación tiene en cuenta las masas de ambos objetos y qué tan lejos se encuentran los objetos entre sí.</u></span></p>
    <br>
    <body ></body>
    <center><h1 style="border:4px solid SlateBlue;">
      
    <center> <h1 style="color: teal;" > <em>Fuerza sobre una masa en un campo gravitatorio </em></h1></center>
    <hr width=100%   size=10 color="#6A5ACD">
    <br>
    <div>
            <img src="https://lh3.googleusercontent.com/HfbfGo7ii6L07PZ74uCZT8ie7aG-AHfwT4nZopCrfl3eMQzea762H3VeoXPRgv-_SUjs6Q=s170" align="top" width="200" height="130">  
           
            </div>
            <br>
    <form action="{{route('calculafue')}}" method="POST">
            {{csrf_field()}}
            <div class="mb-3" class="rounded-pill border border-dark border-4" >
            </div>
            <div class="mb-3">
                <label for="gravedad" class="form-label"><h3>Gravedad (Decimal)</h3></label>
                <input type="text" class="form-control" name="gravedad" id="gravedad" >
            </div>
            <br>
            <div class="mb-3">
                <label for="masa" class="form-label"><h3>Masa (Kg)</h3></label>
                <input type="text" class="form-control" name="masa" id="masa" >
            </div>
    
            <div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
            <br>
            <a href="index.html"><h5>Pagina principal</h5></a>
    </div>
        </form>
    </div>
    <!-- ################################################################################################ -->
    <section class="group shout">
      <figure class="one_half first"><img src="images/demo/546x356.png" alt="">
        <figcaption class="heading"><a href="#">Accumsan placerat</a></figcaption>
      </figure>
      <figure class="one_half"><img src="images/demo/546x356.png" alt="">
        <figcaption class="heading"><a href="#">Scelerisque etiam</a></figcaption>
      </figure>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="services" class="hoc container clear"> 
    <!-- ################################################################################################ -->
   
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h1 class="logoname"><a href="index.html">Chill<span>a</span>id</a></h1>
      <p>Scelerisque facilisis sapien turpis facilisis libero eu viverra purus dui ac leo sed vitae diam morbi sed nibh in eget dolor phasellus rhoncus odio morbi elit nunc id elit donec elementum [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat metus nullam</h6>
      <ul class="nospace linklist">
        <li><a href="#">Sagittis leo morbi quis</a></li>
        <li><a href="#">Nulla vehicula felis laoreet</a></li>
        <li><a href="#">Pulvinar proin et eros ac</a></li>
        <li><a href="#">Mi vulputate accumsan fusce</a></li>
        <li><a href="#">At massa in sed tortor sit amet</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Tincidunt ullamcorper</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Fusce vel lectus nunc</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Lacinia donec tortor lectus varius vel egestas a dictum in odio mauris metus.</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Turpis iaculis ac hendrerit vel pretium non magna sed non metus ut at nisi morbi.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>