<h3>Добавление задачи...</h3>
<form method="post" action="">
  <div class="form-group">
    <label for="username">Ваше имя</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Введите ваше имя" value="test" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Укажите Email" value="test@test.com" required>
  </div>
  <div class="form-group">
    <label for="task_text">Описание задачи</label>
    <textarea class="form-control" id="task_text" name="task_text" placeholder="Напишите суть задачи" required>test job</textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="create">Создать</button>
</form>
<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>