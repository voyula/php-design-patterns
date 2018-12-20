<?php

namespace DesignPatterns\Architectural\MVC;

class Controller
{
    /**
     * @return void
     */
    public function hello(): void
    {
        $model = new Model;
        $view = new View;

        $view->dump($model->username());
    }
}
