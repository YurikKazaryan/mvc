<?php

namespace application\lib;

use SQLite3;

class Db extends SQLite3
{
  protected $db;

  public function __construct() {
    $this->open(__DIR__ . '/../db.sqlite');
  }

  public function useQuery($sql, $params = []) {
    $statement = $this->prepare($sql);
    if (!empty($params))
      foreach ($params as $key => $value)
        $statement->bindValue(':' . $key, $value);

    $results = $statement->execute();
    $data = [];

    while ($result = $results->fetchArray(SQLITE3_ASSOC))
      $data[] = $result;

    debug($data);
    return $data;
  }
}
