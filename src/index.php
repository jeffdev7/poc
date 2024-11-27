<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="logo-jago.ico">
  <title>Wedding List</title>
</head>

<body>

  <!-- Navigation Bar -->
  <?php
    include_once './header.php'
?>

  <!-- Hero Section -->
  <section class="hero">
    <img src="goku_chichi.jpg" alt="Hero Image" class="hero-image">
  </section>

<!-- Title Section Above the Cards -->
<section class="text-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="text-center responsive-title">Contribua com a nossa lista de presentes</h3>
      </div>
    </div>
  </div>
</section>

<!-- Cards Section -->
<section class="card-container">
  <div class="container">
    <div class="row">
      <!-- First Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
          <img src="italy.jpg" class="card-img-top" alt="Card image" height="600">
          <div class="card-body">
            <h5 class="card-title">Lua de mel/Viagem</h5>
            <p class="card-text">Colabore conosco a comprar Euros para a nossa viagem de lua de mel.</p>
            <p>&#8364; 1 = R$6,12</p>
            <a href="payment.php" class="btn btn-primary">Contribute</a>
          </div>
        </div>
      </div>

      <!-- Second Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
          <img src="ape.jpg" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Casa</h5>
            <p class="card-text">Colabore conosco para as compras do mês e mobilia.</p>
            <a href="payment.php" class="btn btn-primary">Contribute</a>
          </div>
        </div>
      </div>
      <!-- Third Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
          <img src="stream.jpg" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Streaming & serviços</h5>
            <p class="card-text">Colabore conosco para serviços de stream e Gympass.</p>
            <a href="payment.php" class="btn btn-primary">Contribute</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<?php
    include_once './footer.php'
?>

</body>

</html>