<h2>Выдача книг</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label for="user">Читатель:</label>
    <select name="id_user" id="user">
        <?php foreach ($users as $user): ?>
            <option value="<?= $user['id']; ?>"><?= $user['FIO']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="book">Книга:</label>
    <select name="id_book" id="book">
        <?php foreach ($books as $book): ?>
            <option value="<?= $book['id']; ?>"><?= $book['title']; ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Выдать книгу</button>
</form>