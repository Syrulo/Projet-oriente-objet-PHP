<?php
namespace App\Controllers;

use App\Controllers\AbstractController;

class NotFoundController extends AbstractController
{
    public function index() {
        $title = "This page doesn't exist ;-(";
        $template = './views/template_notfound.phtml';
        
        $this->render($template,['title'=>$title]);
    }
}