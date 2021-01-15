<?php


namespace App;

use App\ArticleView as View;
use App\ArticleModel as Model;
use Core\CoreController;

class ArticleController extends CoreController
{

    public function __construct()
    {
        $this->View = new View();
        $this->Model = new Model('article');
    }

    public function index()
    {
        $articles = $this->Model->getAll();
        $this->View->showAllArticle($articles);
    }
}