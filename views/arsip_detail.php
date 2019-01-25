<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pegawai WHERE id_pegawai ='" . $_GET ['id_pegawai'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Id Pegawai</td> <td><?= $data['id_pegawai'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pegawai</td> <td><?= $data['nama_pegawai'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tanggal_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenkel'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tanggal_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
						<tr>
                            <td>alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>No Handphone</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
						<tr>
                            <td>Email</td> <td><?= $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

