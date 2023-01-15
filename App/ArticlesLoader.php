<?php
namespace ElectronApp;
/**
 * Created by PhpStorm.
 * User: Luditel 3CX Server
 * Date: 3/31/2016
 * Time: 8:25 PM
 */
class ArticlesLoader
{
    public $titre;
    public $soustitre;
    public $contenu;

    function __construct($id)
    {
        $database = new Database();
        $articleHtml = $database->requettesArticle($id);
        $this->titre = $articleHtml[0]->titre;
        $this->soustitre = $articleHtml[0]->soustitre;
        $this->contenu =  $articleHtml[0]->contenu;
    }
}