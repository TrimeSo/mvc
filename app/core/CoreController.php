<?php

namespace Core;

use Core\CoreModel as Model;
use  App\core\CoreView as View;
class CoreController
{
    public $Model;
    public $View;

    public function __construct()
    {
        $this->View = new View();
        $this->Model = new Model('article');

    }

    public  function index()
    {
        $articles = $this->Model->getAll();

        echo $this->View->twig->render('/back/layout.twig', ['message' => 'Привет !! Я метод index() класса CoreController', 'articles'=>$articles]);
    }


}