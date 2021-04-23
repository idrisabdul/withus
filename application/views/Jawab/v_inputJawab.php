<style>
    .fixed-button {
        position: fixed;
        bottom: 5px;
        right: 10px;
        left: 10px;
        opacity: 0;
        z-index: 9;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        -webkit-animation: pulse 2s infinite;
        animation: pulse 2s infinite;
        border-radius: 25px;
    }

    .fixed-button .btn {
        margin: 0;
        padding: 12px 25px;
        background: #3b98ff;
        border: 1px solid #3b98ff;
        border-radius: 25px;
        text-transform: capitalize;
        font-weight: bold;
        font-size: 16px
    }

    .fixed-button .btn:focus,
    .fixed-button .btn:active,
    .fixed-button .btn:hover {
        background: #303549;
        border-bottom: 1px solid #303549
    }


    .fixed-button.active {
        opacity: 1
    }
</style>

<div id="tanya" class="card">
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>

    <input type="hidden" id="user" value="<?= $this->session->userdata('username') ?>" />
    <div class="card-header bg-info">
        <h5 style="color: white;"><?= ucfirst($tanya['username']); ?></h5>
        <span><?= $tanya['tgl_pertanyaan']; ?></span>
        <div class="card-header-right">
            <div class="row">
                <h5 style="color: seashell;"><?= $tanya['kategori']; ?></h5>
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
    <div class="card-block  bg-light">
        <p>
            <?= $tanya['pertanyaan']; ?>
        </p>
        <div class="text-right">
            <div class="pull-left mt-1">
                <i style="color:skyblue;" class="fa fa-comment mr-2"></i><label class="badge badge-inverse-primary"><span id="count_jaw"></span></label>
            </div>
            <?php if (!$this->session->userdata('username')) { ?>
            <?php } else { ?>
                <?php if ($this->session->userdata('id_user') == $tanya['user_id']) { ?>
                    <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="">
                        <button onclick="deleteConfirm('<?= base_url('home/delete/' . $tanya['id_tanya']) ?>')" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-trash"></i></button>
                    </div>
                    <button href="#" id="showJawab" class="btn btn-sm btn-outline-primary text-right f-w-600">Beri Jawaban</button>
                <?php } else { ?>
                    <button href="#" id="showJawab" class="btn btn-sm btn-outline-primary text-right f-w-600">Beri Jawaban</button>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <table class="table table-hover m-b-0 without-header">
        <tbody id="jawaban_show">
        </tbody>
    </table>

    <hr class="mt-0 mb-2">

</div>
<div class="fixed-button active">
    <div id="kolom_jawab" class="form-group">
        <input type="hidden" id="nama_nanya" name="nama_nanya" value="<?= ucfirst($tanya['username']); ?>">
        <input type="hidden" id="kategori" name="kategori" value="<?= $tanya['kategori'] ?>">
        <input type="hidden" id="pertanyaan" name="pertanyaan" value="<?= $tanya['pertanyaan']; ?>">
        <input type="hidden" id="id_tanya" name="id_tanya" value="<?= $tanya['id_tanya'] ?>">
        <input type="hidden" id="username" name="username" value="<?= $this->session->userdata('username'); ?>">

        <textarea class="form-control form-control-round" name="jawaban" id="jawaban" cols="60" rows="2"> </textarea>
        <div class="text-right mt-2 mr-2">
            <button href="#" id="hide" class="btn btn-sm btn-secondary text-right f-w-600">x</button>
            <button href="#" id="jawab" class="btn btn-sm btn-primary text-right f-w-600">Jawab</button>
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

<div class="modal fade" id="Modalhapusjaw" tabindex="-1" role="dialog" aria-labelledby="ModalhapusjawTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modalhapusjaw">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <input type="hidden" name="id-jawab" id="id-jawab" value="">
            <div class="modal-body">Jawaban Anda akan dihapus?</div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-outline" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete-jaw" class="btn btn-sm btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?php
$user = $this->session->userdata('username');
$sqlcheck = $this->db->query("SELECT * FROM rating_jawab WHERE username = '$user' && id_jawab = 94");
if ($sqlcheck->num_rows() > 0) {
    $sqlada = 'ada';
} else {
    $sqlada = 'kosong';
}
?>

<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.min.js "></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#kolom_jawab').hide();
        $('#showJawab').click(function() {
            $('#kolom_jawab').show("slow");
        });
        $('#hide').click(function() {
            $('#kolom_jawab').hide("slow");
        });
    });


    $(document).ready(function() {
        tampil_jawaban();

        function tampil_jawaban() {
            var id = $('#id_tanya').val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url() ?>jawab/showjawab',
                dataType: 'JSON',
                data: {
                    id_tanya: id
                },
                async: true,
                success: function(data) {
                    var html = '';
                    var i;
                    var user = $('#user').val();
                    // alert(data);
                    for (i = 0; i < data.length; i++) {
                        if (user == data[i]['nama_jawab']) {
                            html += '<tr>' +
                                '<td>' +
                                '<div class="text-right">' +
                                '<h6 class="pull-left">' + data[i]['nama_jawab'] + '</h6>' +
                                '<?php if ($this->session->userdata('username')) { ?> ' +
                                '<a class="waves-effect waves-light" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="ti-more"></i></a>' +
                                '<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">' +
                                '<a class="dropdown-item waves-light waves-effect" id="delete-jaw" data="' + data[i]['id_jawab'] + '" href="javascript:;">Hapus</a>' +
                                '<div class="dropdown-divider"></div>' +
                                '<a class="dropdown-item waves-light waves-effect" href="#">Edit</a>' +
                                '</div>' +
                                '</div>' +
                                '<?php } else { ?>' +
                                '<a class="waves-effect waves-light" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="ti-more"></i></a>' +
                                '<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">' +
                                '<a class="dropdown-item waves-light waves-effect" href="<?= base_url('auth') ?>">Login diperlukan</a>' +
                                '</div>' +
                                '</div>' +
                                ' <?php } ?>' +
                                '<p class="">' + data[i]['jawaban'].trim() + '</p>' +
                                '<i style="color: orange;" <?php if (!$this->session->userdata('username')) { ?> id="apreciate" class="fa fa-star mr-2" <?php } else { ?> id="apreciate1" class="fa fa-star mr-2" <?php } ?>  data-id="' + data[i]['id_jawab'] + '"></i><label class="badge badge-inverse-primary"><span id="jumlahlike">' + data[i]['rating'] + '</span></label>' +
                                '</td>' +
                                '</tr>';
                        } else {
                            html += '<tr>' +
                                '<td>' +
                                '<div class="text-right">' +
                                '<h6 class="pull-left">' + data[i]['nama_jawab'] + '</h6>' +
                                '<?php if ($this->session->userdata('username')) { ?> ' +
                                '<a class="waves-effect waves-light" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="ti-more"></i></a>' +
                                '<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">' +
                                '<a class="dropdown-item waves-light waves-effect" id="show_profile" data="' + data[i]['id_jawab'] + '" href="javascript:;">Profile</a>' +
                                '<a class="dropdown-item waves-light waves-effect" id="show_profile" data="' + data[i]['id_jawab'] + '" href="javascript:;">Simpan</a>' +
                                '</div>' +
                                '</div>' +
                                '<?php } else { ?>' +
                                '<a class="waves-effect waves-light" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="ti-more"></i></a>' +
                                '<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">' +
                                '<a class="dropdown-item waves-light waves-effect" href="<?= base_url('auth') ?>">Login diperlukan</a>' +
                                '</div>' +
                                '</div>' +
                                ' <?php } ?>' +
                                '<p class="text-muted">' + data[i]['jawaban'] + '</p>' +
                                '<i style="color: orange;" <?php if (!$this->session->userdata('username')) { ?> id="apreciate" class="fa fa-star mr-2" <?php } else { ?> id="apreciate1" class="fa fa-star mr-2" <?php } ?>  data-id="' + data[i]['id_jawab'] + '"></i><label class="badge badge-inverse-primary"><span id="jumlahlike">' + data[i]['rating'] + '</span></label>' +
                                '</td>' +
                                '</tr>';

                        }
                    }
                    n = data.length;
                    $('#jawaban_show').html(html);
                    $('#count_jaw').text(n);
                }
            });
        }

        $('#jawaban_show').on('click', '#apreciate1', function() {
            var id = $(this).data('id');
            $clicked_btn = $(this);
            if ($clicked_btn.hasClass('fa-star')) {
                action = 'apreciate';
            }
            $.ajax({
                url: '<?= base_url() ?>jawab/likeJawab',
                dataType: 'JSON',
                type: 'POST',
                data: {
                    action: action,
                    id: id
                },
                success: function(data) {
                    tampil_jawaban();
                }
            });
        });
        $('#jawaban_show').on('click', '#apreciate', function() {
            alert('Loginlaah');
        });

        $('#jawaban_show').on('click', '#delete-jaw', function() {
            var id = $(this).attr('data');
            $('#Modalhapusjaw').modal('show');
            $('[name="id-jawab"]').val(id);
        });

        $('#btn-delete-jaw').on('click', function() {
            var id = $('#id-jawab').val();
            $.ajax({
                dataType: 'JSON',
                type: 'POST',
                url: '<?= base_url('') ?>jawab/hapusjawab',
                data: {
                    id: id
                },
                success: function() {
                    $('#Modalhapusjaw').modal('hide');
                    tampil_jawaban();
                }
            });
        });

        $('#jawab').on('click', function() {
            var nama_nanya = $('#nama_nanya').val();
            var kategori = $('#kategori').val();
            var pertanyaan = $('#pertanyaan').val();
            var id_tanya = $('#id_tanya').val();
            var username = $('#username').val();
            var jawaban = $('#jawaban').val();
            if (jawaban != "") {
                $.ajax({
                    url: "<?= base_url('jawab/input'); ?>",
                    type: "POST",
                    data: {
                        type: 1,
                        nama_nanya: nama_nanya,
                        kategori: kategori,
                        pertanyaan: pertanyaan,
                        id_tanya: id_tanya,
                        username: username,
                        jawaban: jawaban,
                    },
                    cache: false,
                    success: function(data) {
                        tampil_jawaban();
                        $('#jawaban').val('');
                    }
                });
            } else {
                alert("Anda Belum menjawab");
            }
        });
    });
</script>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#exampleModalCenter').modal();
    }
</script>