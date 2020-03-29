<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/a4paper.css')?>" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body oncontextmenu='return false' onmousedown='return false' onselectstart='return false' onkeypress='return false'>
        <div class="page">
            <article>
                <img src="<?= base_url('assets/headfib.png')?>" width="100%" height="90">
                <hr style="size: 2px">
                <center><h3><u>SURAT KETERANGAN SUMBANGAN BAHAN PUSTAKA</u></h3></center>
                <p align="justify">
                    &emsp; &emsp; Perpustakaan Fakultas Ilmu Budaya Universitas Mulawarman menerangkan bahwa mahasiswa :
                </p>
                <table>
                    <?php foreach ($data as $data){ ?>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data['nama']?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?=$data['nim']?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><?=$data['prodi']?></td>
                    </tr>

                </table>
                <p>telah menyumbang 1 (satu) eksemplar bahan pustaka kepada Perpustakaan Fakultas Ilmu Budaya Universitas Mulawarman</p>
                <table>
                    <tr>
                        <td>Judul Buku</td>
                        <td>:</td>
                        <td><?=$data['judul']?></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td>:</td>
                        <td><?=$data['pengarang']?></td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td>:</td>
                        <td><?=$data['tahun']?></td>
                    </tr>
                </table>
                <p align="justify">&emsp; &emsp; Demikian keterangan ini diberikan untuk digunakan sebagai syarat ujian pendadaran.</p>
                <table style="position: relative;left: 400px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>Samarinda, 26 Maret 2020 </td>
                    </tr>
                    <tr>
                        <td>Petugas Perpustakaan FIB-Unmul</td>
                    </tr>
                    <tr>
                        <td height="70"><img src="<?= base_url('assets/stamp3.png')?>" height="70" width="200"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <u>Sri Haryanti Aswar, S. I. P</u>
                            </b><br>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    </tr>
                </table>
            </article>
        </div>
        <div class="page">
            <article>
                <img src="<?= base_url('assets/headfib.png')?>" width="100%" height="90">
                <hr style="size: 2px">
                <center><h3><u>SURAT KETERANGAN BEBAS PUSTAKA</u></h3></center>
                <p align="justifi">
                    &emsp; &emsp;Perpustakaan Fakultas Ilmu Budaya Universitas Mulawarman menerangkan bahwa mahasiswa :
                </p>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data['nama']?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?=$data['nim']?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>:</td>
                        <td><?=$data['prodi']?></td>
                    </tr>
                </table>
                <p align="justify">
                    telah mengembalikan semua pinjaman dan tidak memiliki pinjaman bahan pustaka pada
                    perpustakaan Fakultas Ilmu Budaya Universitas Mulawarman. Demikian keterangan ini
                    diberikan untuk digunakan sebagaimana mestinya.
                </p>
                <table style="position: relative;left: 400px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>Samarinda, 26 Maret 2020 </td>
                    </tr>
                    <tr>
                        <td>Petugas Perpustakaan FIB-Unmul</td>
                    </tr>
                    <tr>
                        <td height="70"><img src="<?= base_url('assets/stamp3.png')?>" height="70" width="200"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <u>Sri Haryanti Aswar, S. I. P</u>
                            </b><br>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
        </div>
    </body>
</html>