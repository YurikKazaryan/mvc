<?php
/**
 * @var $model \application\models\Task
 * @var $currentPage int
 * @var $totalPages int
 */
?>
<table class="table table-striped table-hover" style="margin-top: 15px">
  <thead class="thead-dark">
    <tr>
      <th style="cursor: pointer" onclick="Filter(this)" field="username" direction="ASC">Имя пользователя
        <span style="margin-left: 10px; margin-top: 5px; position: absolute">
          <i class="fas fa-sort-up" style="position: absolute; display: none"></i>
          <i class="fas fa-sort-down" style="position: absolute; display: none"></i>
        </span>
      </th>
      <th style="cursor: pointer" onclick="Filter(this)" field="email" direction="ASC">Email
        <span style="margin-left: 10px; margin-top: 5px; position: absolute">
          <i class="fas fa-sort-up" style="position: absolute; display: none"></i>
          <i class="fas fa-sort-down" style="position: absolute; display: none"></i>
        </span>
      </th>
      <th style="cursor: pointer" onclick="Filter(this)" field="task_text" direction="ASC">Тект задачи
        <span style="margin-left: 10px; margin-top: 5px; position: absolute">
          <i class="fas fa-sort-up" style="position: absolute; display: none"></i>
          <i class="fas fa-sort-down" style="position: absolute; display: none"></i>
        </span>
      </th>
      <th style="cursor: pointer" onclick="Filter(this)" field="status" direction="ASC">Статус
        <span style="margin-left: 10px; margin-top: 5px; position: absolute">
          <i class="fas fa-sort-up" style="position: absolute; display: none"></i>
          <i class="fas fa-sort-down" style="position: absolute; display: none"></i>
        </span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($model as $task): ?>
    <tr>
      <td><?=$task['username']?></td>
      <td><?=$task['email']?></td>
      <td><?=$task['task_text']?></td>
      <td><?=$task['status'] == 1 ? 'Активная' : 'Закрытая'?></td>
    </tr>
    <?php endforeach?>
  <tbody>
</table>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item <?= $currentPage <= 1 ? 'disabled' : ''?>">
      <a class="page-link" href="?page=<?=$currentPage - 1?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php for($i = 1; $i <= $totalPages; $i++): ?>
    <li class="page-item <?= $i == $currentPage ? 'active' : ''?>">
      <a class="page-link" href="?page=<?=$i?>"><?=$i?>
        <?php if ($i == $currentPage):?>
        <span class="sr-only">(current)</span>
        <?php endif?>
      </a></li>
    <?php endfor?>
    <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : ''?>">
      <a class="page-link" href="?page=<?=$currentPage + 1?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>