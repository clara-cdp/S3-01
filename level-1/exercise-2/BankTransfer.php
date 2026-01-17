<?php

class BankTransfer implements PaymentGateway
{
    public function sendAmount(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}
