<?php


namespace App;


class ArticleView extends core\CoreView
{


    public function showAllArticle($articles)
    {
        echo $this->twig->render('/front/indexpage.php', ['message' => 'Привет !! Я метод index() класса CoreController', 'articles'=>$articles]);
    }

    public function showSingleArticle($article, $category)
    {
        echo $this->twig->render('/front/grand.php',['article'=>$article, 'category'=>$category]);

    }

}