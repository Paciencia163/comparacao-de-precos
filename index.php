<?php
session_start();
require('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comparação de Preços</title>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include("nav.php") ?>
  <!-- /navigation -->
  
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Encontre os Melhores Preços para a Sua Cesta Básica no Lubango</h1>
          <p class="lead mb-5 text-white-50">Bem-vindo ao nosso site de comparação de preços da cesta básica no Lubango! Estamos aqui para simplificar suas compras, ajudando você a encontrar os melhores preços para os itens essenciais da sua casa. Em um mercado em constante mudança, é crucial economizar dinheiro, e é por isso que oferecemos a você uma maneira fácil e conveniente de comparar preços.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row" id="contact">
      <div class="col-md-8 mb-5">
        <h2>Benefícios</h2>
        <hr>
        <p>Economize Dinheiro: Comparamos os preços de supermercados locais para que você possa economizar em cada compra da cesta básica.</p>
        <p>Facilidade de Uso: Nosso site é intuitivo e fácil de navegar, permitindo que você encontre o que precisa rapidamente.</p>
        <p>Informações Atualizadas: Mantemos nossas informações de preços atualizadas regularmente, garantindo que você tenha acesso às últimas ofertas.</p>
        <p>Personalização: Crie listas de compras personalizadas com os itens que mais consome e veja os preços deles em diferentes lojas.</p>
        <p>Apoio à Comunidade: Ajudamos a fortalecer a economia local, incentivando compras em supermercados da região.</p>
         <a class="btn btn-primary btn-lg" href="register.php">Vamos Comparar &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contactos</h2>
        <hr>
        <address>
          <strong>Luis Pafila</strong>
          <br><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Rua do Siac
          <br>Huila - Lubango
          <br>
        </address>
        <address>
         <i class="fa fa-phone" aria-hidden="true"></i>
          (+244) 946-608-614
          <br>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <a href="#">luispafila@gmail.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/ARROZ-TIO-LUCAS-10KG.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Arroz</h4>
            <p class="card-text">O Arroz é um dos principais alimentos que nunca faltam na cesta básica de qualquer Angolano. Compare agora.</p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/ACUCAR-BRANCO-KAPANDA-CRISTAL-1KG.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Açucar</h4>
            <p class="card-text">Outro alimento indispensal para nossa mesa também é o acuçar, saiba como está o preço em diferentes loja.</p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" height="200" width="300" src="img/Capturar111.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Fuba</h4>
            <p class="card-text">A Fuba sem duvida é o mais o alimento mais consumido no dia a dia de todos os Angola
              com uma maior gama de produção nacional, saiba agora como os preços variam em diferentes lojas do Lubango.
            </p>
          </div>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Compare</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("footer.php") ?>
 <!-- /footer -->
    <!-- /.container -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
