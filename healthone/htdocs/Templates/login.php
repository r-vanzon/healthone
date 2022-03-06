<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/style.css"/>
</head>
<?php
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <form method="post">


        <div class="container">
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" class="form-label" placeholder="Enter email" name="email" required>
<br>
            <label for="psw"><b>Password</b></label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
<br>
            <button class="btn-primary" type="submit" name='login'>Login</button>
        </div>
    </form>
    <br>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>

