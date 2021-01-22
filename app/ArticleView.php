<?php


namespace App;


class ArticleView extends core\CoreView
{


    public function showAllArticle($articles)
    {
        echo $this->twig->render('/back/layout.twig', ['message' => 'Привет !! Я метод index() класса CoreController', 'articles'=>$articles]);
    }

}