<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class TaskController extends Controller
{
  public function indexAction() {
    $model = [
      [
      'title' => 'Task 1',
      'description' => 'Task desc 1',
      'status' => 'Done'
      ],
      [
      'title' => 'Task 2',
      'description' => 'Task desc 2',
      'status' => 'In progress'
      ]
    ];

    $this->view->render('Список задач', [
      'model' => $model
    ]);
  }

  public function createAction() {
    $this->view->render('Добавить задачу');
  }

  public function updateAction() {
    $this->view->render('Обновить задачу');
  }

  public function deleteAction() {
    $this->view->render('Удалить задачу');
  }
}
