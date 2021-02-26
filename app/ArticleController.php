<?php


namespace App;

use App\ArticleView as View;
use App\ArticleModel as Model;
use Core\CoreController;

class ArticleController extends CoreController
{
    public $Articles;
    public $Categories;
    public function __construct()
    {
        $this->View = new View();
        $this->Articles = new ArticleModel('article');
        $this->Categories = new Model('categories');
    }

    public function index()
    {
        $articles = $this->Articles->getAll();
        $this->View->showAllArticle($articles);
    }
    public function singleArticle($id)
    {
        $article = $this->Articles->getById($id);
        $category = $this->Categories->getById($article['categories_id']);

//        print_r($article);
//        print_r($category);
        $this->View->showSingleArticle($article, $category);
    }
    public function page()
    {
        $count_page = $this->Articles->count();
        print_r($count_page);

        $page = $this->Articles->page(1,2);
        print_r($page);
    }


}