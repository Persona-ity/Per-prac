<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f0f0; color: #333;">

<header style="background-color: #007BFF; padding: 10px 20px; color: white;">
    <nav style="text-align: center;">
        <a href="<?= app()->route->getUrl('/hello') ?>" style="color: white; text-decoration: none; margin: 0 10px;">Главная</a>
        <?php if (!app()->auth::check()): ?>
            <a href="<?= app()->route->getUrl('/login') ?>" style="color: white; text-decoration: none; margin: 0 10px;">Вход</a>
            <a href="<?= app()->route->getUrl('/signup') ?>" style="color: white; text-decoration: none; margin: 0 10px;">Регистрация</a>
        <?php else: ?>
            <a href="<?= app()->route->getUrl('/logout') ?>" style="color: white; text-decoration: none; margin: 0 10px;">Выход (<?= app()->auth->user()->name ?>)</a>
        <?php endif; ?>
    </nav>
</header>

<main style="padding: 20px;">
    <?= $content ?? '' ?>
</main>

</body>
</html>
