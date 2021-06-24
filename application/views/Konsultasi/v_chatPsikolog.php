<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    img {
        max-width: 100%;
    }

    .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: left;
        overflow: hidden;
        width: 40%;
        border-right: 1px solid #c4c4c4;
    }

    .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
    }

    .top_spac {
        margin: 20px 0 0;
    }


    .recent_heading {
        float: left;
        width: 40%;
    }

    .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%;
    }

    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
    }

    .srch_bar input {
        border: 1px solid #cdcdcd;
        border-width: 0 0 1px 0;
        width: 80%;
        padding: 2px 0 4px 6px;
        background: none;
    }

    .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
    }

    .srch_bar .input-group-addon {
        margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
        font-size: 15px;
        color: #464646;
        margin: 0 0 8px 0;
    }

    .chat_ib h5 span {
        font-size: 13px;
        float: right;
    }

    .chat_ib p {
        font-size: 14px;
        color: #989898;
        margin: auto
    }

    .chat_img {
        float: left;
        width: 11%;
    }

    .chat_ib {
        float: left;
        padding: 0 0 0 15px;
        width: 88%;
    }

    .chat_people {
        overflow: hidden;
        clear: both;
    }

    .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
    }

    .inbox_chat {
        height: 550px;
        overflow-y: scroll;
    }

    .active_chat {
        background: #ebebeb;
    }

    .incoming_msg_img {
        display: inline-block;
        width: 6%;
    }

    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
    }

    .received_withd_msg p {
        background: #fff none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 10px 10px 10px 12px;
        width: 100%;
    }

    .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
    }

    .received_withd_msg {
        width: 57%;
    }

    .mesgs {
        padding: 30px 15px 0 25px;
        width: 100%;
    }

    .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0;
        color: #fff;
        padding: 10px 10px 10px 12px;
        width: 100%;
    }

    .outgoing_msg {
        overflow: hidden;
        margin: 26px 0 26px;
    }

    .sent_msg {
        float: right;
        width: 46%;
    }

    .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
    }

    .type_msg {
        border-top: 1px solid #c4c4c4;
        position: relative;
    }

    .msg_send_btn {
        background: #05728f none repeat scroll 0 0;
        border: medium none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 17px;
        height: 33px;
        position: absolute;
        right: 0;
        top: 11px;
        width: 33px;
    }

    .messaging {
        padding: 0 0 50px 0;
    }

    .msg_history {
        height: 516px;
        overflow-y: auto;
    }
</style>

