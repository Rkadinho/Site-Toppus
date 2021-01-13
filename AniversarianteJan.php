<!DOCTyPE html5>
<html lang="pt">
<html>
    <head>
        <title>toppus</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="cssToppus.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <!-- barra de navegação -->
      <nav class="navbar navbar-dark bg-primary fixed-top" style="background-color:rgb(0, 110, 255);">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <!-- Logotipo da empresa -->
            <a class="navbar-brand" href="index.php" style="color:white"><img style="width: 8%;" id="logo" src="logo.png"></a>
          </div>
          <div class="collapse navbar-collapse" id="barraDeNav">
            <ul class="nav navbar-nav">
              <li class="active" style="position: absolute; left: 10%;"><a style="color:white;" href="index.php">INÍCIO</a></li>
              <li class="disabled" style=" position:absolute; left: 16%;"><a href="#" style="color:white;">NOTÍCIAS</a></li>
              <li class="disabled" style="position: absolute; left: 24%;"><a href="#" style="color:white;">CONTATO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="disabled"><a class="disabled" href="#" style="color:white"><span class="glyphicon glyphicon-user disabled" style="color:white"></span> CADASTRAR</a></li>
              <li class="disabled"><a class="disabled" onclick="document.getElementById('id01').style.display='block'" href="#" style="color:white"><span class="glyphicon glyphicon-log-in" style="color:white"></span> ENTRAR</a></li>
            </ul>
            <!-- Futura pagina de login -->

<!--<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span> -->

  <!-- Modal Content -->
  <!-- <form method="post" class="modal-content animate" action="valida.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b id="user">USUÁRIO</b></label>
      <br>
      <input type="text" placeholder="Usuário" name="uname" style="color: black" required>

      <label for="psw"><b id="senha">SENHA</b></label>
      <br>
      <input type="password" placeholder="Senha" name="psw" style="color: black"required>

      <button type="submit" value="entrar" >Entrar</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form> -->
  <!-- futura pagina de login -->
</div>
          </div>
        </div>
      </nav>
<!-- texto da noticia -->

<h2 style="text-align:center">
Aniversariantes de janeiro
</h2>
<br>
<h4 style="text-align:center">
Felicidades aos nossos colaboradores <br> que completarão mais um ano de vida no mês de janeiro.
</h4>
<br>
<h4>
<ul>
<li>GILDERLANY LUSIMARY - SUPERVISORA - 05/01</li>
<li>ANTÔNIO VIEIRA - MESTRE DE OBRAS - 23/01</li>
</ul>
</h4>

              <!-- imagens e noticias -->
              <div class="container text-center">    
         <h3 style="position:relative;width:25%;left:37%;background-color:rgb(0, 110, 255);color:white;">OUTRAS NOTÍCIAS</h3><br>
        <div class="row">
          <div class="col-sm-4" style="border: 4px solid rgb(0, 110, 255); right: 1%;">
            <!-- primeira imagem e noticia -->
            <a href="ToppusOdonto.php"> <img src="Dental.jpg" class="img-responsive" style="width:100%;" alt="Image"> </a>
          </div>
          <!-- segunda imagem e noticia -->
          <div class="col-sm-4" style="border: 4px solid rgb(0, 110, 255);"> 
            <img src="JanBranco.jpeg" class="img-responsive" style="width:100%" alt="Image">    
          </div>
          <!-- terceira noticia -->
          <div class="col-sm-4">
            <div class="well" style="border: 4px solid rgb(0, 110, 255);">
             <ul style="text-align:left;">
             <li><a href="index.php" id="noticiasText">Aniversariantes do mês de janeiro</a></li>
             <br>
             <li><a href="index.php" id="noticiasText">Janeiro branco</a></li>
             <br>
             <li><a href="ToppusOdonto.php" id="noticiasText">Toppus cuidando dos seus colaboradores</a></li>
             </ul>
            </div>
            <!-- quarta noticia -->
            <div class="well" style="border: 4px solid rgb(0, 110, 255);">
             <p>TEXTO</p>
            </div>
          </div>
        </div>
      </div>

      <!-- link para portal do colaborador -->
      
      <button id="button" style="position:absolute;left:80%;width:20%;bottom:70%;background-color: rgb(0, 110, 255);border-radius: 4px;">
      <a style="text-decoration: none;color:white;" class="portal" href="http://topservice.rh3software.com/portalrh/WPortalRH.dll/$/">
      <i class="glyphicon glyphicon-globe"><br><br>PORTAL <br> DO <br> COLABORADOR</i></button>
      <br>
      <!-- fim do link para portal do colaborador -->
