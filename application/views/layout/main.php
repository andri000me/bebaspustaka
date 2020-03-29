<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('layout/head'); ?>

    <body>
        <?php $this->load->view('layout/navbar'); ?>
        <!-- Main content -->
        <?php
        if (isset($_view) && $_view) $this->load->view($_view);
        ?>
        <!-- /.content -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php $this->load->view('layout/js'); ?>

    </body>

</html>
