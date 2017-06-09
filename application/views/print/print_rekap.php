<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.min.css'?>">
</head>
<body onload="window.print()">
<img style="float:left;" width="80" height="80" src="<?php echo base_url().'asset/web/images/newrekon.png'?>"> 
<br><h3 align="center"> PRINT DATA REKAPITULASI</h3>
<br>
<br>
<table class="table table-bordered">
                    <thead>
                        <tr role="row">
                        <th>No</th>
                        <th>SPK</th>
                        <th>Nilai Kontrak</th>
                        <th>Progres</th>
                        <th>Tanggal Penagihan</th>
                        <th>Nilai Tagihan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nilai Pembayaran</th>
                        <th>Jumlah Tagih</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Total</th>
                    </thead>
                 
                 
                    <tbody>
                    <?php
                    $no=0;
                     $query = $this->db->get('tbl_rekapitulasi');
                    foreach ($query->result() as $data1) {

                    $no++; ?>
                    <tr role="row" class="odd">
                            <td><?=$no;?></td>
                            <td><?=$data1->spk;?></td>
                            <td><?=$data1->nilai_kontrak;?></td>
                            <td><?=$data1->progres;?></td>
                            <td><?=date('d-m-Y', strtotime($data1->tgl_tagih));?></td>
                            <td><?=$data1->jumlah_tagih;?></td>
                            <td><?=date('d-m-Y', strtotime($data1->tglbayar));?></td>
                            <td><?=$data1->nilai_pembayaran;?></td>
                            <td><?=$data1->nilai_tagih;?></td>
                            <td><?=$data1->jumlah_pembayaran;?></td>
                            <td><?=$data1->total;?></td>

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