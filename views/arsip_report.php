<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Arsip</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>Id Pegawai</th><th>Nama Pegawai</th><th><center>Tempat Lahir</center></th><th><center>Tgl. Lahir</center></th><th><center>Jenis Kelamin<center></th><th><center>Tanggal Masuk</center></th><th>Agama</th><th>Alamat</th><th>Jabatan</th><th>AKSI</th>
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
                                        <a href="report/arsip_satu.php?id=<?= $data['id'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/arsip_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Arsip

                                    </a>
                                    
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

