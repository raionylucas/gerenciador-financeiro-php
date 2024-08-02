<?php

namespace src\controllers;

use \core\Controller;
use src\models\Item;

class HomeController extends Controller
{

    public function index()
    {

        $items = Item::select()->execute();
        $this->render('home');
        $this->renderPartial('cards', ['items' => $items]);

        $this->renderPartial('form');
        $this->renderPartial('table', ['items' => array_reverse($items)]);
    }
}
