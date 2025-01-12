<h1 style="text-align: center; color: #007BFF;">Добро пожаловать в онлайн-сервис библиотеки!</h1>
<p style="text-align: justify; line-height: 1.6;">
    Наш сервис помогает упростить работу с библиотечным фондом, предоставляя удобные инструменты для регистрации пользователей,
    выдачи и возврата книг, а также управления библиотекарями и каталогом изданий.
</p>

<h2 style="text-align: center; color: #333;">Основные возможности</h2>
<ul style="line-height: 1.6; padding: 0 20px;">
    <li>Регистрация новых читателей и сотрудников.</li>
    <li>Просмотр и управление каталогом книг.</li>
    <li>Выдача и возврат книг.</li>
    <li>Отслеживание истории операций.</li>
</ul>

<div style="text-align: center; margin-top: 20px;">
    <a href="<?= app()->route->getUrl('/signup') ?>" style="display: inline-block; padding: 10px 20px; margin: 10px; background-color: #28A745; color: white; text-decoration: none; border-radius: 5px;">Регистрация</a>
    <a href="<?= app()->route->getUrl('/login') ?>" style="display: inline-block; padding: 10px 20px; margin: 10px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Вход</a>
    <a href="<?= app()->route->getUrl('/createBooks') ?>" style="display: inline-block; padding: 10px 20px; margin: 10px; background-color: #FFC107; color: white; text-decoration: none; border-radius: 5px;">Добавить книгу</a>
</div>