<!-- Começo do rodapé -->
<footer class="page-footer font-small cyan darken-3 rounded-lg" style="background-color: rgb(0, 110, 255);">

  <div style="background-color: rgb(6, 230, 6); height:2%;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Coluna -->
        <div class="col-md-6 col-lg-12 text-center mb-4 mb-md-0">
        </div>
      <!-- coluna azul com nome da empresa -->

      </div>
      <!-- coluna -->

    </div>
  </div>
  <!-- links do rodape -->
  <div class="container text-center text-md-left mt-5">

    <!-- coluna -->
    <div class="row mt-3">

      <!-- incio da coluna de logo -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Logo da empresa -->
        <a href="index.php"><img  href="index.php" src="logo.png" style=" width: 100%; bottom: 10%"></a>
       
      </div>

      <!-- fim da coluna do logo -->

      <!-- inicio coluna de contatos -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="left: 5%;">

        <!-- coluna de endereço/contatos -->
        <h6 class="text-uppercase font-weight-bold" style="color: white; font-weight: bolder;">Contato</h6>
        <br>
        <p style="color: white">
          <i class="glyphicon glyphicon-home" style="color: white"></i> Rua José da Silva Lucena,273
          <br>Imbiribeira-Recife-PE
          <br>51150430</p>
        <p style="color: white;">
          <i class="glyphicon glyphicon-envelope" style="color: white"> </i> toppus@toppus.net</p>
        <p style="color: white">
          <i class="glyphicon glyphicon-earphone" style="color: white"></i> 81 3033-7600</p>
        <!-- canal de ouvidoria e denuncias -->
        <p style="color: white; font-weight: bolder;">CANAL DE OUVIDORIA E DENÚNCIAS</p>
        <P style="color: white;">
        <i class="glyphicon glyphicon-earphone"></i>0800 081 7600</p>
        <!-- link para o canal de ouvidoria e denuncias -->
        <i class="glyphicon glyphicon-bullhorn" style="color: white;"></i><a id="linkOuvidoria" href="https://docs.google.com/forms/d/e/1FAIpQLSdC2THYrNN-sXXgzJU4bZQDldC26RalWj7TVbTZqwfqzvp-Dw/viewform">
        www.ouvidoria.com.br</a>
      </div>
      <!-- inicio coluna de redes sociais -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="left: 10%;">
        <h6 class="mb-0" style="color: white; font-weight: bolder;" >REDES SOCIAIS</h6>
        <br>
        <!-- logo facebook -->
        <a href="https://www.facebook.com/toppusterceirizados" class="fa fa-facebook"></a>
        <br><br>
        <!-- logo instagram  -->
        <a href="https://www.instagram.com/grupotoppus_/" class="fa fa-instagram"></a>
        <br><br>
        <!-- logo do likedin -->
        <a href="https://www.linkedin.com/company/toppusterceirizacao/" class="fa fa-linkedin"></a>      
        
        <br><br>
        <!-- logo para o site da empresa-->
        <a href="#!" class="fa fa-rss"></a>     
      </div>

    </div>
    <!-- fim das colunas -->

  

  <!-- Copyright -->
  
  <br>
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://www.instagram.com/rkadinho_/" style="color:white;">RKdinho</A>
    /
    <a href="https://mdbootstrap.com/" style="color: white;"> MDBootstrap.com</a>
  </div>
    <!-- Copyright -->

</div>
<!-- botão voltar ao topo (config no arquivo jsWeb.js) -->
<a id="subirTopo">
  <i class="glyphicon glyphicon-chevron-up"></i>
  <br>
  <p> TOPO </p>
</a>
  <!-- Copyright -->

</footer>
</div>
<!-- Fim do Rodapé -->
    <!-- link para o javaScript/JQuery -->
    <script type="text/javascript" src="jsWeb.js"></script>

</html>
<?php 

?>