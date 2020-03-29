<div class="container">
    <br>
    <div class="alert alert-dismissible alert-primary">
        <h4>Daftar Buku Sumbangan</h4>
        Karya Umum/Penelitian, Kebudayaan/Sosial, Ilmu Bahasa/Linguistik, Kesenian/Musik Sastra(Teori/Novel), Sejarah/Biografi.
        <b>Catatan: Minimal Terbitan Tahun 2013</b>
    </div>

    <!--Alert-->
    <?php if ($this->session->flashdata('info')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil!</strong> <?php echo $this->session->flashdata('info'); ?>. Anda harus menunggu konfirmasi dari admin, silakan cek secara berkala halaman berikut
            <a href="<?= base_url('Fib/Cetak')?>" class="alert-link">Cetak </a>
        </div>
    <?php endif; ?>
    <!--End Alert-->

    <div class="card border-secondary mb-3">
        <div class="card-header">Lengkapi data dibawah ini!</div>
        <div class="card-body">
            <?= form_open('Fib/Save'); ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="inputDefault">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $this->input->post['nim']; ?>">
                    <span class="text-danger"><?php echo form_error('nim');?></span>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="inputDefault">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $this->input->post['nama']; ?>">
                    <span class="text-danger"><?php echo form_error('nama');?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleSelect1">Program Studi</label>
                    <select class="form-control" name="prodi">
                        <option value="">Pilih</option>
                        <option value="Sastra Indonesia">Sastra Indonesia</option>
                        <option value="Sastra Inggris">Sastra Inggris</option>
                        <option value="Etnomusikologi">Etnomusikologi</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('prodi');?></span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" value="<?php echo $this->input->post['judul']; ?>">
                    <span class="text-danger"><?php echo form_error('judul');?></span>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" value="<?php echo $this->input->post['pengarang']; ?>">
                    <span class="text-danger"><?php echo form_error('pengarang');?></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Tahun Terbit</label>
                    <select class="form-control" name="tahun">
                        <option value="">Pilih</option>
                        <?php
                        for ($i = 2013; $i <= (date('Y')); $i++) {
                            if (date('Y') == $i) {
                                echo "<option value='$i' selected> $i </option>";
                            } else {
                                echo "<option value='$i'>$i</option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('tahun');?></span>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>