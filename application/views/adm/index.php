<br>
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Aksi</th>
                <th>NIM - Nama</th>
                <th>Program Studi</th>
                <th>Judul Buku</th>
                <th>Pengarang Buku</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $data){?>
            <tr>
                <td>
                    <?php if ($data['v'] == 0){?>
                        <a class=" btn btn-primary" href="<?= base_url('Admin/verify/'.$data['nim'])?>">Verifikasi</a>
                    <?php }else{ ?>
                        <a class="btn btn-secondary" href="<?= base_url('Admin/unverify/'.$data['nim'])?>">Sudah diverifikasi</a>
                    <?php } ?>
                </td>
                <td><?= $data['nim'] ?> - <?= $data['nama'] ?></td>
                <td><?= $data['prodi'] ?> </td>
                <td><?= $data['judul'] ?> </td>
                <td><?= $data['pengarang'] ?> </td>
                <td><?= $data['tahun'] ?> </td>
                <td><?= $data['harga'] ?> </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>