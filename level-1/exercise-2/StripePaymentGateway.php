<?php

class StripePaymentGateway implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}
