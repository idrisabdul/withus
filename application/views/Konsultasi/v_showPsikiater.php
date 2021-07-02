<style>
    .konsul-view {
        border: 0.1em solid #aaaaaa;
        border-radius: 25px;
        padding: 15px 0;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <!-- Material tab card start -->
        <div class="card">
            <div class="card-header">
                <h5>Top Psikolog</h5>
                <span>Pilih Psikolog yang akan membantu anda menyelesaikan masalah.</span>
            </div>
            <div class="card-block">
                <!-- Row start -->
                <div class="col-xl-12">
                    <div class="row">
                        <?php foreach ($user_psikolog as $up) { ?>
                            <div class="col-xl-3 col-sm-3 col-md-6">
                                <div class="card mx-1 py-3">
                                    <div class="text-center">
                                        <h6><?= ucfirst($up['nama_lengkap']); ?></h6>
                                        <img class="img-80 img-radius mb-4" src="<?= base_url() ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                        <div class="text-center">
                                            <?= anchor('Konsultasi/chat/' . $up['user_id'], '<button style="border-radius: 25px;" width="15px" class="text-center btn btn-sm btn-primary text-right f-w-600">Konsultasi</button>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Project statustic end -->
        </div>
    </div>
</div>