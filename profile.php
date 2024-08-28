<?php require_once('inc/header.php');  ?>

<?php require_once('inc/navbar.php');  ?>

<?php foreach ($_SESSION['auth'] as $key => $value): ?>
<h2><?= $value ?></h2>


<?php endforeach; ?>
<?php require_once('inc/footer.php'); ?>