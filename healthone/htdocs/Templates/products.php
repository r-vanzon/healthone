<!DOCTYPE html>
<html>
<?php
global $products;
global $name;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>


    <div class="row card-list">
        <?php foreach ($products as $product):?>
            <div class="card col-sm-4">
                <div class="card-header"><?=$product->name?></div>
                <div class="card-body">
                    <a href="/product/<?=$product->id?>">
                        <img src="/img/categories/<?=$name?>/<?=$product->image?>">

                    </a>
                </div>
            </div>

        <?php endforeach;?>


    </div>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>



