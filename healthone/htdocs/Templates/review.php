<!DOCTYPE html>
<html>
<?php
global $review;
global $name;
global $products;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <div class="container border mt-3 rounded shadow-lg w-75">
        <h3 class="text-center p-3">Voeg een review toe</h3>
        <form method="post" >
            <div class="d-flex justify-content-center align-items-center flex-column">
                <input type="text" name="name" value="" placeholder="Vul jouw naam in">
                <p class="mt-3">Geef een beoordeling</p>
                <select class="d-block mx-auto mt-2 w-25 col-lg-6 col-sm-12" name="rating" required>
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <textarea name="description" class="d-block mx-auto w-75 p-2 m-5 " placeholder="Wat vind je van het apparaat?" required></textarea>
                <input  type="hidden" name="productId" value="">

                <input type="submit" name="submit" value="review plaatsen" class="btn-primary rounded b-2 mb-4 d-block mx-auto text-light"
            </div>
        </form>
    </div>
    <?php
    include_once('defaults/footer.php');
    ?>

    </div>

</body>
</html>
