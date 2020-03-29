<div class="container">
    <br>
    <!--Alert-->
    <?php if ($this->session->flashdata('info')): ?>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Maaf!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php endif; ?>
    <!--End Alert-->

    <div class="card border-secondary mb-3">
        <div class="card-body">
            <?= form_open('Fib/Cari'); ?>
            <center>
                <div class="form-group col-md-6 .col-md-offset-3">
                    <label class="col-form-label" for="inputDefault">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $this->input->post['nim']; ?>">
                    <span class="text-danger"><?php echo form_error('nim'); ?></span>
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </center>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>