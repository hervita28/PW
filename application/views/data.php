<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PENILAIAN KARYAWAN</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body Style="margin-left:15px" Style="margin-right:15px">

    <div id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b><center>FIT AND PROPER TEST</center></b></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <br>

<div class="form-group">
                                <label>Nama :</label>
                                <input class="form-control" placeholder="Nama Lengkap">
                            </div>
                            
                            <div class="form-group">
                                <label>NIK :</label>
                                <input class="form-control" placeholder="NIK">
                            </div>
                            
                            <div class="form-group">
                                <label>Email :</label>
                                <input class="form-control" placeholder="email">
                            </div>                          
                            
                            <div class="form-group">
                                <label>Jenis Kelamin :</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Perempuan 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Laki laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Lainnya
                                    </label>
                                </div>
                            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width=60%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>NO</center></th>
                                        <th><center>3C</center></th>
                                        <th><center>ASPEK</center></th>
                                        <th><center>RATING</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <form action="">                                
                                        <td rowspan="3"><b><center>1</center></b></td>
                                        <td rowspan="3"><b>CHARACTER</b></td>
                                        <td><b>INTERGRITY</b><br>Satunya keyakinan (belief) terhadap nilai-nilai yang dianut dengan Pikiran (Mind) dan Perbuatan (Action)</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine1" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine1" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine1" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine1" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ENTHUSIASM</b><br>Keinginan (desire) yang melahirkan kesungguhan (passion) karena adanya sebuah Harapan (Hope) tertiggi untuk menjadi yang terbaik</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine2" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine2" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine2" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine2" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>TOTALITY</b><br>Mendedikasikan seluruh potensi dan kemampuan yang dimilikinya untuk mewujudkan yang terbaik</td>
                                        <td>
                                        <center>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine3" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine3" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine3" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine3" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>

                                     <tr>
                                        <td rowspan="9"><b><center>2</center></b></td>
                                        <td rowspan="9"><b>COMPETENCE</b></td>
                                        <td><b>DECISION MAKING</b><br>Kemampuan mengambil tindakan atau keputusan yang efektif untuk menyelesaikan masalah</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine4" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine4" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine4" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine4" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ACTION MANAGEMENT</b><br>Kemampuan mengelola seluruh sumber daya dalam mencapai sasaran strategis perusahaan</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine5" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine5" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine5" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine5" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>LEADERSHIP OF CHANGE</b><br>Kemampuan memimpin perubahan yang berdampak pada peningkatan kinerja perusahaan</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine6" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine6" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine6" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine6" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>BUSINESS ACUMEN</b><br>Kemampuan untuk memanfaatkan peluang dalam memperoleh profit dan mengembangkan aktifitas bisnis perusahaan</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine7" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine7" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine7" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine7" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>DEVELOPING GREAT LEADER</b><br>Kemampuan untuk menciptakan dan mengembangkan pemimpin/kader yang lebih hebat darinya</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine8" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine8" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine8" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine8" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>VISIONARY THINKING</b><br>Kemampuan berpikir jangka panjang dan menyeluruh serta mengkomunikasikan visinya kepada orang-orang di sekitarnya dalam organisasi</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine9" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine9" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine9" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLine9" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ADAPTABILITY</b><br>Mempertahankan efektifitas kerja ketika menghadapi perubahan yang terjadi (lingkungan,prosedur, dan orang)</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineA" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineA" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineA" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineA" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>LEADERSHIP OF ENDURANCE</b><br>Kemampuan dalam memberikan energi kepada orang lain serta ketahanan fisik dan mental dalam menyelesaikan tugas</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineB" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineB" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineB" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineB" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>ORGANIZATIONAL AWARENESS</b><br>Kemampuan menggunakan pengetahuan tentang situasi atau budaya organisasi untuk mengidentifikasi dan mengatisipasi dampak keputusan yang diambil terhadap pihak atau unit lain</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineC" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineC" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineC" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineC" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                    <form action="">                                
                                        <td rowspan="3"><b><center>3</center></b></td>
                                        <td rowspan="3"><b>COLLABORATION</b></td>
                                        <td><b>TEAM WORK</b><br>Memberikan kontribusi dalam pengembangan dan pencapaian tujuan tim</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineD" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineD" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineD" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineD" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>BUILDING PARTNERSHIP</b><br>Kemampuan dalam menjalin dan mengembangkan hubungan kemitraan yang saling menguntungkan dengan client dan unit kerja sebagai prioritas utama yang menimbulkan sinergi</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineE" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineE" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineE" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineE" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>NETWORKING</b><br>Kemampuan menciptakan dan mendrong serta memelihara hubungan yang kuat dengan organisasi dan 'key person'</td>
                                        <td>
                                        <center>
                                            <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineF" id="optionsRadiosInLine1" value="option1"> 1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineF" id="optionsRadiosInLine2" value="option2"> 2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineF" id="optionsRadiosInLine3" value="option3"> 3
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInLineF" id="optionsRadiosInLine4" value="option4"> 4
                                        </label>
                                        </center>
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
                                    <td><center><input type="checkbox" name="check1" value="DAPAT DISARANKAN
                                    "></center></td>
                                </tr>
                                <tr>
                                    <th><center>B</center></th>
                                    <td><center>DISARANKAN DENGAN CATATAN</center></td>
                                    <td><center><input type="checkbox" name="check1" value="DISARANKAN DENGAN CATATAN"></center></td>
                                </tr>
                                <tr>
                                    <th><center>C</center></th>
                                    <td><center>TIDAK DISARANKAN</center></td>
                                    <td><center><input type="checkbox" name="check1" value="TIDAK DISARANKAN"></center></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <label><b><h1>Catatan : </h1></b></label>
                                <textarea class="form-control" rows="8" placeholder="note"></textarea>
                            </div>
                            <br>
<p><b>Skala rating :</b><br>
<b>1</b> - Sangat Kurang<br>
<b>2</b> - Kurang<br>
<b>3</b> - Cukup<br>
<b>4</b> - Baik<br>
<b>5</b> - Baik Sekali</p>
<center><input type="submit" id="submit" name="submit" value="Submit" onclick="hasil()"></center>
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
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/sb-admin-2.js"></script>

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
