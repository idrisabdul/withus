<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <!-- Material statustic card start -->
                <div class="col-xl-6 col-md-12">
                    <div class="card mat-stat-card">
                        <div class="card-block">
                            <div class="row align-items-center b-b-default">
                                <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                    <div class="row align-items-center text-center">
                                        <div class="col-4 p-r-0">
                                            <i class="far fa-user text-c-purple f-24"></i>
                                        </div>
                                        <div class="col-8 p-l-0">
                                            <h6>Username</h6>
                                            <p class="text-muted m-b-0"><?= ucfirst($this->session->userdata('username')) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-b-20 p-t-20">
                                    <div class="row align-items-center text-center">
                                        <div class="col-4 p-r-0">
                                            <i class="fas fa-at text-c-green f-24"></i>
                                        </div>
                                        <div class="col-8 p-l-0">
                                            <h6>Email</h6>
                                            <p class="text-muted m-b-0"><?= $this->session->userdata('email') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                    <div class="row align-items-center text-center">
                                        <div class="col-4 p-r-0">
                                            <i class="far fa-id-card text-c-red f-24"></i>
                                        </div>
                                        <div class="col-8 p-l-0">
                                            <h6>Profesi</h6>
                                            <p class="text-muted m-b-0"><?= ucfirst($this->session->userdata('profesi')) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-b-20 p-t-20">
                                    <div class="row align-items-center text-center">
                                        <div class="col-4 p-r-0">
                                            <i class="fas fa-question text-c-blue f-24"></i>
                                        </div>
                                        <div class="col-8 p-l-0">
                                            <h6>Jumlah Pertanyaan</h6>
                                            <p class="text-muted m-b-0"><?= $jumlahtanya ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="card mat-clr-stat-card text-white blue">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-3 text-center bg-c-blue">
                                    <i class="fas fa-comment mat-icon f-24"></i>
                                </div>
                                <div class="col-9 cst-cont">
                                    <h5><?= $jumlahjawab ?></h5>
                                    <p class="m-b-0">Seluruh Jawaban dari kebaikan Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mat-clr-stat-card text-white yellow">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-3 text-center bg-c-yellow">
                                    <i class="fas fa-star mat-icon f-24"></i>
                                </div>
                                <div class="col-9 cst-cont">
                                    <h5><?= $jumlahapresiasi ?></h5>
                                    <p class="m-b-0">Banyaknya Apresiasi untuk jawaban Anda</p>
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
                            <h5>Daftar Jawaban Anda</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 without-header" id="example">
                                    <tbody>
                                        <?php foreach ($list_answer as $la) { ?>
                                            <tr>
                                                <a href="#">
                                                    <td width="79%">
                                                        <div class="d-inline-block align-middle">
                                                            <div class="d-inline-block">
                                                                <h6><?= $la['pertanyaan'] ?></h6>
                                                                <p class="text-muted m-b-0"><?= $la['jawaban'] ?></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <i style="color:orange;" class="fa fa-star mr-2"></i><label class="badge badge-inverse-success"><?= $la['rating'] ?></label>
                                                    </td>
                                                </a>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Daftar Pertanyaan Anda</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 without-header">
                                    <tbody>
                                        <?php foreach ($list_questions as $lq) { ?>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <div class="d-inline-block">
                                                            <h6><?= $lq['pertanyaan'] ?></h6>
                                                            <p class="text-muted m-b-0"><?= $lq['jawaban'] ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6 class="f-w-700"><?= $lq['totaljawab'] ?><i class="fas fa-comment text-c-blue m-l-10"></i></h6>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>