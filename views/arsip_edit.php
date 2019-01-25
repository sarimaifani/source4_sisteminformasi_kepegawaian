<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="id_pegawai" class="col-sm-3 control-label">Id Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pegawai" value="<?=$data['id_pegawai']?>"class="form-control" id="inputEmail3" placeholder="Id Pegawai">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_pegawai" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" value="<?=$data['nama_pegawai']?>"class="form-control" id="inputEmail3" placeholder="Nama Pegawai">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2019;$i>1960;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->   
                         <!--Jenis Kelamin-->
                        
                        <div class="form-group">
                            <label for="jenkel" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenkel" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir--> 
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2019;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->  
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
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No Handphone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>"class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control" id="inputEmail3" placeholder="Jabatan">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kepegawaian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
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
    $sql="UPDATE pegawai SET id_pegawai='$id_pegawai',nama_pegawai='$nama_pegawai',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenkel='$jenkel',tanggal_masuk='$tanggal_masuk',agama='$agama',alamat='$alamat',no_hp='$no_hp',email='$email',jabatan='$jabatan' WHERE id_pegawai ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }
 
?>



