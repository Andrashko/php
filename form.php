<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <input name="login" placeholder="login">
    <input type="password" name="password" placeholder="password"><br>
    male <input type="radio" name="gander" value="m">
    female <input type="radio" name="gander" value="f">
    <input type="number" name="age" value="20">
    <input type="submit">
</form>

<?php var_dump($_POST); ?>