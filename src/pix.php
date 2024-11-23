<?php
 require_once '../vendor/autoload.php';
 require_once './constant.php';

    use MercadoPago\Client\Common\RequestOptions;
    use MercadoPago\Client\Payment\PaymentClient;
    use MercadoPago\Exceptions\MPApiException;
    use MercadoPago\MercadoPagoConfig;

    MercadoPagoConfig::setAccessToken("TEST-7596408546879562-112220-318ba99b4593f43f5e0cd612c7707803-2111639283");
    MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);


  $request_options = new RequestOptions();
  $request_options->setCustomHeaders(["X-Idempotency-Key: 2354356-56456"]);
  //echo "Price: " . $_POST['price']; 
$test = $_POST['price'];
//echo "price II: ", $test;
  $transaction_amount = isset($_POST['price']) ? floatval($_POST['price']) : 0;
  $preise = floatval($_POST['price']);
  //var_dump($preise);
//var_dump($transaction_amount);
//var_dump($_POST['price']);

  $createRequest = [
    "payer" => [
        "entity_type" => "individual",
        "type" => "customer",
        "email" => "jago@jagosolutions.com",// $_POST['email'],
        "identification" => [
            "type" =>  "CPF",
            "number" => "95749019047"
        ]
    ],
    "payment_method_id" => "pix",
    "token" => "ff8080814c11e237014c1ff593b57b4d",
    "transaction_amount" => $preise,
];

try{
    $client = new PaymentClient();
    $payment = $client->create($createRequest, $request_options);
}catch(MercadoPago\Exceptions\MPApiException $e){
    echo 'API Error: ' . $e->getMessage() .PHP_EOL;
    print_r($e->getApiResponse());
}

//var_dump($payment->transaction_amount);
// var_dump($payment->point_of_interaction->transaction_data->qr_code_base64);
// var_dump($payment->point_of_interaction->transaction_data->qr_code);
// var_dump($payment->id);



$dados = [
    'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64,
    'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
    'payment_id' => $payment->id,
    'valor' => $preise,
    'produto' => 'a definir'

];

include 'prepayment.php'


?>
