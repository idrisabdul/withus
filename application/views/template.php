<!DOCTYPE html>
<html lang="en">

<head>
    <title>B-Story</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/themify-icons/themify-icons.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/feather/css/feather.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome-n.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <!-- <img class="img-fluid" src="<?= base_url() ?>assets/images/logo.png" alt="Theme-Logo" /> -->
                            <h1>Bumenet Story</span>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <?php if (!$this->session->userdata('username')) { ?>
                                <button class="btn bg-white mt-1 mb-1 mr-2"><a href="<?= base_url() ?>auth">
                                        <font color="blue">SIGN IN</font>
                                    </a></button>
                            <?php } else { ?>
                                <li class="user-profile header-notification">
                                    <a href="#!" class="waves-effect waves-light">
                                        <img src="<?= base_url() ?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?= ucfirst($this->session->userdata('username')); ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <!-- <ul class="show-notification profile-notification">
                                        <li class="waves-effect waves-light">
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="<?= base_url('Profile') ?>">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="<?= base_url('Konsultasi/showAllMessage') ?>">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="<?= base_url('Konsultasi/addKonsultan') ?>">
                                                <i class="ti-user"></i> Jadi Konsultan
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="<?= base_url() ?>auth/logout">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul> -->
                                </li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="<?= base_url() ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?= ucfirst($this->session->userdata('username')); ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <!-- <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="<?= base_url() ?>user-profile.html"><i class="ti-user"></i>Profil</a>
                                            <a href="<?= base_url() ?>#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="<?= base_url() ?>auth/logout"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div> -->
                            <div class="pcoded-navigation-label">APPS</div>
                            <?php if ($this->session->userdata('user_level') == 1) { ?>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li <?= $this->uri->segment(1) == 'Dashboard' ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>Dashboard" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext">User</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-morris.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i><b>C</b></span>
                                            <span class="pcoded-mtext">Kategori</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url() ?>konsultasi" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>M</b></span>
                                            <span class="pcoded-mtext">Kritik dan Saran</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= base_url('Konsultasi/showAllMessage') ?>" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-email"></i><b>M</b></span>
                                            <span class="pcoded-mtext">Laporan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Aktivitas</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="chart-morris.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-edit"></i><b>C</b></span>
                                            <span class="pcoded-mtext">Tulis Artikel</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-google.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-clock"></i><b>M</b></span>
                                            <span class="pcoded-mtext">Jadwal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''  ? 'class="active"' : '' ?>>
                                        <a href="<?= base_url() ?>home" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext">Beranda</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <!-- <li <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == ''  ? 'class="active"' : '' ?>>
                                        <a href="chart-morris.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i><b>C</b></span>
                                            <span class="pcoded-mtext">Bincang Psikolog</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu <?= $this->uri->segment(1) == 'Konsultasi' || $this->uri->segment(1) == 'konsultasi'  ? 'active pcoded-trigger' : '' ?>">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                            <span class="pcoded-mtext">Konsultasi</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li <?= $this->uri->segment(1) == 'konsultasi'  ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url() ?>konsultasi" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Pilih Konsultasi</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'showAllMessage'  ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url('Konsultasi/showAllMessage') ?>" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Pesan</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li <?= $this->uri->segment(2) == 'addKonsultan'  ? 'class="active"' : '' ?>>
                                                <a href="<?= base_url('Konsultasi/addKonsultan') ?>" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Jadi Konsultan</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li> -->
                                        </ul>

                                    </li>

                                </ul>
                                <!-- <div class="pcoded-navigation-label">Aktivitas</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="chart-morris.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-edit"></i><b>C</b></span>
                                            <span class="pcoded-mtext">Tulis Artikel</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-google.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="far fa-clock"></i><b>M</b></span>
                                            <span class="pcoded-mtext">Jadwal</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul> -->
                            <?php } ?>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <!-- Required Jquery -->
                        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.min.js "></script>
                        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui/jquery-ui.min.js "></script>

                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- CONTENTS -->
                                    <?= $contents ?>
                                    <!-- END CONTENTS -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->

    <!-- Warning Section Ends -->


    <!-- waves js -->
    <script src="<?= base_url() ?>assets/pages/waves/js/waves.min.js"></script>


    <script type="text/javascript" src="<?= base_url() ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap/js/bootstrap.min.js "></script>


    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
    <script src="<?= base_url() ?>assets/js/vertical/vertical-layout.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/script.min.js"></script>

    <!-- Datatable  -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "lengthMenu": [
                    [3, 5, -1],
                    [3, 5, "All"]
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example_user').DataTable({
                "lengthMenu": [
                    [5, -1],
                    [5, "All"]
                ]
            });
        });
    </script>


</body>

</html>