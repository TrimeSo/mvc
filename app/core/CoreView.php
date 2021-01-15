<?php


namespace App\core;

use Twig;
class CoreView
{
    public $loader;
    public $twig;
    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($this->loader, ['debug' => true, 'autoescape' => false ]);
    }



}