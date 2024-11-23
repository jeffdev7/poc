<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="center-form">
<?php
include_once './header.php'
?>
<?php
if (!isset($dados)) {
    echo "Erro: dados de pagamento não encontrados.";
    exit;
}

$produto = htmlspecialchars($dados['produto']);
$valor = htmlspecialchars($dados['valor']);
$qr_code_base64 = $dados['qr_code_base64'];
?>

<div class="payment-container pt-3">
        <div class="payment-card mb-3">
            <div class="payment-card-header">
                Pagamentos com PIX
            </div>
            <div class="payment-card-body">
                <p>Escaneie o código abaixo para efetuar o pagamento:</p>
                <p><strong>Produto:</strong> <?php echo $produto; ?></p>
                <p><strong>Valor:</strong> R$ <?php echo $valor; ?></p>
                <div class="code-row d-flex justify-content-center">
                    <img src="data:image/jpeg;base64,<?php echo $qr_code_base64 ?>" alt="QRCode" style="width: 300px;">
                </div>
            </div>
        </div>
</div>

</body>

</html>