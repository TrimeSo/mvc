<?php
include('nav.php');
?>
<div class="container" id="authcontainer">
    <h1>Авторизация</h1>
<form action="">
    <div class="form-group" id="authform">
        <label for="formGroupExampleInput">Логин</label>
        <input type="text" class="form-control" id="login" placeholder="Введите свой логин сюда...">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Пароль</label>
        <input type="text" class="form-control" id="password" placeholder="Введите свой пароль сюда...">
    </div>
    <div class="form-group" id="authbutton">
        <button type="submit" id="btnLogin" class="btn btn-primary" >Войти</button>
    </div>
    <a href="registr.php">Зарегистрироваться</a>
</form>
</div>

