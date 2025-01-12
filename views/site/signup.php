<h2 style="text-align: center; color: #333;">Регистрация нового пользователя</h2>
<h3 style="color: red; text-align: center;"><?= $message ?? ''; ?></h3>
<form method="post" style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
    <label style="display: block; margin-bottom: 10px;">Имя
        <input type="text" name="name" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Логин
        <input type="text" name="login" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Пароль
        <input type="password" name="password" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <button style="width: 100%; padding: 10px; background-color: #28A745; color: white; border: none; border-radius: 5px;">Зарегистрироваться</button>
</form>
