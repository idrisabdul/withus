<div class="row">
    <div class="col-sm-12">
        <!-- Material tab card start -->
        <div class="card">
            <div class="card-header">
                <h5>Form Pengajuan Konsultan</h5>
                <span>Nasihat yang Anda berikan akan menjadi kekuatan bagi mereka yang sedang rapuh</span>
            </div>
            <div class="card-block">
                <!-- Row start -->
                <div class="col-xl-12">
                    <div class="card-block">
                        <form method="post" action="<?= base_url('Konsultasi/storeKonsultan') ?>">
                            <input type="hidden" name="user_id" class="form-control" value="<?= $this->session->userdata('id_user') ?>">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kategori Spesialis</label>
                                <div class="col-sm-10">
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) { ?>
                                            <option value="<?= $k['id'] ?>"><?= ucfirst($k['nm_kategori']) ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tarif</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="tarif" placeholder="Jika Anda ingin sukarela, isi dengan nilai 0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_profile" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Motto Hidup</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" cols="5" class="form-control" name="motto_hidup" placeholder="Masukkan Motto Hidup Anda"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" cols="5" class="form-control" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-sm btn-primary btn-round waves-effect">Submit Form</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Project statustic end -->
            </div>
        </div>
    </div>