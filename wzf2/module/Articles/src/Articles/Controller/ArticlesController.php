<?php

namespace Articles\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ArticlesController extends AbstractActionController {

   // protected $articlesTable;

    public function indexAction() {
       return new ViewModel(array('message'=>"Bonjour le monde")); 
    }

}