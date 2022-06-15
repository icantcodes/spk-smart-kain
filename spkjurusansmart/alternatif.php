<?php
    include 'onek.php';
    require_once 'nav.php';
    // if (isset($_GET['id']=='hapus' && $_GET['name'])) {
    //  echo "dihapus.";
    // }
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Alternatif</h1>
                            <a class="btn btn-primary"href="nilai.php">Masukkan Nilai Alternatif</a><br><br>
                        </div>

                        <div class="col-lg-8">
                            <form role="form" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" required name="kode_kain" class="form-control" placeholder="KODE KAIN">
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="nama_kain" class="form-control" placeholder="NAMA KAIN">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-success form-control" value="SUBMIT" placeholder="submit">
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['submit'])) {
                                    $kode_kain   = $_POST['kode_kain'];
                                    $nama_kain   = $_POST['nama_kain'];
                                    // var_dump($nama_kain,$kode_kain);
                                    // die;

                                    //sql insert to kain
                                    $sql = "INSERT INTO kain (kode_kain,nama_kain)VALUES ('$kode_kain','$nama_kain')";
                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query) {
                                        echo "<script>alert('berhasil memasukkan data Alternatif')</script>";
                                    }else{
                                        echo "<script>alert('Gagal Memasukkan data')</script>";

                                    }
                                    
                                }else{
                                   
                                }
                            ?>
                        </div>


                        <!-- Menampilkan Tabel Data -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Alternatif
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode kain</th>
                                                    <th>Nama Kain</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data kain dari database -->
                                                <?php
                                                   $sql ="SELECT * FROM kain";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;
                                                   while ($kain=mysqli_fetch_array($query)) {
                                                        
                                                ?>
                                                <tr>
                                                    <td><?=$n?></td>
                                                    <td><?=$kain['kode_kain']?></td>
                                                    <td><?=$kain['nama_kain']?></td>
                                                    <td><a class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus ?')" href='aksi/hapusa.php?name=<?=$kain['kode_kain'];?>'>hapus</a></td>
                                                </tr>
                                                <?php
                                                    $n++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Tabel Data -->



                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php 
    require_once 'foot.php';
 ?>