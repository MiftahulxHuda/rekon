<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.min.css'?>">
</head>
<body onload="window.print()">
<img style="float:left;" width="80" height="80" src="<?php echo base_url().'asset/web/images/newrekon.png'?>"> <h3 align="center"> PRINT DATA PEMBAYARAN</h3>
<br>
<br>
<br>
<table class="table table-bordered">
                    <thead>
                        <tr role="row">
                        <td>No.</td>
                        <th>Nama Proyek</th>
                        <th>No.SPK</th>
                        <th>Nilai Kontrak</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Tgl.Tagih</th>
                        <th>DP</th>
                        <th>Tgl.Tagih</th>
                        <th>1St.Prog</th>
                        <th>Tgl.Tagih</th>
                        <th>2nd.Prog</th>
                        <th>Tgl.Tagih</th>
                        <th>3Rd.Prog</th>
                        <th>Tgl.Tagih</th>
                        <th>4Th.Prog</th>
                        <th>Tgl.Tagih</th>
                        <th>5th.Tagih</th>
                        <th>Tgl.Tagih</th>
                        <th>Retensi</th>
                        <th>Jml.Tagih</th>
                        <th>Sisa.Tagih</th>
                        <th>persen</th>
                    </thead>
                 
                 
                    <tbody>
                    <?php
                    $no=0;
                     $query = $this->db->get('tbl_sp'); 
                    $persenan = array('10%'=>10,'25%'=>21.25,'50%'=>21.25,'85%'=>31.25,'100%'=>11.25,'5%'=>5);

                    foreach ($query->result() as $data) {
                        $persentase = 0; 
                        $no++;
                     ?>
                    <tr role="row" class="odd">
                            <td><?php echo $no;?></td>
                            <td><?=$data->nama_proyek?></td>
                            <td><?=$data->spk?></td>
                            <td><?=$data->nilai_kontrak;?></td>
                            <td><?=$data->jenis_pekerjaan;?></td>
                            <td><?=$data->tgl_tagih1=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih1));?></td>
                            <td>
                            <?php 
                            if (!empty($data->dp)) {
                                $persentase += intval($data->dp);
                            echo $data->dp;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->dp]/100)),0,',','.').',-';
                                
                            } else {
                             echo "Data Persen Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih2=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih2));?></td>
                            <td>
                            <?php
                            if (!empty($data->progres1)) {
                                 $persentase += intval($data->progres1);
                            echo  $data->progres1;
                            echo 'Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres1]/100)),0,',','.').',-';
                            
                             } else {
                            echo "Data Persen Kosong";
                             }
                              
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih3=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih3));?></td>
                            <td>
                            <?php
                            if (!empty($data->progres2)) {
                                 $persentase += intval($data->progres2);
                            echo  $data->progres2; 
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres2]/100)),0,',','.').',-';
                            
                            } else {
                                echo "Data Persen Kosong";
                            }
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih4=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih4));?></td>
                            <td>
                            <?php 
                            if (!empty($data->progres3)) {
                                 $persentase += intval($data->progres3);
                                 echo $data->progres3;
                                echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres3]/100)));
                             } 
                             else{
                                echo "Data Persen Kosong";
                             }
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih5=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih5));?></td>                            
                            <td>
                            <?php 
                            if (!empty($data->progres4)) {
                                 $persentase += intval($data->progres4);
                            echo $data->progres4;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres4]/100)));
                            
                            } else {
                            echo "Data Persen Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih6=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih6));?></td>
                            <td>
                            <?php 
                            if (!empty($data->progres5)) {
                                 $persentase += intval($data->progres5);
                            echo $data->progres5;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres5]/100)));
                            
                            } else {
                            echo "Data Persen Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih7=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih7));?></td>                                                        
                            <td><?php

                            echo 'Rp'.number_format($data->sisa_tagih);?></td>
                            <td><?php
                            echo 'Rp.'.number_format($data->jumlah_tagih);?></td>
                            <td><?php 
                            echo 'Rp'.number_format($data->sisa_tagih);?></td>
                            <td><?=$persentase.'%';?></td>
 
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
            </div>
</body>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/npm.js'?>"></script>
</html>

</body>
</html>