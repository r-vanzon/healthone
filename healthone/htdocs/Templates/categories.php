<!DOCTYPE html>
<html>
<?php
global $categories;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>

        <div class="card-list row">
            <?php foreach ( $categories as $data):?>

                    <div class="card col-sm-3">
                        <div class="card-header"><?=$data->name?></div>
                        <div class="card-body">
                            <a href="category/<?=$data->id?>">
                                <img src="<?=$data->image?>">
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

