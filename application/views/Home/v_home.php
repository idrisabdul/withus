<style>
    @-webkit-keyframes placeHolderShimmer {
        0% {
            background-position: -468px 0;
        }

        100% {
            background-position: 468px 0;
        }
    }

    @keyframes placeHolderShimmer {
        0% {
            background-position: -468px 0;
        }

        100% {
            background-position: 468px 0;
        }
    }

    .content-placeholder {
        display: inline-block;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        background: #f6f7f8;
        background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
        background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
        background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
        -webkit-background-size: 800px 104px;
        background-size: 800px 104px;
        height: inherit;
        position: relative;
    }

    .post_data {
        padding: 24px;
        border: 1px solid #f9f9f9;
        border-radius: 5px;
        margin-bottom: 24px;
        box-shadow: 10px 10px 5px #eeeeee;
    }
</style>

<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <form action="<?= base_url('tanya/input') ?>" method="post">
                                <div class="form-group form-default">
                                    <h5>Cerita Sini</h5>
                                    <div class="row">
                                        <div class="col-md">
                                            <textarea name="pertanyaan" placeholder="Tidak selamanya masalah harus dipendam, terkadang dengan bercerita membuat hati jadi lega. Marilah mengeluhh, mengode (eaa), berteriak, berkata kasar, tpi jangan lupa tetaplah bercukur" class="form-control mt-4 form-cerita"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="kategori" id="" class="form-control">
                                                <?php foreach ($kategori as $k) { ?>
                                                    <option value="<?= $k['id'] ?>"><?= ucfirst($k['nm_kategori']) ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="username" id="" class="form-control">
                                                <option value="<?= ucfirst($this->session->userdata('id_user')); ?>"><?= ucfirst($this->session->userdata('username')); ?></option>
                                                <option value="0">Anonym</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-right">
                                                <?php if (!$this->session->userdata('username')) { ?>
                                                    <button class="btn btn-sm btn-disabled waves-effect waves-light mt-2" disabled><i class="fa fa-edit" aria-hidden="true"></i>Ajukan</button>
                                                <?php } else { ?>
                                                    <button class="btn btn-sm btn-disabled waves-effect waves-light mt-2" disabled id="disable"><i class="fa fa-edit" aria-hidden="true"></i>Ajukan</button>
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
                <div class="row mx-5 my-3">
                    <div class="text-center" id="filter">
                        <ul>
                            <li style="border-radius: 25px;" width="15px" data-li="0" class="text-center btn-filt btn btn-sm btn-outline-primary text-right f-w-600 mr-1 active">All</li>
                            <?php foreach ($kategori as $k) { ?>
                                <li style="border-radius: 25px;" width="15px" data-li="<?= $k['id'] ?>" class="text-center btn-filt btn btn-sm btn-outline-primary text-right f-w-600 mr-1 mb-1"><?= $k['nm_kategori'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div id="load_data"></div>
                <div id="card-block"></div>
                <hr class="mt-0 mb-2">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_tanya" tabindex="-1" role="dialog" aria-labelledby="delete_tanyaTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete_tanya">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Data yang dihapus tidak akan bisa dikembalikan.
                <form action="<?= base_url('Home/delete') ?>" method="POST">
                    <input type="hidden" name="id" id="id1">
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" data-dismiss="modal">Batal</button>
                <button type="submit" id="btn-delete" class="btn btn-danger" href="#">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.min.js "></script>

<script>
    var limit = 7;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit) {
        var output = '';
        for (var count = 0; count < limit; count++) {
            output += '<div class="post_data">';
            output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
            output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
            output += '</div>';
        }
        $('#card-block').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start) {
        $.ajax({
            url: "<?php echo base_url(); ?>Home/fetch",
            method: "POST",
            data: {
                limit: limit,
                start: start
            },
            cache: false,
            success: function(data) {
                if (data == '') {
                    $('#card-block').html('<span class="text-info">Sudah Dibatas Akhir</span>');
                    action = 'active';
                } else {
                    $('#load_data').append(data);
                    $('#card-block').html("");
                    action = 'inactive';
                }
            }
        })
    }

    if (action == 'inactive') {
        action = 'active';
        load_data(limit, start);
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
            lazzy_loader(limit);
            action = 'active';
            start = start + limit;
            setTimeout(function() {
                load_data(limit, start);
            }, 1000);
        }
    });

    $(document).ready(function() {
        $(document).on('click', '#delete', function() {
            var id = $(this).data('id');
            // alert(id);
            $('#id1').val(id);
            $('#btn-delete').attr('href', '<?= base_url() ?>Home/delete/' + id);
        });
    });


    $(document).ready(function() {
        $('.form-cerita').on('keyup', function() {
            empty = $('.form-cerita').val().length;


            if (empty > 0) {
                $('#disable').removeAttr('disabled').removeClass('btn-disabled').addClass('btn-info');
            } else if (empty == 0) {
                $('#disable').attr('disabled', 'disabled').removeClass('btn-info').addClass('btn-disabled');
            }
        });
    });

    $(document).ready(function() {
        $(".btn-filt").click(function() {
            var attr = $(this).attr("data-li");

            if (attr > 0) {
                // alert(attr);
                $(".btn-filt").removeClass("active");
                $(this).addClass("active");

                $(".item").hide();

                $.ajax({
                    url: "<?= base_url() ?>Home/getKategori",
                    data: {
                        id: attr,
                    },
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        // console.log(data);
                        if (attr == data) {
                            $("." + attr).show();
                        }


                    }

                });
            } else {
                $(".btn-filt").removeClass("active");
                $(this).addClass("active");
                $(".item").show();

            }

        });
    });
</script>