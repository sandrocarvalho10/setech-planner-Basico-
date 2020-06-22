<!DOCTYPE html>
<html lang="pt-br" id="home">
<head>
  <title>SETECH Planner</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Admin, Dashboard, Bootstrap" />
  <link rel="shortcut icon" sizes="196x196" href="assets/images/LogoSandro_SETECH_azul.png">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/core.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
  <style>
    .header{ padding: 100px 0; }
    .showcase{ padding-top: 100px; background: #eceff1; }
    .demo-item{ padding: 0 60px; margin-bottom: 100px; }
    
    .demo-img{
      background: #fff;
      box-shadow: 0 5px 10px #ccc;
      padding: 12px;
      display: block;
      border-radius: 6px;
      -webkit-transition: all .5s ease;
      transition: all .5s ease;
    }
    .demo-img:hover{ box-shadow: 0 10px 15px #ccc; -webkit-transform: scale(1.05); transform: scale(1.05); }
    @media (max-width: 480px){ .demo-item{ padding: 0 30px; } }

    .footer{ margin-top: 80px; padding-bottom: 40px; }
    .copyright{ letter-spacing: 1px; }

    .landing-page-banner{ display: block; box-shadow: 0 5px 10px #ccc; -webkit-transition: all .5s ease; transition: all .5s ease; }
    .landing-page-banner:hover{ box-shadow: 0 10px 15px #ccc; }
    
    #loading-div {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      opacity: 1;
      z-index: 9999;
      -webkit-transition: opacity 3s;
      transition: opacity 3s;
      background-color: #f3f3f3;
    }
    #loading-div img {
      display: block;
      position: absolute;
      top: calc(50% - 25px);
      left: calc(50% - 25px);
    }
    body{ height: 100%; overflow-y: hidden; }
    body.loading-done{ overflow-y: auto; }
    body .wrapper { opacity: 0; -webkit-transition: opacity .75s; transition: opacity .75s; }
    body.loading-done .wrapper { opacity: 1; }
    body.loading-done #loading-div { opacity: 0; visibility: hidden; }
  </style>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="brand-icon"><img src="assets/images/LogoSandro_SETECH_azul.png" style="width: 65px;"></span><span> Planner</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Blog <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Sobre</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" disabled>Contato <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">E-mail</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
-->
<!--
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" disabled>Submit</button>
      </form>
-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./default/login_ui.php">Acessar</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Assinar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">E-mail</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
  <div class="wrapper">
    <header class="header white">
      <div class="container">
        <div class="text-center">
          <a href="index.html"><img src="./assets/images/LogoSandro_SETECH_azul.png" alt="SETECH logo" style="width: 200px;"></a>
          <br>
          <br>
          <p>Planejamento simples e responsivo</p>
          <p class="m-t-xl m-b-0">
            <a href="./default/signup_ui.php" class="btn btn-primary fz-md">Inscreva-se</a>
          </p>
        </div>
      </div>
    </header>
    <footer class="footer">
      <p class="copyright text-center"><em>Copyright &copy; 2019 <a href="http://setech.gq/" class="fw-500 text-color">Sandro</a></em></p>
    </footer>
  </div><!-- .wrapper -->

  <div id="loading-div">
    <img src="assets/images/landing-page/puff.svg" width="50" alt="">
  </div>
  <script src="libs/bower/jquery/dist/jquery.js"></script>
  <script>
    $(function(){
      $(window).on('load', function(){
        $(document.body).addClass('loading-done');
      });
    });
  </script>
</body>
</html>