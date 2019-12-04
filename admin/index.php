<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Absensi Mahasiswa || PHB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo-poltek.png" type="image/x-icon">

    <!--Morris Chart-->
    <link rel="stylesheet" href="../assets/libs/morris-js/morris.css" />

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!--DataTables-->
    <link href="../assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">


                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="./assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?php echo $_SESSION['username']; ?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="../logout.php" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">

                    <h1>LOGO</h1>
                    <!-- <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="16"> -->
                    <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    <!-- </span> -->
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="assets/images/logo-sm.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>



            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-thumbnail avatar-lg">
                    <div class="dropdown">
                        <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">
                            <?php 
							
							echo $_SESSION['username']; ?>
                        </a>

                    </div>

                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="index.php?page=mahasiswa">
                                <i class="fas fa-user-graduate"></i>
                                <span> Mahasiswa </span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?page=dosen">
                                <i class="fas fa-user-tie"></i>
                                <span> Dosen </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-book"></i>
                                <span> Mata Kuliah </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-address-book"></i>
                                <span> Absensi </span>
                            </a>
                        </li>
                    </ul>



                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
                     
                            switch ($page) {
                                case 'mahasiswa':
                                    include "./halaman/mahasiswa/mahasiswa.php";
                                    break;
                                case "tambahdata":
                                    include "./halaman/mahasiswa/tambah_data.php";
                                    break;    
                                case 'edit_modal': 
                                    include "./halaman/mahasiswa/edit_modal.php";
                                    break;		
                                default:
                                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                    break;
                            }
                        }else{
                            include "./halaman/mahasiswa/mahasiswa.php";
                        }
                    ?>
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2019 &copy; Politeknik Harapan Bersama
                        </div>

                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
		
        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
                     
                            switch ($page) {
                                case 'dosen':
                                    include "./halaman/dosen/dosen.php";
                                    break;
                                case "tambahdata":
                                    include "./halaman/dosen/tambah_data.php";
                                    break;    
                                case 'edit_modal': 
                                    include "./halaman/dosen/edit_modal.php";
                                    break;		
                                default:
                                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                    break;
                            }
                        }else{
                            include "./halaman/dosen/dosen.php";
                        }
                    ?>
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2019 &copy; Politeknik Harapan Bersama
                        </div>

                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

		<!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!--Modal Tambah-->
    <div class="modal fade" id="tambah_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="halaman/mahasiswa/proses_tambah.php?act=tambah_mahasiswa" method="post">
                        <div class="form-group">
                            <label>NIM :</label>
                            <input class="form-control" type="text" name="nim" >
                        </div>
                        <div class="form-group">
                            <label>Nama :</label>
                            <input class="form-control" type="text" name="nama" >
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input class="form-control" type="email" name="email" >
                        </div>
                        <div class="form-group">
                            <label>No Handphone :</label>
                            <input class="form-control" type="text" name="no_hp" >
                        </div>
                        <div class="form-group">
                            <label>Alamat :</label>
                            <input class="form-control" type="text" name="alamat" >
                        </div>
                        <input class="btn btn-primary" type="submit" value="SIMPAN" style="align: center; float: right;">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Edit-->
    <div class="modal fade" id="edit_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <?php 
                            include '../koneksi.php';
                            $nim_mahasiswa = $GET[$m['nim']];
                            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim_mahasiswa'");
                            while($d = mysqli_fetch_array($data)){
                                echo $nim_mahasiswa;
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- END wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- knob plugin -->
    <script src="../assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="../assets/libs/morris-js/morris.min.js"></script>
    <script src="../assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="../assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="../assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="../assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="../assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="../assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="../assets/libs/datatables/buttons.print.min.js"></script>
    <script src="../assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="../assets/libs/datatables/dataTables.select.min.js"></script>
    <script src="../assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/libs/pdfmake/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="../assets/js/pages/datatables.init.js"></script>


    <script>
        $(document).ready(function () {
            $('#table-mahasiswa').DataTable();
        });
    </script>

</body>

</html>