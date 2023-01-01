<?php
namespace App\Patterns;

interface Gateway {
    public function setInfo($info);
    public function pay();
}


class Zarinpal implements Gateway {

    protected $info;

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function pay()
    {
        return $this->info;
    }
    
}

class Melat implements Gateway {
    protected $info;

    public function setInfo($info)
    {
        
        $this->info = $info;
    }

    public function pay()
    {
        return $this->info;
    }
}

class Strategy {
    protected $gateway;


    public function setGateway(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function addInfo($info)
    {
        $this->gateway->setInfo($info);
    }

    public function pay()
    {
        return $this->gateway->pay();
    }
}

// $payment = new Payment();
// $payment->setGateway(new Zarinpal());
// $payment->addInfo([ 'name' => 'nahid' , 'price' => 1000 ]);
