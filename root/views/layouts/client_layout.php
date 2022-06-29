<?php
    require_once _DIR_ROOT . '/views/layouts/header.inc.php';
?>

<?php require_once _DIR_ROOT . '/views/' . str_replace(' ', '', strtolower($data['page'])) . '.php';?>


<?php
    require_once _DIR_ROOT . '/views/layouts/footer.inc.php';
?>
    
