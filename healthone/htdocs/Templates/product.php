<!DOCTYPE html>
<html>
<?php
global $product;
global $name;
global $reviews;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h2 class="card-title"><?=$product->name?></h2>
            </div>

            <img src="/img/categories/<?=$name?>/<?=$product->image?>">
            <article>
                <?=$product->description?>
            </article>
            <br>
            <a class="btn btn-primary" href="/review/<?=$product->id?>" role="button">Plaats review</a>
    </div>
        <div>
            <?php foreach($reviews as $review):?>
                <div class="reviews">
                    <?=$review->name?><br>
                    <?=$review->description?><br>
                    <?=$review->rating?><br>
                    <?=$review->date?><br>
                    <hr>

                </div>
            <?php endforeach; ?>


        </div>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>

</div>

</body>
</html>
