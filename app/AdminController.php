<?php


namespace App;


use Core\AuthClass;

class AdminController
{
    public $article;
    public function __construct()
    {
        $this->article = new ArticleModel('article');
        if (!AuthClass::checkAuth())
        {

        }
    }
}