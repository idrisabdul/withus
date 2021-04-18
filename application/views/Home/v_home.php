<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <form action="<?= base_url('tanya/input') ?>" method="post">
                                <div class="form-group form-default">
                                    <h5>Curhat Sini</h5>
                                    <div class="row">
                                        <div class="col-md">
                                            <textarea name="pertanyaan" class="form-control mt-4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="kategori" id="" class="form-control">
                                                <option value="Karir">Karir</option>
                                                <option value="Problematika Kehidupan">Problematika Kehidupan</option>
                                                <option value="Perkuliahan">Perkuliahan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="username" id="" class="form-control">
                                                <option value="<?= ucfirst($this->session->userdata('username')); ?>"><?= ucfirst($this->session->userdata('username')); ?></option>
                                                <option value="No Name">No Name</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-right">
                                                <?php if (!$this->session->userdata('username')) { ?>
                                                    <button class="btn btn-sm btn-disabled waves-effect waves-light mt-2" disabled><i class="fa fa-edit" aria-hidden="true"></i>Ajukan</button>
                                                <?php } else { ?>
                                                    <button class="btn btn-sm btn-info waves-effect waves-light mt-2"><i class="fa fa-edit" aria-hidden="true"></i>Ajukan</button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <?php foreach ($questions as $q) { ?>
                    <?php $user_id = $q['user_id'] ?>

                    <div class="card-header">
                        <h5><?= ucfirst($q['username']); ?></h5>
                        <span><?= $q['tgl_pertanyaan']; ?></span>
                        <div class="card-header-right">
                            <div class="row">
                                <h5><?= $q['kategori']; ?></h5>
                                <ul class=" mx-3 list-unstyled card-option">
                                    <li>
                                        <i class="fa fa fa-wrench open-card-option"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-window-maximize full-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-minus minimize-card"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-refresh reload-card"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>
                            <?= $q['pertanyaan']; ?>
                        </p>
                        <div class="text-right">
                            <div class="pull-left mt-1">
                                <i class="fa fa-comment mr-2"></i><?php $id = $q['id_tanya'];
                                                                    $jumlahc = $this->db->query("SELECT pertanyaan FROM jawab WHERE id_tanya = $id")->num_rows();
                                                                    echo $jumlahc; ?>
                            </div>
                            <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="">
                                <?php if ($user_id == ucfirst($this->session->userdata('id_user'))) : ?>
                                    <button onclick="deleteConfirm('<?= base_url('home/delete/' . $q['id_tanya']) ?>')" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                    <a href="<?= base_url('') ?>home/edit" class="btn btn-info btn-sm waves-effect waves-light"><i class="fa fa-edit"></i></a>
                                <?php endif; ?>
                            </div>
                            <?= anchor('jawab/index/' . $q['id_tanya'], '<button href="#" name="id" id="jawab" class="btn btn-sm btn-outline-primary text-right f-w-600">Beri Jawaban</button>') ?>
                        </div>
                    </div>
                    <hr class="mt-0 mb-2">
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenter  ">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pernyataan akan dihapus</div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-outline" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-sm btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#exampleModalCenter').modal();
    }
</script>