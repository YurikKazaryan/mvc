<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class TaskController extends Controller
{
  public function indexAction() {    
    $model = $this->model->getTasks();

    $this->view->render('Список задач', [
      'model' => $model
    ]);
  }

  public function createAction() {
    if (!empty($_POST)) {
      $this->view->message(200, 'Задача успешно добавлена');
    }
    $this->view->render('Добавить задачу');
  }

  public function updateAction() {
    $this->view->render('Обновить задачу');
  }

  public function deleteAction() {
    $this->view->render('Удалить задачу');
  }
}
