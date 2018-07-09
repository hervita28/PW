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
                <a href="#" class="navbar-brand">Telkom Witel Regional V</a>
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/sadmin')?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/sadmin/data_karyawan')?>"><i class="glyphicon glyphicon-book"></i> Data Karyawan</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a data-toggle="modal" data-target="#addModal" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Data Karyawan</a>
                            <br><br>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>BAND</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach($karyawan as $data){ $no++?>
                                    <tr>
                                        <td><?php echo $no?></td>
                                        <td><?php echo $data['nik']?></td>
                                        <td><?php echo $data['nama']?></td>
                                        <td><?php echo $data['ban']?></td>
                                        <td>
                                            <a data-toggle="modal" data-target="#editModal<?php echo $no?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a> &nbsp&nbsp&nbsp
                                            <a data-toggle="modal" data-target="#hapusModal<?php echo $no?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

<!-- Add Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">TAMBAH DATA KARYAWAN</h4></center>
        </div>
        <form action="<?php echo base_url('index.php/sadmin/add_karyawan')?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <div class="form-line">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" required>
                </div>
                <br>
                <div class="form-line">
                    <label>NAMA</label>
                    <input class="form-control" type="text" name="nama" required>
                </div>
                <br>
                <div class="form-line">
                    <label>BAND</label>
                    <input class="form-control" type="text" name="keterangan" required>
                </div>
            </div>           
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<!-- END Add Modal -->

<!-- Edit Modal -->
<?php $no_edit=0;foreach($karyawan as $edit){$no_edit++?>
  <div class="modal fade" id="editModal<?php echo $no_edit?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">EDIT DATA</h4></center>
        </div>
        <form action="<?php echo base_url('index.php/sadmin/edit_karyawan')?>" method="post">
        <input type="hidden" name="id" value="<?php echo $edit['id']?>">
        <div class="modal-body">
            <div class="form-group">
                <div class="form-line">
                    <label>NIK</label>
                    <input class="form-control" type="text" name="nik" value="<?php echo $edit['nik']?>" required>
                </div>
                <br>
                <div class="form-line">
                    <label>NAMA</label>
                    <input class="form-control" type="text" name="nama" value="<?php echo $edit['nama']?>" required>
                </div>
                <br>
                <div class="form-line">
                    <label>BAND</label>
                    <input class="form-control" type="text" name="keterangan" value="<?php echo $edit['ban']?>" required>
                </div>
            </div>           
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<?php } ?>
<!-- END Edit Modal -->

<!-- Hapus Modal -->
<?php $no_hapus=0;foreach($karyawan as $hapus){$no_hapus++?>
  <div class="modal fade" id="hapusModal<?php echo $no_hapus?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">KONFIRMASI HAPUS DATA</h4>
        </div>
        <form action="<?php echo base_url('index.php/sadmin/hapus_karyawan')?>" method="post">
        <input type="hidden" name="id" value="<?php echo $hapus['id']?>">
        <div class="modal-body">
            <h2>DATA AKAN DIHAPUS ?</h2>     
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">YES</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<?php } ?>
<!-- END Hapus Modal -->
</body>

</html>
