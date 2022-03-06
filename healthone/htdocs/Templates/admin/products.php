<!DOCTYPE html>
<html>
<?php
global $products;


include_once(TEMPLATE_ROOT . '/defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('../Templates/defaults/header.php');
    include_once('../Templates/defaults/menu.php');
    include_once('../Templates/defaults/pictures.php');
    ?>


        <?php foreach ($products as $product):?>

            <?php $name = getCategoryName($product->category_id);?>
            <div class="row card-list">
            <div class="card col-sm-12">
                <div class="card-header"><?=$product->name?></div>
                <div class="card-body">
                    <a href="/product/<?=$product->id?>">
                        <img src="/img/categories/<?=$name?>/<?=$product->image?>">
                    </a>
                </div>
                <button>Edit</button>
                <button>Delete</button>
                
            </div>
        </div>
        <?php endforeach;?>
        <button>Add</button>



    
    <hr>
    <?php
    include_once('../Templates/defaults/footer.php');

    ?>
</div>

</body>
</html>


