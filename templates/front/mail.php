<?php
include('nav.php');
?>

<div class="container" id="mc">

<form>
    <div class="form-group row" id="inputmail">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Введите свой Email</label>
        <div class="col-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Введите свое сообщение</label>
            <input type="email" class="form-control" id="inputEmail3" placeholder="Text">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" id="buttonmail" class="btn btn-primary">Отправить</button>
        </div>
    </div>
</form>
</div>

<?php
include ('footer.php');
?>