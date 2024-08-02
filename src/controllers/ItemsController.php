<?php

namespace src\controllers;

use \core\Controller;
use src\models\Item;

class ItemsController extends Controller
{

    public function createAction()
    {
        $desc = filter_input(INPUT_POST, 'description');
        $value = filter_input(INPUT_POST, 'value') ?? 0;
        $date = filter_input(INPUT_POST, 'date');
        $category = filter_input(INPUT_POST, 'category');
        $type = filter_input(INPUT_POST, 'type');

        if ($desc && $value && $date && $category && $type) {
            //Insere items na tabela
            Item::insert([
                'description' => $desc,
                'value' => $value,
                'date' => $date,
                'category' => $category,
                'type' => $type
            ])->execute();
            // Atualiza a página
            echo "Deu Certo!";
            $this->redirect('/');
        }
        echo "Deu Errado!";
    }

    public function update($args)
    {
        $item = Item::select()->find($args['id']);


        $items = Item::select()->execute();
        $this->render('home');
        $this->renderPartial('cards', ['items' => $items]);
        $this->renderPartial('formEdit', [
            'item' => $item
        ]);
        $this->renderPartial('table', ['items' => array_reverse($items)]);
    }


    public function updateAction($args)
    {
        $desc = filter_input(INPUT_POST, 'description');
        $value = filter_input(INPUT_POST, 'value') ?? 0;
        $date = filter_input(INPUT_POST, 'date');
        $category = filter_input(INPUT_POST, 'category');
        $type = filter_input(INPUT_POST, 'type');

        if ($desc && $value && $date && $category && $type) {
            //Insere items na tabela
            Item::update()
                ->set('description', $desc)
                ->set('value', $value)
                ->set('date', $date)
                ->set('category', $category)
                ->where('id', $args['id'])
                ->execute();
            // Atualiza a página
            $this->redirect('/');
        } else if ($category == "Categoria") {
            $this->redirect('/item/' . $args['id'] . '/editar');
        }
        $this->redirect('/item/' . $args['id'] . '/editar');
    }

    public function del($args)
    {
        Item::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}
