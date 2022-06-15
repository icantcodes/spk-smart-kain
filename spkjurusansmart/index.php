<?php
    // include 'cek.php';
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">SPK PEMILIHAN KAIN TERBAIK</h1>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Admin
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        Selamat datang, <?=$_SESSION['username']?>. Ini adalah aplikasi pengambilan metode keputusan pemilihan kain dengan metode SMART (Simple Multi Attribute Rating Technique). <a href="alternatif.php" class="alert-link">masukkan data kain</a>
                                    </div>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>                        <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                        <center><img class="img-fluid" src="css/ll.png" width="20%"><br></center>
                        </div>
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