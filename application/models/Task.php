<?php

namespace application\models;

use application\core\Model;

class Task extends Model
{
  public function getTasks() {
    $result = $this->db->useQuery('SELECT * FROM tasks');
  }
}
