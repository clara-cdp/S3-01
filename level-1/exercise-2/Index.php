<?php

require_once('PaymentGateway.php');
require_once('BankTransfer.php');
require_once('PaypalPaymentGateway.php');
require_once('PaymentProcessor.php');
require_once('StripePaymentGateway.php');

$bankTranferPayment = new BankTransfer();
$payPalPayment = new PaypalPaymentGateway();
$stripePayment = new StripePaymentGateway();

$bankTranferPayment = new PaymentProcessor($bankTranferPayment);
echo $bankTranferPayment->procesarPago(246.73);
echo "<hr>";

$payPalPayment = new PaymentProcessor($payPalPayment);
echo $payPalPayment->procesarPago(30000.50);
echo "<hr>";

$stripePayment = new PaymentProcessor($stripePayment);
echo $stripePayment->procesarPago(3.00);
echo "<hr>";
