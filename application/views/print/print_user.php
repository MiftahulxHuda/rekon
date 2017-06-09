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
<br><h3 align="center"> PRINT DATA USER</h3>
<br>
<br>
<table class="table table-bordered">
                    <thead>
                        <tr role="row">
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Hak AKses</th>
                        <th>Status</th>
                        <th>Create Date</th>
                    </thead>
                 
                 
                    <tbody>
                    <?php
                    $no=0;
                     $query = $this->db->get('tbl_user');
                    foreach ($query->result() as $data1) {

                    $no++; ?>
                    <tr role="row" class="odd">
                            <td><?=$no;?></td>
                            <td><?=$data1->userid;?></td>
                            <td><?=$data1->userpass;?></td>
                            <td><?=$data1->nama;?></td>
                            <td><?=$data1->hak_akses;?></td>
                            <td><?=$data1->status;?></td>
							<td><?=date('d-m-Y', strtotime($data1->create_date));?></td>

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