<h1 style="text-align: center; color: #333;">Список книг и читателей</h1>
<ol style="width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9; list-style-type: decimal;">
    <?php foreach ($userBooks as $userBook): ?>
        <li style="margin-bottom: 10px;"><?= $userBook->id_book; ?> - <?= $userBook->id_user; ?></li>
    <?php endforeach; ?>
</ol>
