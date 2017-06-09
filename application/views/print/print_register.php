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
<br><h3 align="center"> PRINT DATA REGISTER</h3>
<br>
<br>
<table class="table table-bordered">
                    <thead>
                        <tr role="row">
                        <th>No</th>
                        <th>Nama Proyek</th>
                        <th>SPK</th>
                        <th>Uraian</th>
                        <th>Nilai Kontrak</th>

                 
                 
                    <tbody>
                    <?php $no=0; $query = $this->db->get('tbl_register');
                    foreach ($query->result() as $data) { 
                        $no++;
                    ?>
                    <tr role="row" class="odd">
                            <td><?=$no;?></td> 
                            <td><?=$data->nama_proyek;?></td> 
                            <td><?=$data->spk?></td>
                            <td><?=$data->uraian?></td>
                            <td><?=$data->nilai_kontrak;?></td>
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