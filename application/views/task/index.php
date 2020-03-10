<table class="table table-striped table-hover" style="margin-top: 15px">
  <thead class="thead-dark">
    <tr>
      <th style="cursor: pointer">Имя пользователя 
        <a href ="?<?=$_SERVER['QUERY_STRING']?><?=$_SERVER['QUERY_STRING'] ? '&' : '?'?>sort=username&order=ASC">
          <i class="fas fa-sort-up"></i>
        </a>
      </th>
      <th style="cursor: pointer">Email</th>
      <th style="cursor: pointer">Текст задачи</th>
      <th style="cursor: pointer">Статус</th>
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