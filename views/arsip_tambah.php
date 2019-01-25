<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="id_pegawai" class="col-sm-3 control-label">Id Pegawai</label>
                            <div class="col-sm-4">
                                <input type="text" name="id_pegawai" class="form-control" id="inputEmail3" placeholder="Inputkan Id Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_pegawai" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-3">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
						 
                         <div class="form-group">
                            <label for="jenkel" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenkel" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="tanggal_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                     <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            </div>
                       
                       <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Pegawai" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Handphone</label>
                            <div class="col-sm-4">
                                <input type="text" name="no_hp" class="form-control" id="inputPassword3" placeholder="Inputkan No Handphone Pegawai" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Inputkan Email Pegawai" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="inputPassword3" placeholder="Inputkan Jabatan Pegawai" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id_pegawai=$_POST['id_pegawai'];
    $nama_pegawai=$_POST['nama_pegawai'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
    $jenkel=$_POST['jenkel'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
	$jabatan=$_POST['jabatan'];
 
    //buat sql
    $sql="INSERT INTO pegawai VALUES ('','$id_pegawai','$nama_pegawai','$tempat_lahir','$tanggal_lahir','$jenkel','$tanggal_masuk','$agama','$alamat','$no_hp','$email','$jabatan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
