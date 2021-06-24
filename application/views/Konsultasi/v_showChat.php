<div class="page-body">
    <div class="card">
        <!-- Email-card start -->
        <div class="card-block email-card">
            <div class="row">
                <div class="col-lg-12 col-xl-3">
                    <div class="user-head row">
                        <div class="user-face">
                            <img class="img-fluid" src="<?= base_url() ?>assets/images/logo.png" alt="Theme-Logo" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-9">
                    <div class="mail-box-head row justify-content-end">
                        <div class="col-auto">
                            <form class="form-material">
                                <div class="material-group">
                                    <div class="form-group form-default">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Search</label>
                                    </div>
                                    <div class="material-addone">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left-side section end -->
            <!-- Right-side section start -->
            <div class="col-lg-12 col-xl-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">

                        <div class="mail-body">

                            <div class="mail-body-content">
                                <div class="table-responsive">
                                    <table class="table table-hover table-sm">
                                        <?php foreach ($allmessage as $am) { ?>
                                            <tr class="unread">
                                                <td>
                                                    <div class="check-star">
                                                        <div class="fade-in-primary">
                                                            <label>
                                                                <img src="<?= base_url() ?>assets/images/avatar-4.jpg" width="30px" class="img-radius" alt="User-Profile-Image">
                                                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                            </label>
                                                        </div>
                                                        <i class="icofont icofont-star text-warning"></i>
                                                    </div>
                                                </td>
                                                <td><a href="email-read.html" class="email-name waves-effect"><?= $am['pesan_masuk'] ?></a></td>
                                                <td><a href="email-read.html" class="email-name waves-effect"><?= $am['pesan'] ?></a></td>
                                                <?php
                                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                                $datetime1 = strtotime($am['tgl_chat']);
                                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                                $days = $secs / 86400;  ?>
                                                <td class="email-time"><?= intval($days) ?> Hari</td>
                                                <?php if ($user_id == $am['pesan_masuk']) { ?>
                                                    <td class="email-attch"><?= anchor('Konsultasi/chat/' . $am['pesan_keluar'], '<button href="#" name="id" id="jawab" class="btn btn-sm btn-outline-primary text-right f-w-600"><i class="fas fa-paper-plane"></i></button>') ?></td>
                                                <?php } else { ?>
                                                    <td class="email-attch"><?= anchor('Konsultasi/chat/' . $am['pesan_masuk'], '<button href="#" name="id" id="jawab" class="btn btn-sm btn-outline-primary text-right f-w-600"><i class="fas fa-paper-plane"></i></button>') ?></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right-side section end -->
        </div>
    </div>
    <!-- Email-card end -->
</div>
<!-- Page-body start -->