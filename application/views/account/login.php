<h3>Вход</h3>
<form action="/account/login" method="post">
    <p>Логин</p>
    <p><input type="text" name="login"></p>
    <p>Пароль</p>
    <p><input type="password" name="password"></p>
    <b><button type="submit" name="enter">Вход</button></b>
</form>

<form action="/account/login" method="post" enctype="multipart/form-data">
    <p>Логин</p>
    <p><input type="text" name="login"></p>
    <p>Пароль</p>
    <p><input type="password" name="password"></p>
    <p>File:</p>
    <p><input type="file" name="file"></p>
    <b><button type="submit" name="enter">Вход</button></b>
</form>