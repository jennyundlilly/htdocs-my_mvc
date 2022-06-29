<!DOCTYPE html>
<html>
<?php
require_once _DIR_ROOT . '/views/admin/layouts/head.inc.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        require_once _DIR_ROOT . '/views/admin/layouts/navbar.inc.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container sidebar.inc.php-->
        <?php
        require_once _DIR_ROOT . '/views/admin/layouts/sidebar.inc.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <?php require_once _DIR_ROOT . '/views/' . str_replace(' ', '', strtolower($data['page'])) . '.php'; ?>

            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        require_once _DIR_ROOT . '/views/admin/layouts/footer.inc.php';
        ?>

    </div>
    <!-- ./wrapper -->
    <?php
    require_once _DIR_ROOT . '/views/admin/layouts/script.inc.php';
    ?>


</body>

</html>