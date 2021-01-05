<?php
require_once '../core/contracts/ComponentAbstract.php';


class Router extends ComponentAbstract
{
    public function route()
    {

        $uri = trim($_SERVER['REQUEST_URI'], '/');            // получаем uri
        $uriSections = explode('/', $uri);                     // получаем массив секций urn
        list($controller, $method, $param, $value) = $uriSections;      // получаем контроллер, метод, параметр и значение


        // Преобразуем название контроллера в нужный формат
        $controller = ucfirst($controller);
        $controller = 'App\Controllers\\' . $controller . 'Controller';

        // создаем экземпляр класса контроллера
        $content = new $controller;

        // вызываем запрошеннный метод
        $content->$method($param, $value);




    }


    public function bootstrap()
    {
        //..
    }
}