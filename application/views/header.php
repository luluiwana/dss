<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Implementasi Profile Matching Analysis">
    <meta name="author" content="Lulu Iwana">
    <meta name="keywords" content="PMA">

    <!-- Title Page-->
    <title>Sistem Seleksi Asisten Praktikum</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('css/theme.css')?>" rel="stylesheet" media="all">
	
	<style type="text/css">
	.navbar-sidebar .navbar__list li a {
    display: block;
    color: #555;
    font-size: 14px;
    padding: 7px 0;
}
</style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                                <li  <?php if($title=="dashboard"){echo "class='active'";}?> >
                            <a  href="<?php echo base_url('home')?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     
                        </li>
						
                        <li <?php if($title=="tambah"){echo "class='active'";}?> >
                            <a href="<?php echo base_url('home/tambah')?>">
                                <i class="fas fa-users"></i>Tambah Peserta</a>
                        </li>
                        <li <?php if($title=="daftar"){echo "class='active'";}?>>
                            <a href="<?php echo base_url('home/daftar')?>">
                                <i class="fas fa-table"></i>Data Peserta</a>
                        </li>
						
						<li >
                            <a >
                                <i class="fas fa-tachometer-alt"></i>Analisis GAP</a>
                            <ul style="padding-left:40px">
                                <li <?php if($title=="analisis"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/analisis')?>">Aspek dan Kriteria</a>
                                </li>
                                 <li <?php if($title=="administrasi"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/administrasi')?>">Administrasi</a>
                                </li>
                                 <li <?php if($title=="tes"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/tes')?>">Tes Kompetensi</a>
                                </li>
                                 <li <?php if($title=="microteaching"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/microteaching')?>">Microteaching</a>
                                </li>
								  <li <?php if($title=="wawancara"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/wawancara')?>">Wawancara</a>
                                </li>
								  <li <?php if($title=="hasil"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/hasil')?>">Hasil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <h3  style="text-align:center; color:white; font-weight:bold">Seleksi Asprak</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li  <?php if($title=="dashboard"){echo "class='active'";}?> >
                            <a  href="<?php echo base_url('home')?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                     
                        </li>
						
                        <li <?php if($title=="tambah"){echo "class='active'";}?> >
                            <a href="<?php echo base_url('home/tambah')?>">
                                <i class="fas fa-users"></i>Tambah Peserta</a>
                        </li>
                        <li <?php if($title=="daftar"){echo "class='active'";}?>>
                            <a href="<?php echo base_url('home/daftar')?>">
                                <i class="fas fa-table"></i>Data Peserta</a>
                        </li>
						
						<li >
                            <a >
                                <i class="fas fa-tachometer-alt"></i>Analisis GAP</a>
                            <ul style="padding-left:40px">
                                <li <?php if($title=="analisis"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/analisis')?>">Aspek dan Kriteria</a>
                                </li>
                                 <li <?php if($title=="administrasi"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/administrasi')?>">Administrasi</a>
                                </li>
                                 <li <?php if($title=="tes"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/tes')?>">Tes Kompetensi</a>
                                </li>
                                 <li <?php if($title=="microteaching"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/microteaching')?>">Microteaching</a>
                                </li>
								  <li <?php if($title=="wawancara"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/wawancara')?>">Wawancara</a>
                                </li>
								  <li <?php if($title=="hasil"){echo "class='active'";}?>>
                                    <a href="<?php echo base_url('home/hasil')?>">Hasil</a>
                                </li>
                            </ul>
                        </li>
                 
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       <div class="account-wrap" style="float:right">
                                    <div class="account-item clearfix js-item-menu">
                                      
                                        <div class="content">
                                            <a class="js-acc-btn" href="#" style="color:white">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url('login/logout')?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/select2/select2.min.js')?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('js/main.js')?>"></script>

</body>

</html>
<!-- end document-->
