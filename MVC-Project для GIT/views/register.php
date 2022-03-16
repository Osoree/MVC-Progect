<?php
    $title = 'Регистрация в системе';
    $css = [
        'register/main.css'
    ];
    @include_once 'header.php';
?>

<?= ( isset($_GET['error_password'])
    ? "<div class='error'>Пароли не совпали!</div>"
    : "" )
?>
<form action="" method="POST">
        <div class="mb-3">
            <label for="inputName" class="form-label">ФИО</label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Фамилия Имя Отчество" required>
        </div>
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" id="inputLogin" placeholder="Укажите логин" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="password" name="passsword" class="form-control" id="inputPassword" placeholder="Укажите пароль" required>
        </div>
        <div class="mb-3">
            <label for="inputPasswordConfirmed" class="form-label">Повтолите пароль</label>
            <input type="password" name="passsword_confirmed" class="form-control" id="inputPasswordConfirmed" placeholder="Повтолите пароль" required>
        </div>
        <button type="submit" class="btn btn-primary">Ок</button>
    </form>


<?php @include_once 'footer.php'; ?>