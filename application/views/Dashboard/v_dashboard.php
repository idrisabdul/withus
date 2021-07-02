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
                    <?= $this->session->flashdata('message_kategori') ?>
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
                                        <td><button id="editkat" class="btn btn-sm btn-primary btn-round waves-effect" data-toggle="modal" data-target="#editModal" data-id="<?= $k->id ?>" data-kat="<?= $k->nm_kategori ?>">Edit</button>
                                            <button onclick="deleteConfirm('<?= base_url('Dashboard/deleteKategori/' . $k->id) ?>')" href="#!" class="btn btn-sm btn-danger btn-round waves-effect">Hapus</button>
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
                            <h6 class="m-b-0">Pengajuan Konsultan</h6>
                            <h4 class="m-t-15 m-b-15"><?= $jml_pengajuan ?></h4>
                            <p class="m-b-0">48% From Last 24 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Konsultan Bermasalah</h6>
                            <h4 class="m-t-15 m-b-15">6325</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-red total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>489</h4>
                                <p class="m-0">Pertanyaan Ilegal</p>
                            </div>
                            <span class="label bg-c-red value-badges">15%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-green total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>5782</h4>
                                <p class="m-0">Jawaban Ilegal</p>
                            </div>
                            <span class="label bg-c-green value-badges">20%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Kritik dan Saran</h6>
                            <h4 class="m-t-15 m-b-15">652</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Artikel Bermasalah</h6>
                            <h4 class="m-t-15 m-b-15">5963</h4>
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
            <div class="card table-card">
                <div class="card-header">
                    <?= $this->session->flashdata('message_user') ?>
                    <h5>User</h5>
                </div>
                <div class="card-block">
                    <div class="table-responsive px-3">
                        <table class="table table-sm table-bordered table-hover" id="example_user">
                            <thead clas>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Profesi</th>
                                    <th>No WA</th>
                                    <th>User Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($user as $u) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $u->username ?></td>
                                        <td><?= $u->email ?></td>
                                        <td><?= $u->profesi ?></td>
                                        <td><?= $u->no_wa ?></td>
                                        <td> <?php if ($u->user_level == 1) { ?>
                                                <label class="label label-primary">Admin</label>
                                            <?php } else if ($u->user_level == 2) { ?>
                                                <label class="label label-info">Konsultan</label>
                                            <?php } else { ?>
                                                <label class="label label-warning">User</label>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <label onclick="deleteConfirm('<?= base_url('Dashboard/deleteUser/' . $u->id_user) ?>')" href="#!" class="label label-danger">Hapus</label>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card table-card">
                <div class="card-header">
                    <?= $this->session->flashdata('message_konsultan') ?>
                    <h5>User Konsultan</h5>
                </div>
                <div class="card-block">
                    <div class="table-responsive px-3">
                        <table class="table table-sm table-bordered table-hover" id="example_user_consultan">
                            <thead clas>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Telepon</th>
                                    <th>Spesialis</th>
                                    <th>Motto Hidup</th>
                                    <th>Tarif</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($konsultan as $k) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $k->nama_lengkap ?></td>
                                        <td><?= $k->no_wa ?></td>
                                        <td><?= $k->nm_kategori ?></td>
                                        <td>Rp. <?= number_format($k->tarif) ?></td>
                                        <td><?= $k->motto_hidup ?></td>
                                        <td> <?php if ($k->status == 0) { ?>
                                                <label class="label label-primary">Menunggu Persetujuan</label>
                                            <?php } else if ($k->status == 1) { ?>
                                                <label class="label label-success">Konsultan Disetujui</label>
                                            <?php } else { ?>
                                                <label class="label label-danger">Ditolak</label>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button href="#!" id="apprv" data-toggle="modal" data-target="#approveModal" data-nama="<?= $k->nama_lengkap ?>" data-id="<?= $k->id_user ?>" class="btn btn-sm btn-round btn-primary">Approve</button>
                                            <button onclick="deleteConfirm('<?= base_url('Dashboard/deleteUser/' . $k->id) ?>')" href="#!" class="btn btn-sm btn-round btn-danger">Tolak</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
<!-- Approve ITEM MODAL -->
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Konfirmasi Menjadi Konsultan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dashboard/approveKonsultan') ?>" method="POST">
                    <b id="nama"></b> diizinkan menjadi konsultan
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="id" id="id" class="form-control" placeholder="kategori" required />
                            </div>
                        </div>
                    </div>

                    <div class="row modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary btn-round waves-effect">Iya</button>
                        <button data-dismiss="modal" class="btn btn-sm btn-round btn-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dashboard/editKategori') ?>" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <input type="hidden" name="id" id="id" class="form-control" placeholder="id" required />
                            <label for="">Kategori</label>
                            <div class="form-group">
                                <input type="text" name="kategori" id="nm_kategori" class="form-control" placeholder="kategori" required />
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

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#editkat', function() {

            var nm_kategori = $(this).data('kat');
            var id = $(this).data('id');

            // alert(nm_kategori);
            $('#id').val(id);
            $('#nm_kategori').val(nm_kategori);
        });
    });

    $(document).ready(function() {
        $(document).on('click', '#apprv', function() {

            var id = $(this).data('id');
            var nama = $(this).data('nama');

            $('#id').val(id);
            $('#nama').text(nama);
        });
    });

    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
<script>
    $(document).ready(function() {
        $('#example_user_consultan').DataTable({
            "lengthMenu": [
                [5, -1],
                [5, "All"]
            ]
        });
    });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>