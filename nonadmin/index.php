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
                            <?php echo $_SESSION['nama']; ?> <i class="mdi mdi-chevron-down"></i>
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
							
                            echo $_SESSION['nama'];?>
                        </a>

                    </div>

                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>
                        <?php if($_SESSION['nim']){ ?>

                        <li>
                            <a href="#">
                                <i class="fas fa-address-book"></i>
                                <span> Absensi </span>
                            </a>
                        </li>

                        <?php }else{ ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fas fa-address-book"></i>
                                <span> Mata Kuliah </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester1">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 1</span>
                                    </a>
                                </li>

                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester2" value="2">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 2</span>
                                    </a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester3" value="3">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 3</span>
                                    </a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester4" value="4">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 4</span>
                                    </a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester5">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 5</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester6" value="6">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 6</span>
                                    </a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester7" value="7">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 7</span>
                                    </a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="index.php?page=semester8" value="8">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Semester 8</span>
                                    </a></li>
                            </ul>
                        </li>

                        <?php } ?>
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
                        if($_SESSION['nim']){
                    ?>
                    <div>


                        <label for="">Pilih Mata Kuliah :</label>
                        <table border style="width : 75%">
                            <thead>
                                <tr>
                                    <td style="text-align: center">No</td>
                                    <td style="text-align: center">Nama</td>
                                    <td style="text-align: center">Nama Matkul</td>
                                    <td style="text-align: center">Tanggal</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                            include '../koneksi.php';

                            $nim_mahasiswa = $_SESSION['nim'];
                            $no = 1;
                            $matkul = mysqli_query($koneksi, "SELECT * FROM absen where nim='$nim_mahasiswa' ");
                            while($m = mysqli_fetch_array($matkul)){
                            ?>
                                <tr>
                                    <td style="text-align: center"><?php echo $no++ ; ?></td>
                                    <td style="text-align: center"><?php echo $m['nama_mahasiswa']; ?></td>
                                    <td style="text-align: center"><?php echo $m['nama_matkul']; ?></td>
                                    <td style="text-align: center"><?php echo $m['tanggal_masuk']; ?></td>
                                    

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php       
                        }else{
                    ?>
                    <table>
                        <thead>
                            <thead>

                            </thead>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <?php }?>

                    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
                     
                            switch ($page) {
                                case 'semester1':
                                if($_SESSION['nidn']){
                                    include "semester/semester1.php";
                                }
                                break;
                                case 'semester2':
                                if($_SESSION['nidn']){
                                    include "semester/semester2.php";
                                }
                                    break;
                                    case 'semester3':
                                if($_SESSION['nidn']){
                                    include "semester/semester3.php";
                                }
                                    break;
                                    case 'semester4':
                                if($_SESSION['nidn']){
                                    include "semester/semester4.php";
                                }
                                    break;
                                    case 'semester5':
                                if($_SESSION['nidn']){
                                    include "semester/semester5.php";
                                }
                                    break;
                                    case 'semester6':
                                if($_SESSION['nidn']){
                                    include "semester/semester6.php";
                                }
                                    break;
                                    case 'semester7':
                                if($_SESSION['nidn']){
                                    include "semester/semester7.php";
                                }
                                    break;
                                    case 'semester8':
                                if($_SESSION['nidn']){
                                    include "semester/semester8.php";
                                }
                                    break;
                                case 'kelas':    
                                if($_SESSION['nidn']){
                                    include "kelas/kelas.php";
                                }
                                break;
                                case 'kelasA':
                                include "halaman/kelasA.php";
                                break;
                                case 'kelasB':
                                include "halaman/kelasB.php";
                                break;
                                case 'kelasC':
                                include "halaman/kelasC.php";
                                break;
                                case 'kelasD':
                                include "halaman/kelasD.php";
                                break;
                                default:
                                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                    break;
                            }
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

    <div class="modal fade" id="absenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <div class="row">
                        <div class="col-sm-3"><img src="" alt="user-img"></div>

                        <style>
                            .garis_vertikal {
                                border-left: 1px black solid;
                                height: 100%;
                                width: 1px;
                            }
                        </style>
                        <div class="col-sm-6 garis_vertikal">
                            <label for="">NIM : <?php echo $_SESSION['nim']; ?></label>
                            <label for="">Nama : <?php echo $_SESSION['nama']; ?></label>
                            <label for="">Kelas : <?php echo $_SESSION['kelas']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Absen</button>
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
            $("#dosen").click(function () {
                if ($("#absen").is(":enabled")) {
                    $("#absen").prop("disabled", true);
                } else {
                    $("#absen").prop("disabled", false);
                }
            });
        });
    </script>

</body>

</html>