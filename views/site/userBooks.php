<h2 style="text-align: center; color: #333;">Выдача книг</h2>
<h3 style="color: red; text-align: center;"><?= $message ?? ''; ?></h3>
<form method="post" style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
    <label for="user" style="display: block; margin-bottom: 10px;">Читатель:
        <select name="id_user" id="user" style="width: 100%; padding: 5px; margin-top: 5px;">
            <?php foreach ($users as $user): ?>
                <option value="<?= $user['id']; ?>"><?= $user['FIO']; ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <label for="book" style="display: block; margin-bottom: 10px;">Книга:
        <select name="id_book" id="book" style="width: 100%; padding: 5px; margin-top: 5px;">
            <?php foreach ($books as $book): ?>
                <option value="<?= $book['id']; ?>"><?= $book['title']; ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <button type="submit" style="width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px;">Выдать книгу</button>
</form>
