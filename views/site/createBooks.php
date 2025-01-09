<h2>Создание книги</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>Автор <input type="text" name="author"></label>
    <label>Название <input type="text" name="title"></label>
    <label>Год издания <input type="text" name="year"></label>
    <label>Цена <input type="text" name="price"></label>
    <label>Является ли новым изданием<input type="text" name="edition"></label>
    <label>Описание <input type="text" name="description"></label>
    <button>Зарегестрировать книгу</button>
</form>