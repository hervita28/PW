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
                <a href="<?php echo base_url(); ?>index.php/dashboard" class="navbar-brand">Telkom Witel Regional V</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="margin: 0 0 0 0px !important">
            <div class="row">
                <div class="col-lg-12">
                    <BR>
                    <a href="<?php echo base_url('index.php/user')?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><center><b>DATA PENILAIAN</b></center></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>NIK :</label>
                            <input class="form-control" name="nik" value="<?php echo $detail[0]['nik']?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Nama :</label>
                            <input class="form-control" name="nama" value="<?php echo $detail[0]['nama']?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Band :</label>
                            <input class="form-control" name="band" value="<?php echo $detail[0]['band']?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>INTERGRITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['satua']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ENTHUSIASM :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['satub']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>TOTALITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['satuc']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>DECISION MAKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duaa']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ACTION MANAGEMENT :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duab']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>LEADERSHIP OF CHANGE :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duac']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>BUSINESS ACUMEN :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duad']?>" disabled>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>DEVELOPING GREAT LEADER :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duae']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>VISIONARY THINKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duaf']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ADAPTABILITY :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duag']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>LEADERSHIP OF ENDURANCE :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duah']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>ORGANIZATIONAL AWARENESS :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['duai']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>TEAM WORK :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['tigaa']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>BUILDING PARTNERSHIP :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['tigab']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>NETWORKING :</label>
                            <input class="form-control" name="catatan" value="<?php echo $detail[0]['tigac']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Kesimpulan :</label>
                            <input class="form-control" name="kesimpulan" value="<?php echo $detail[0]['kesimpulan']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Catatan :</label>
                            <textarea class="form-control" name="catatan" disabled><?php echo $detail[0]['catatan']?>
                            </textarea>
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets//vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets//vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets//vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
