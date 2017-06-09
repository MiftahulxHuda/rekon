<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.min.css'?>">
<body onload="window.print()">
<img style="float:left;" width="80" height="80" src="<?php echo base_url().'asset/web/images/newrekon.png'?>"> 
<br><h3 align="center"> PRINT DATA VISUAL REPORT</h3>
<br>
<br>
<table class="table table-bordered" id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 120px;">Nama proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 120px;">SPK</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 120px;">Kavling</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Gambar</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Progres</th>
                    </thead>
                 
                 
                    <tbody>
                    <?php 
                    $no=0;
                     $query = $this->db->get('tbl_uploadimage');
                    foreach ($query->result() as $data) {
                        $no++;
                     ?>
                    <tr role="row" class="odd">
                            <td><?=$no;?></td>
                            <td><?=$data->namaproyek;?></td>
                            <td><?=$data->suratpk;?></td>
                            <td><?=$data->kavling;?></td>
                            <td><img src="<?php echo base_url()."assets/visualupload/".$data->nm_gbr; ?>" width="170" height="120"></td>
                            <td><?=$data->progres."%";?></td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
</body>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/npm.js'?>"></script>