<!-- Load File Jquery -->
<!--<script src="--><?php //echo base_url("assets/js/jquery.min.js"); ?><!--" type="text/javascript"></script>-->
<script src="<?php echo base_url("assets/js/ajax.js"); ?>" type="text/javascript"></script>

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
<!--                <input type="text" name="nim" class="form-control" value="--><?php //echo $this->input->post['nim']; ?><!--">-->
                    <input list="data_mahasiswa" type="text" name="nim" id="nim" class="form-control" onchange="return autofill();" required autofocus>
                    <datalist id="data_mahasiswa">
                        <?php
                        foreach ($record->result() as $b)
                        {
                            echo "<option value='$b->nim_mhs'>$b->nim_mhs</option>";
                        }
                        ?>

                    </datalist>

<!--                    <span class="text-danger">--><?php //echo form_error('nim');?><!--</span>-->
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" readonly>
<!--                    <span class="text-danger">--><?php //echo form_error('nama');?><!--</span>-->
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label" >Program Studi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" readonly>
<!--                    <select class="form-control" name="prodi">-->
<!--                        <option value="">Pilih</option>-->
<!--                        <option value="Sastra Indonesia">Sastra Indonesia</option>-->
<!--                        <option value="Sastra Inggris">Sastra Inggris</option>-->
<!--                        <option value="Etnomusikologi">Etnomusikologi</option>-->
<!--                    </select>-->
<!--                    <span class="text-danger">--><?php //echo form_error('prodi');?><!--</span>-->
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" required>
<!--                    <span class="text-danger">--><?php //echo form_error('judul');?><!--</span>-->
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" required>
<!--                    <span class="text-danger">--><?php //echo form_error('pengarang');?><!--</span>-->
                </div>
                <div class="form-group col-md-6">
                    <label>Tahun Terbit</label>
                    <select class="form-control" name="tahun" required>
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
<!--                    <span class="text-danger">--><?php //echo form_error('tahun');?><!--</span>-->
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="100000" required>
                    <span class="text-danger">Tanpa tanda titik (.) atau tanda koma (,)</span>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    function autofill(){
        var nim =document.getElementById('nim').value;
        $.ajax({
            url:"<?php echo base_url();?>index.php/Fib/cari",
            data:'&nim='+nim,
            success:function(data){
                var hasil = JSON.parse(data);
                $.each(hasil, function(key,val){
                    document.getElementById('nim').value=val.nim_mhs;
                    document.getElementById('nama').value=val.nama_mhs;
                    document.getElementById('prodi').value=val.nama_prod;
                });
            }
        });
    }
</script>