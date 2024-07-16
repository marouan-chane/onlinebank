<?php
    require_once 'stripe-php/init.php';
    $stripe_secret_key = "sk_test_51PUEudBOnnOlV5RHyTPuzTbaHJxFi2Ew7QMalE5H3ef9IaA9D3zgGDr3UrKLIpeDIn7wrsVp9jTWekugrYR1AaxH00I8uYiHyx";
    \Stripe\Stripe::setApiKey($stripe_secret_key);
    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost/Success.html",
        "cancel_url" => "http://localhost/Authentication.php",
        "locale" => "auto",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "usd",
                    "unit_amount" => 2000,
                ]
            ]     
        ]
    ]);
http_response_code(303);
header("Location: " . $checkout_session->url);
?>