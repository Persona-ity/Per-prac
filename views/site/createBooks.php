<h2>Создание книги</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <table>
        <tr>
            <td><label>Автор</label></td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td><label>Название</label></td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td><label>Год издания</label></td>
            <td><input type="text" name="year"></td>
        </tr>
        <tr>
            <td><label>Цена</label></td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td><label>Новое издание</label></td>
            <td><input type="text" name="edition"></td>
        </tr>
        <tr>
            <td><label>Описание</label></td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button>Зарегестрировать книгу</button>
            </td>
        </tr>
    </table>
</form>
