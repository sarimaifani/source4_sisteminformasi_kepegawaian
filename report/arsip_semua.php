<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Kepegawaian Dinas Pertanian Kabupaten Asahan</h2>
                        <h4>Jalan Jend. Gatot Subroto No.268 B Kelurahan Sentang<br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara</h4>
                        <hr>
                        <h3>DATA SELURUH PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th><center>Id Pegawai</center></th><th><center>Nama Pegawai</center></th><th><center>Tempat Lahir</center></th><th>Tgl.Lahir</th><th><center>Jenis Kelamin<center></th><th><center>Tgl.Masuk</center></th><th>Agama</th><th>Alamat</th><th>Jabatan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pegawai";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_pegawai'] ?></td>
                                    <td><?= $data['nama_pegawai'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['tanggal_lahir'] ?></td>
                                    <td><?= $data['jenkel'] ?></td>
                                    <td><?= $data['tanggal_masuk'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                   <td><?= $data['jabatan'] ?></td>
                                    <td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>