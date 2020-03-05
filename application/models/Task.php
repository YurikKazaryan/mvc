<?php

namespace application\models;

use application\core\Model;

class Task extends Model
{
  public function getTasks() {
    return $this->db->useQuery('SELECT * FROM tasks');
  }

  public function save($data) {
    $result = $this->db->useInsert('INSERT INTO tasks (username, email, task_text, status, edited)
    VALUES (:username, :email, :task_text, 1, 0)', $data);

    return $result;
  }
}
