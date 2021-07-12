<?php
interface PaymentGetway{
    public function sendPayment($amount);
}
class PaymentProcessor{
    private $getway;
    function __construct(PaymentGetway $pg)
    {
        $this->getway = $pg;
    }
    function purchaseProduct($amount)
    {
        $this->getway->sendPayment($amount);
    }
}
class Paypal implements PaymentGetway{
    public function sendPayment($payment){
        echo "{$payment} processed paypal";
    }
}
class Strip{
    function makePayment($amount,$currency=null){
        echo "{$amount} processed by strip";
    }
}
class StripeAdapter implements PaymentGetway{
    private $strip;
    function __construct(Strip $strip)
    {
        $this->strip = $strip;
    }
    public function sendPayment($payment)
    {
        $this->strip->makePayment($payment);
    }
}
$paypal = new Paypal();
$strip  = new Strip();
$sa = new StripeAdapter($strip);
$pp = new PaymentProcessor($sa);
$pp->purchaseProduct(45);