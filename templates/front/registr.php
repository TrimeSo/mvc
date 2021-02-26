<?php
include('nav.php');
?>
<div class="container" id="authcontainer">
    <h1>Регистрация</h1>
    <form>
        <div class="form-group" id="authform">
            <label for="formGroupExampleInput">Логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите свой логин сюда...">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Пароль</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Введите свой пароль сюда...">
        </div>
        <div class="form-group" id="authbutton">
            <button type="submit" id="buttonmail" class="btn btn-primary">Зарегистрироваться</button>
        </div>
    </form>
</div>
