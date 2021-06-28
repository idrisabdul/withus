<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <!-- Material statustic card start -->
        <div class="col-xl-4 col-md-12">
            <div class="card mat-stat-card">
                <div class="card-block">
                    <div class="row align-items-center b-b-default">
                        <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="far fa-user text-c-purple f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>10K</h5>
                                    <p class="text-muted m-b-0">Visitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="fas fa-volume-down text-c-green f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>100%</h5>
                                    <p class="text-muted m-b-0">Volume</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="far fa-file-alt text-c-red f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>2000+</h5>
                                    <p class="text-muted m-b-0">Files</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="far fa-envelope-open text-c-blue f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>120</h5>
                                    <p class="text-muted m-b-0">Mails</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card mat-stat-card">
                <div class="card-block">
                    <div class="row align-items-center b-b-default">
                        <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="fas fa-share-alt text-c-purple f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>1000</h5>
                                    <p class="text-muted m-b-0">Share</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="fas fa-sitemap text-c-green f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>600</h5>
                                    <p class="text-muted m-b-0">Network</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="fas fa-signal text-c-red f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>350</h5>
                                    <p class="text-muted m-b-0">Returns</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">
                                <div class="col-4 p-r-0">
                                    <i class="fas fa-wifi text-c-blue f-24"></i>
                                </div>
                                <div class="col-8 p-l-0">
                                    <h5>100%</h5>
                                    <p class="text-muted m-b-0">Connections</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card mat-clr-stat-card text-white green ">
                <div class="card-block">
                    <div class="row">
                        <div class="col-3 text-center bg-c-green">
                            <i class="far fa-user mat-icon f-24"></i>
                        </div>
                        <div class="col-9 cst-cont">
                            <h5><?= $this->db->query("SELECT * FROM user")->num_rows() ?></h5>
                            <p class="m-b-0">Total Pengguna</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mat-clr-stat-card text-white blue">
                <div class="card-block">
                    <div class="row">
                        <div class="col-3 text-center bg-c-blue">
                            <i class="fas fa-user-md mat-icon f-24"></i>
                        </div>
                        <div class="col-9 cst-cont">
                            <h5><?= $this->db->query("SELECT * FROM user WHERE user_level = 2")->num_rows() ?></h5>
                            <p class="m-b-0">Total Konsultan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Material statustic card end -->
        <!-- order-visitor start -->


        <!-- order-visitor end -->

        <!--  sale analytics start -->
        <div class="col-xl-6 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Menu Kategori</h5>
                    <button href="#!" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i></button>
                </div>
                <div class="card-block">
                    <div class="table-responsive px-3">
                        <table class="table table-sm table-bordered table-hover" id="example">
                            <thead clas>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($kategori as $k) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $k->nm_kategori ?></td>
                                        <td><button class="btn btn-sm btn-primary btn-round waves-effect" data-toggle="modal" data-target="#editModal">Edit</button>
                                            <button href="#!" class="btn btn-sm btn-danger btn-round waves-effect">Hapus</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="row">
                <!-- sale card start -->

                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Total Subscription</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                            <p class="m-b-0">48% From Last 24 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Order Status</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-red total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>489</h4>
                                <p class="m-0">Total Comment</p>
                            </div>
                            <span class="label bg-c-red value-badges">15%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-green total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>$5782</h4>
                                <p class="m-0">Income Status</p>
                            </div>
                            <span class="label bg-c-green value-badges">20%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Unique Visitors</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>652</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Monthly Earnings</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>5963</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <!-- sale card end -->
            </div>
        </div>

        <!--  sale analytics end -->

        <!-- Project statustic start -->
        <div class="col-xl-12">
            <div class="card proj-progress-card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <h6>Published Project</h6>
                            <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Completed Task</h6>
                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Successfull Task</h6>
                            <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Ongoing Project</h6>
                            <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project statustic end -->
    </div>
</div>
<!-- Page-body end -->

<!-- ADD ITEM MODAL -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dashboard/addKategori') ?>" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Kategori</label>
                            <div class="form-group">
                                <input type="text" name="kategori" class="form-control" placeholder="kategori" required />
                            </div>
                        </div>
                    </div>

                    <div class="row modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-round waves-effect">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>