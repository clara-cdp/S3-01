<?php

class PayPalPaymentGateway implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}
