<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

          
            
        </nav>
        <!-- /.navbar -->
        \


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('member/dasboard') ?>">Home</a></li>
                                <li class="breadcrumb-item">Invoice</li>
                                <li class="breadcrumb-item active">Bengkel Paper</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info" style="background-color: 00C0EF; color:white;">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                <h1><?= $this->session->flashdata('bengkel'); ?></h1>
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <img src="<?php echo base_url() . 'theme/images/logo/favicon-32x32.png' ?>"></i> Rumah Scopus
                                            <small class="float-right">Date: <?= date('d F Y'); ?></small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Rumah Scopus</strong><br>
                                            Bangunsari, Bangunkerto, Turi, Sleman, Yogyakarta 55551<br>
                                            Email: rumahscopus@gmail.com
                                        </address>
                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode Booking</th>
                                                    <th>Tanggal Order</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $id = $this->session->userdata('email');
                                            $queryOrder = "SELECT *
                                                             FROM `tbl_order_bengkel_scopus` 
                                                             WHERE `email` = '$id'
                                                             ORDER BY `tanggal_order` ASC";
                                            $tagihan = $this->db->query($queryOrder)->result_array(); ?>
                                            <?php foreach ($tagihan as $t) : 
                                            $harga = $t['harga'];
                                            $hasil_rupiah = "Rp " . number_format($harga, 2, ',', '.');?>
                                                <?php if ($t['status'] == 0) : ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $t['id_pesanan'] ?></td>
                                                            <td><?= $t['tanggal_order'] ?></td>
                                                            <td><?= $t['Kategori'] ?></td>
                                                            <td><?= $hasil_rupiah ?></td>
                                                            <td>Pending</td>
                                                            <td><a href="<?= base_url('member/tagihan/cancel_bengkel/') . $t['id_pesanan'] ?>" class="btn btn-danger">Cancel</a></td>
                                                            <td><button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal"><i class="far fa-credit-card"></i> Submit Payment</button></td>
                                                        </tr>
                                                    </tbody>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->


                                <!-- /.row -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PAYMENT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        BRI
                                                                    </button>
                                                                </h2>
                                                            </div>

                                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                     No. Rekening : 216401000467563
                                                                    <br> Atas Nama : Rumah Scopus Akademi
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?= base_url('member/tagihan/submit_bengkel') ?>" class="btn btn-primary">Submit Payment</a>
                                                        <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Bayar!</button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <a href="<?php echo base_url() . 'member/cetak' ?>" type="button" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>

                                            <!--<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.invoice -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->