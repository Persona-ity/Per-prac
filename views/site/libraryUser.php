<h2>Регистрация нового читателя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <label>ФИО <input type="text" name="name"></label>
    <label>Адрес <input type="text" name="adress"></label>
    <label>Телефон <input type="text" name="phone"></label>
    <label>Читательский билет <input type="text" name="ticket_number"></label>
    <button>Зарегистрировать</button>
</form>
