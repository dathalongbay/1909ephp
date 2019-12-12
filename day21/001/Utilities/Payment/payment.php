<?php
namespace Utilities\Payment;

// nạp namespace cho trait
use Traits\Momo;
use Traits\Napas;

class Payment {

    // nạp trait đa kế thừa
    use Momo, Napas;

    public function demo() {
        echo "<br>" . __METHOD__;
    }
}