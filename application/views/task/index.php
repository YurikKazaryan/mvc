<table class="table table-striped table-hover" style="margin-top: 15px">
  <thead class="thead-dark">
    <tr>
      <th>Имя пользователя</th>
      <th>Email</th>
      <th>Текст задачи</th>
      <th>Статус</th>
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