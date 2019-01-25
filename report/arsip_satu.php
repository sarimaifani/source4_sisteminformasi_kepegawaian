<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pegawai WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Kepegawaian Dinas Pertanian Kabupaten Asahan </h2>
                        <h4>Jalan Jend. Gatot Subroto No.268 B Kelurahan Sentang <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara</h4>
                        <hr>
                        <h3>DATA PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Id Pegawai</td> <td><?= $data['id_pegawai'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama Pegawai</td> <td><?= $data['nama_pegawai'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir </td> <td><?= $data['tempat_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tanggal_lahir'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis kelamin</td> <td><?= $data['jenkel'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tanggal_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Dinas, SP<strong></u><br>
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