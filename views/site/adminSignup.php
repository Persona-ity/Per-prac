<h2>Регистрация библиотекаря</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Логин <input type="text" name="login"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Идентификатор <input type="text" name="identity"></label>
    <label>Роль <input type="text" name="role"></label>
    <button>Зарегистрироваться</button>
</form>
