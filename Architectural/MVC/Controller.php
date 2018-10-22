<?php

namespace DesignPatterns\Architectural\MVC;

final class Controller
{
    public function hello()
    {
        $model = new Model;
        $view = new View;

        $view->dump($model->username());
    }
}
