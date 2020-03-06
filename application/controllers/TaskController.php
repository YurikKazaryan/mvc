<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class TaskController extends Controller
{
  public function indexAction() {
    try {
      $model = $this->model->getTasks();
      $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
      $rpp = 3;
      $offset = ($currentPage - 1) * $rpp;
      $totalPages = ceil(count($model) / $rpp);

      if ($currentPage > $totalPages) {
        $currentPage = $totalPages;
        $offset = ($currentPage - 1) * $rpp;
      }

      if ($currentPage <= 0) {
        $currentPage = 1;
        $offset = ($currentPage - 1) * $rpp;
      }

      $model = $this->model->getLimitedTasks($offset, $rpp);
    } catch (Exception $e) {
      exit($e->getMessage());
    }

    $this->view->render('Список задач', [
      'model' => $model,
      'totalPages' => $totalPages,
      'currentPage' => $currentPage
    ]);
  }

  public function createAction() {
    if (!empty($_POST)) {
      if ($this->model->save($_POST)) {
        $this->view->message(200, 'Задача успешно добавлена!', '/');
      }
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
