<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/blocks/head.php');
    // include($_SERVER['DOCUMENT_ROOT'].'/blocks/top.php');
?>
    
    <!-- выбор экскурсии покупателем -->
<?php
$number = false;
if (isset($_GET['choice'])) {
    if ($_GET['choice'] == 'tours1') {
        $number = 1;
    } elseif ($_GET['choice'] == 'tours2') {
        $number = 2;
    } elseif ($_GET['choice'] == 'tours3') {
        $number = 3;
    } elseif ($_GET['choice'] == 'tours4') {
        $number = 4;
    }
}

?>
<?php if ($number): ?>
<div class="tours-img<?=$number; ?> tours-img" style= "height: 100vh"><div>
<?php else: ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/blocks/top.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/blocks/footer.php'); ?>
<?php endif; ?>

<!-- include($_SERVER['DOCUMENT_ROOT'].'/blocks/footer.php'); -->