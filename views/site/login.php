<h2 style="text-align: center; color: #333;">Авторизация</h2>
<h3 style="color: red; text-align: center;"><?= $message ?? ''; ?></h3>
<h3 style="text-align: center; color: #555;"><?= app()->auth->user()->name ?? ''; ?></h3>

<?php if (!app()->auth::check()): ?>
    <form method="post" style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
        <label style="display: block; margin-bottom: 10px;">Логин
            <input type="text" name="login" style="width: 100%; padding: 5px; margin-top: 5px;">
        </label>
        <label style="display: block; margin-bottom: 10px;">Пароль
            <input type="password" name="password" style="width: 100%; padding: 5px; margin-top: 5px;">
        </label>
        <button style="width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px;">Войти</button>
    </form>
<?php endif; ?>
