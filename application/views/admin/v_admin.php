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

        <!-- Page Content -->
        <div id="page-wrapper" style="margin: 0 0 0 0px !important">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><center><b>FIT AND PROPER TEST </b><br><p style="font-size: 25px">JOB TARGET : <?php echo $job?></p></center></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <?php
                if (!empty($notif)) {
                    echo '<div class="alert alert-danger">';
                    echo $notif;
                    echo "</div>";
                }
                ?>
                <div class="form-group">
                <?php if($karyawan == ""){?>
                <form action="<?php echo base_url('index.php/admin/cari_peserta')?>" method="post">
                    <div class="form-group">
                        <label>NIK :</label>
                        <input class="form-control" placeholder="NIK" name="nik" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-search"></i> CARI</button>
                    </div>
                </form>
                <?php }else { echo "";}?>
                <?php if($karyawan != ""){?>
                <form method="post" id="penilaian" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/admin/simpan_nilai">
                            <div class="form-group">
                                <label>NIK :</label>
                                <input class="form-control" value="<?php echo $karyawan[0]['nik']?>" disabled>
                                <input type="hidden" value="<?php echo $karyawan[0]['nik']?>" name="nik">
                                <input type="hidden" value="<?php echo $karyawan[0]['ban']?>" name="ban">
                            </div>
                                <label>Nama :</label>
                                <input class="form-control" value="<?php echo $karyawan[0]['nama']?>" disabled>
                                <input type="hidden" value="<?php echo $karyawan[0]['nama']?>" name="nama">
                            </div>
                            
                            <br>
                            <table width=60%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th><h1><center><b>Tabel Penilaian</b></center></h1></th>
                                </tr>
                                </thead>
                            </table>
                            <div class="row">
                <div class="col-lg-12">
                            <table width=60%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>NO</center></th>
                                        <th><center>3C</center></th>
                                        <th><center>ASPEK</center></th>
                                        <th><center colspan="1">RATING</center></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                            
                                        <td rowspan="3"><b><center>1</center></b></td>
                                        <td rowspan="3"><b>CHARACTER</b></td>
                                        <td><b>INTERGRITY</b><br>Satunya keyakinan (belief) terhadap nilai-nilai yang dianut dengan Pikiran (Mind) dan Perbuatan (Action)</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="1a">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                     </tr>
                                    <tr>
                                        <td><b>ENTHUSIASM</b><br>Keinginan (desire) yang melahirkan kesungguhan (passion) karena adanya sebuah Harapan (Hope) tertiggi untuk menjadi yang terbaik</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="1b">
                                              <option value="None">-- Rating --</option>
                                                <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option>
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>TOTALITY</b><br>Mendedikasikan seluruh potensi dan kemampuan yang dimilikinya untuk mewujudkan yang terbaik</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="1c">
                                              <option value="None">-- Rating --</option>
                                                <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div></td>
                                    </tr>

                                     <tr>
                                        <td rowspan="9"><b><center>2</center></b></td>
                                        <td rowspan="9"><b>COMPETENCE</b></td>
                                        <td><b>DECISION MAKING</b><br>Kemampuan mengambil tindakan atau keputusan yang efektif untuk menyelesaikan masalah</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2a">
                                              <option value="None">-- Rating --</option>
                                                <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                    </tr>
                                    <tr>
                                        <td><b>ACTION MANAGEMENT</b><br>Kemampuan mengelola seluruh sumber daya dalam mencapai sasaran strategis perusahaan</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2b">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>LEADERSHIP OF CHANGE</b><br>Kemampuan memimpin perubahan yang berdampak pada peningkatan kinerja perusahaan</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2c">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>BUSINESS ACUMEN</b><br>Kemampuan untuk memanfaatkan peluang dalam memperoleh profit dan mengembangkan aktifitas bisnis perusahaan</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2d">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>DEVELOPING GREAT LEADER</b><br>Kemampuan untuk menciptakan dan mengembangkan pemimpin/kader yang lebih hebat darinya</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2e">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>VISIONARY THINKING</b><br>Kemampuan berpikir jangka panjang dan menyeluruh serta mengkomunikasikan visinya kepada orang-orang di sekitarnya dalam organisasi</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2f">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ADAPTABILITY</b><br>Mempertahankan efektifitas kerja ketika menghadapi perubahan yang terjadi (lingkungan,prosedur, dan orang)</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2g">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>LEADERSHIP OF ENDURANCE</b><br>Kemampuan dalam memberikan energi kepada orang lain serta ketahanan fisik dan mental dalam menyelesaikan tugas</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2h">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>                                       
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ORGANIZATIONAL AWARENESS</b><br>Kemampuan menggunakan pengetahuan tentang situasi atau budaya organisasi untuk mengidentifikasi dan mengatisipasi dampak keputusan yang diambil terhadap pihak atau unit lain</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="2i">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>                               
                                        <td rowspan="3"><b><center>3</center></b></td>
                                        <td rowspan="3"><b>COLLABORATION</b></td>
                                        <td><b>TEAM WORK</b><br>Memberikan kontribusi dalam pengembangan dan pencapaian tujuan tim</td>
                                        <td>
                                        <div class="form-group" >
                                            
                                            <select class="form-control" input type="dropdown" name="3a">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>BUILDING PARTNERSHIP</b><br>Kemampuan dalam menjalin dan mengembangkan hubungan kemitraan yang saling menguntungkan dengan client dan unit kerja sebagai prioritas utama yang menimbulkan sinergi</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="3b">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option> 
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>NETWORKING</b><br>Kemampuan menciptakan dan mendrong serta memelihara hubungan yang kuat dengan organisasi dan 'key person'</td>
                                        <td>
                                        <div class="form-group">
                                            
                                            <select class="form-control" input type="dropdown" name="3c">
                                              <option value="None">-- Rating --</option>
                                              <option value="Sangat Kurang">1 - Sangat Kurang</option>  
                                                <option value="Kurang">2 - Kurang</option>
                                                <option value="Cukup">3 - Cukup</option>
                                                <option value="Baik">4 - Baik</option>
                                               <option value="Baik Sekali">5 - Baik Sekali</option>
                                            </select>
                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table width=60%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th colspan="3"><center>KESIMPULAN</center></th>
                                </tr>
                                </thead>
                                <tr>
                                    <th><center>A</center></th>
                                    <td><center>DAPAT DISARANKAN</center></td>
                                    <td><center><input type="radio" name="kesimpulan" id="optionsRadiosInLine4" value="DAPAT DISARANKAN"></center></td>
                                </tr>
                                <tr>
                                    <th><center>B</center></th>
                                    <td><center>DISARANKAN DENGAN CATATAN</center></td>
                                    <td><center><input type="radio" name="kesimpulan" id="optionsRadiosInLine4" value="DISARANKAN DENGAN CATATAN"></center></td>
                                </tr>
                                <tr>
                                    <th><center>C</center></th>
                                    <td><center>TIDAK DISARANKAN</center></td>
                                    <td><center><input type="radio" name="kesimpulan" id="optionsRadiosInLine4" value="TIDAK DISARANKAN"></center></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <label><b><h1>Catatan : </h1></b></label>
                                <textarea class="form-control" rows="8" placeholder="Catatan" name="catatan"></textarea>
                            
                            <br>
                            <p><b>Skala rating :</b><br>
                            <b>1</b> - Sangat Kurang<br>
                            <b>2</b> - Kurang<br>
                            <b>3</b> - Cukup<br>
                            <b>4</b> - Baik<br>
                            <b>5</b> - Baik Sekali</p>
                            <center>
                                <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-saved"></i> SELESAI</button>
                            </center>
                            </div>
                            <!-- /.table-responsive -->
                </form>
                <?php }else { echo "";}?>     
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
