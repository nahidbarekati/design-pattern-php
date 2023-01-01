<?php
require __DIR__ . './../vendor/autoload.php';
// use App\Patterns\Singleton;
use App\Patterns\Strategy;
use App\Patterns\Zarinpal;
use App\Patterns\Observer\Publisher;
use App\Patterns\Observer\Service;

ini_set('display_errors', 1);


$notify = new Publisher();



$mail = new Service('MailObserver' , 30);
$clock = new Service('ClockObserver' , 60);
$desktop = new Service('DesktopObserver' , 50);
$icons = new Service('IconsObserver' , 20);

$notify->register($mail);
$notify->register($clock);
$notify->register($desktop);
$notify->register($icons);


$notify->setEvent('do something ...');


$notify->unregister($mail);

$notify->setEvent('something else ...');




/** strategy pattern call*/


// $payment = new Strategy();
// $payment->setGateway(new Zarinpal());
// $payment->addInfo([ 'name' => 'nahid' , 'price' => 1000 ]);
// var_dump($payment->pay());


/** strategy pattern call*/



/** singleton pattern call*/
// $singleton = new Singleton('Nahid','Barekati');
// echo $singleton->fullname();
/** singleton pattern call*/

