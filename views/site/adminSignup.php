<h2>Регистрация библиотекаря</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <table>
        <tr>
            <td><label>Логин</label></td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td><label>Пароль</label></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><label>Идентификатор</label></td>
            <td><input type="text" name="identity"></td>
        </tr>
        <tr>
            <td><label>Роль</label></td>
            <td><input type="text" name="role"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button>Зарегистрироваться</button>
            </td>
        </tr>
    </table>
</form>
