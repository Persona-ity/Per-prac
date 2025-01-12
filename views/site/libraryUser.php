<h2 style="text-align: center; color: #333;">Регистрация нового читателя</h2>
<h3 style="color: red; text-align: center;"><?= $message ?? ''; ?></h3>
<form method="post" style="width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
    <label style="display: block; margin-bottom: 10px;">ФИО
        <input type="text" name="FIO" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Адрес
        <input type="text" name="adress" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Телефон
        <input type="text" name="phone" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Читательский билет
        <input type="text" name="ticket_number" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <label style="display: block; margin-bottom: 10px;">Идентификатор
        <input type="text" name="identity" style="width: 100%; padding: 5px; margin-top: 5px;">
    </label>
    <button style="width: 100%; padding: 10px; background-color: #FFC107; color: white; border: none; border-radius: 5px;">Зарегистрировать</button>
</form>
