<?php namespace App\Patterns\Observer;


interface IObserver
{
    public function update(IObservable $observable);
}