<div class="container">
    <input type="hidden" name="idpesan_masuk" id="idpesan_masuk" value="<?= $idpesan_masuk ?>">
    <div class="messaging">
        <div class="inbox_msg">
            <div class="mesgs">
                <div class="msg_history">
                    <?php foreach ($user_chat as $u) { ?>
                        <?php if ($u['pesan_masuk'] === $idpesan_masuk) { ?>
                            <div class="outgoing_msg">
                                <div class="sent_msg">
                                    <p><?= $u['pesan'] ?></p>
                                    <span class="time_date"> <?= $u['tgl_chat'] ?></span>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="<?= base_url() ?>assets/images/avatar-4.jpg" width="40px" class="img-radius" alt="User-Profile-Image"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p><?= $u['pesan'] ?></p>
                                        <span class="time_date"> <?= $u['tgl_chat'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="getnewchat">
                        </div> -->
                        <!-- <div class="incoming_msg">
                            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>We work directly with our designers and suppliers,
                                        and sell direct to you, which means quality, exclusive
                                        products, at a price anyone can afford.</p>
                                    <span class="time_date"> 11:01 AM | Today</span>
                                </div>
                            </div>
                        </div> -->
                    <?php } ?>
                </div>
                <div class="type_msg">
                    <div class="input_msg_write">
                        <input type="hidden" id="pengirim" value="<?= $idpesan_masuk ?>" />
                        <input type="hidden" id="penerima" value="<?= $this->session->userdata('id_user'); ?>" placeholder="Type a message" />
                        <input type="text" class="write_msg" id="pesan" placeholder="Type a message" />
                        <button class="msg_send_btn" id="send" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.min.js "></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('6d9d97acfa4a94ce7d0a', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        // alert(data.message);
        // var datas = data;
        // console.log(datas.pesan);
        showMessage(data);
    });

    // function showMessage(data) {
    //     var id_p_masuk = $('#idpesan_masuk').val();
    //     var id_p_keluar = $('#penerima').val();
    //     var i;
    //     var pesan = '';
    //     console.log(data);
    //     // pesan += '<b>Pesan</b> :<span>' + data[i]['pesan'] + '</span><br>';
    //     for (i = 0; i < data.length; i++) {
    //         pesan += '<div class="msg_history">' +
    //             '<div class="outgoing_msg">' +
    //             '<div class="sent_msg">' +
    //             '<p>' + data[i]['pesan'] + '</p>' +
    //             '<span class="time_date"> 11:01 AM | Today</span>' +
    //             '</div>' +
    //             '</div>' +
    //             '<div class="incoming_msg">' +
    //             '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>' +
    //             '<div class="received_msg">' +
    //             '<div class="received_withd_msg">' +
    //             '<p>' + data[i]['pesan'] + '</p>' +
    //             '<span class="time_date"> 11:01 AM | Yesterday</span>' +
    //             '</div>' +
    //             '</div>' +
    //             '</div>' +
    //             '</div>';
    //     }

    // $('.mesgs').html(pesan);

    // // alert(pesan);

    // }

    function showMessage(data) {
        var data = data;
        // data = JSON.parse(data);
        console.log(data);
        var ses_id = <?php echo $this->session->userdata('id_user'); ?>;
        // var penerima = $('#penerima').val();
        var penerima = $('#penerima').val();
        var pengirim = $('#pengirim').val();
        // alert(pengirim);
        // if (data.pesan_keluar == penerima) {
        //     html = '';
        //     html += '<div class="outgoing_msg">';
        //     html += '<div class="sent_msg">';
        //     html += '<p>' + data.pesan + '</p>';
        //     html += '<span class="time_date">' + data.tgl_chat + '</span>';
        //     html += '</div>';
        //     html += '</div>';
        //     // $('.msg_history').append(html);
        //     $('.msg_history').append(html);
        // } else if (data.pesan_masuk == pengirim) {
        //     html = '';
        //     html += '<div class="incoming_msg">';
        //     html += '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
        //     html += '<div class="received_msg">';
        //     html += '<div class="received_withd_msg">';
        //     html += '<p>' + data.pesan + '</p>';
        //     html += '<span class="time_date">' + data.tgl_chat + '</span>';
        //     html += '</div>';
        //     html += '</div>';
        //     html += '</div>';
        //     $('.msg_history').append(html);
        //     // $('.msg_history').append(html);
        //     $('#pesan').val("");
        // }
        // alert(data.pesan_keluar);
        // alert(penerima);
        if (data.pesan_keluar == penerima) {
            html = '';
            html += '<div class="outgoing_msg">';
            html += '<div class="sent_msg">';
            html += '<p>' + data.pesan + '</p>';
            html += '<span class="time_date">' + data.tgl_chat + '</span>';
            html += '</div>';
            html += '</div>';
            // $('.msg_history').append(html);
            $('.msg_history').append(html);
        } else if (data.pesan_keluar == pengirim && data.pesan_masuk == penerima) {
            html = '';
            html += '<div class="incoming_msg">';
            html += '<div class="incoming_msg_img"> <img src="<?= base_url() ?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> </div>';
            html += '<div class="received_msg">';
            html += '<div class="received_withd_msg">';
            html += '<p>' + data.pesan + '</p>';
            html += '<span class="time_date">' + data.tgl_chat + '</span>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('.msg_history').append(html);
            // $('.msg_history').append(html);
            $('#pesan').val("");
        }
        // else if (data.pesan_masuk == penerima && pesan_keluar == pengirim) {
        //     html = '';
        //     html += '<div class="incoming_msg">';
        //     html += '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
        //     html += '<div class="received_msg">';
        //     html += '<div class="received_withd_msg">';
        //     html += '<p>' + data.pesan + '</p>';
        //     html += '<span class="time_date">' + data.tgl_chat + '</span>';
        //     html += '</div>';
        //     html += '</div>';
        //     html += '</div>';
        //     $('.msg_history').append(html);
        //     // $('.msg_history').append(html);
        //     $('#pesan').val("");
        // }

        //  else {
        //     html = '';
        //     html += '<div class="incoming_msg">';
        //     html += '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
        //     html += '<div class="received_msg">';
        //     html += '<div class="received_withd_msg">';
        //     html += '<p>' + data.pesan + '</p>';
        //     html += '<span class="time_date">' + data.tgl_chat + '</span>';
        //     html += '</div>';
        //     html += '</div>';
        //     html += '</div>';
        //     $('.msg_history').append(html);
        //     // $('.msg_history').append(html);
        //     $('#pesan').val("");
        // }
    }

    $(document).ready(function() {
        tampil_pesan();

        function tampil_pesan() {

            var penerima = $('#penerima').val();
            var pengirim = $('#pengirim').val();
            var pesan = $('#pesan').val();
            $.ajax({
                url: '<?= base_url() ?>Konsultasi/showChat',
                dataType: 'JSON',
                type: 'POST',
                data: {
                    pesan_masuk: pengirim,
                    pesan_keluar: penerima,
                    pesan: pesan,
                },
                success: function(data) {

                }
            });
        }

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#send').on('click', function() {
            var pengirim = $('#pengirim').val();
            var penerima = $('#penerima').val();
            var pesan = $('#pesan').val();
            // alert(pesan);

            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>Konsultasi/input_chat",
                data: {
                    pesan_masuk: pengirim,
                    pesan_keluar: penerima,
                    pesan: pesan,
                },
                dataType: "JSON",
                success: function(data) {
                    $('#pesan').val("");
                    // alert('success');
                },
                error: function(data) {
                    alert('eror');
                }
            });
        });
    });
</script>