<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telkom Witel Regional V</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar" alt="logotelkom" src="<?php echo base_url(); ?>assets/logotelkom.png" height="5%" width="5%" />
                <a href="<?php echo base_url(); ?>index.php/dashboard/data" class="navbar-brand">Telkom Witel Regional V</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a><i class="fa fa-dashboard fa-fw"></i> Form</a>
                        </li>
                        <li>
                            <a><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a>Tabels</a>
                                </li>
                                <li>
                                    <a>Notifications</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><center><b>DATA PENILAIAN</b></center></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>NIK :</label>
                            <input class="form-control" name="nik" value="<?php echo $penilaian->nik; ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama :</label>
                            <input class="form-control" name="nama" value="<?php echo $penilaian->nama; ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Kesimpulan :</label>
                            <input class="form-control" name="kesimpulan" value="<?php echo $penilaian->kesimpulan; ?>"disabled>
                        </div>

                        <div class="form-group">
                            <label>INTERGRITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->satua; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ENTHUSIASM :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->satub; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>TOTALITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->satuc; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>DECISION MAKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->satuc; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ACTION MANAGEMENT :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duaa; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>LEADERSHIP OF CHANGE :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duab; ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Catatan :</label>
                            <textarea class="form-control" name="catatan" disabled><?php echo $penilaian->catatan; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label>BUSINESS ACUMEN :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duac; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>DEVELOPING GREAT LEADER :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duad; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>VISIONARY THINKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duae; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ADAPTABILITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duaf; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>LEADERSHIP OF ENDURANCE :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duag; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ORGANIZATIONAL AWARENESS :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duah; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>TEAM WORK :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->duai; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>BUILDING PARTNERSHIP :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->tigaa; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>NETWORKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $penilaian->tigab; ?>" disabled>
                        </div>
                        <br>
                        <p><b>Skala rating :</b><br>
                            <b>1</b> - Sangat Kurang<br>
                            <b>2</b> - Kurang<br>
                            <b>3</b> - Cukup<br>
                            <b>4</b> - Baik<br>
                            <b>5</b> - Baik Sekali</p>                     
                    </div>
                </div>
                       
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
