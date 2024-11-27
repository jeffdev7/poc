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

  <title>Form Checkout</title>
</head>
<body class="center-form">

<?php
    include_once './header.php'
?>

  <form id="form-checkout" action="pix.php" method="post">
    <div class="form-section">
    <div class="form-group">
        <label for="form-checkout__payerFirstName">Valor</label>
        <input id="form-checkout__payerFirstName" name="price" type="number"  min="0" 
        step="0.01" placeholder="Digite o valor" required>
      </div>
      <div class="form-group">
        <label for="form-checkout__payerFirstName">Nome</label>
        <input id="form-checkout__payerFirstName" name="payerFirstName" type="text" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="form-checkout__payerLastName">Sobrenome</label>
        <input id="form-checkout__payerLastName" name="payerLastName" type="text" placeholder="Digite seu sobrenome" required>
      </div>
      <!-- <div class="form-group">
        <label for="form-checkout__email">E-mail</label>
        <input id="form-checkout__email" name="email" type="email" placeholder="Digite seu e-mail" required>
      </div> -->
      <!-- <div class="form-group">
        <label for="form-checkout__identificationType">Tipo de documento</label>
        <select id="form-checkout__identificationType" name="identificationType" required>
          <option value="" disabled selected>Selecione</option>
          <option value="CPF" name="cpf">CPF</option>
          <option value="RG" name="rg">RG</option>
        </select>
      </div>
      <div class="form-group">
        <label for="form-checkout__identificationNumber">Número do documento</label>
        <input id="form-checkout__identificationNumber" name="identificationNumber" type="text" placeholder="Digite o número" required>
      </div> -->
    </div>

    <div class="form-footer">
      <input type="hidden" name="transactionAmount" id="transactionAmount">
      <input type="hidden" name="description" id="description" value="Nome do Produto">
      <button type="submit" class="btn-submit">Pagar</button>
    </div>
  </form>

  <!-- Footer Section -->


<?php include_once './footer.php'?>
</body>
</html>
