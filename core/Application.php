<?php
require_once '../core/contracts/RunnableInterface.php';
require_once '../core/contracts/BootstrapInterface.php';
require_once '../core/contracts/ContainerInterface.php';
require_once '../core/Router.php';

class Application extends Router implements RunnableInterface, BootstrapInterface, ContainerInterface
{
    public function getIntstance()
    {
        return new Application();     // ? правильно ли?
    }

    public function get()
    {
        //..
    }

    public function has()
    {
        //..
    }

    public function run()
    {
        $this->route();
    }

    public function bootstrap()
    {
        //..
    }
}