<!DOCTYPE html>
<html>
<?php
global $times;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <h4>Openingstijden</h4>
    <table class="table table-bordered">
    <?php foreach($times as $time):?>
        <tr>
            <th><?=$time->day?></th>
            <td><?=$time->open_time?> - <?=$time->close_time?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <a href="tel:0152578924" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">Klik om ons te bereiken via telefoon!</p></a>
    <h3>Kunt u ons niet telefonisch bereiken maar wilt u wel in contact komen?</h3>
    <h4>Stuur dan gerust een e-mail naar info@healthone.com</h4>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Zuidhoornseweg%206a&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:900px;}</style><a href="https://www.embedgooglemap.net">google maps html embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:900px;}</style></div></div>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>