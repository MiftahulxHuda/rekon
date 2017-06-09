<html>
<head>
<script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
<script>
$(function(){
$(".btn_tampil_gambar").click(function(){
$(this).parents('td').find('div.div2').toggle(10, function(){
$(this).parents('td').find('div.div1').slideToggle(900);
});
});
});

 $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 200});
  });
</script>
</head>
<body>
                <!--start container-->
                    <!-- START WRAPPER -->
                <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title"> Visual Report</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator')?>">Dashboard</a></li>
                                <li class="active">Visual Report</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>

                <div class="container">

                <div class="col s12 m8 l9">

                  <table id="data-table-simple" class="responsive-table display dataTable centered" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">
                         <p>
                         <input type="checkbox" id="selecctall"  />
                         <label for="selecctall"></label>
                         </p>
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Nama Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">SPK</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Kavling</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">Foto Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Progres</th>
                    </thead>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1" ></th><th rowspan="1" colspan="1" >No.</th><th rowspan="1" colspan="1" >Name Proyek</th><th rowspan="1" colspan="1">SPK</th><th rowspan="1" colspan="1">Kavling</th><th rowspan="1" colspan="1">Foto Proyek</th><th rowspan="1" colspan="1">Progress</th></tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no=0;
                    $query = $this->db->get('tbl_uploadimage');
                    foreach ($query->result() as $data) {

                    $no++; ?>
                    <tr role="row" class="odd">
                    <td>                           <p>
                              <input type="checkbox" name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox_<?php echo $no;?>" value="<?php echo $data->id;?>" />
                              <label for="checkbox_<?php echo $no;?>"></label>
                            </p></th></td>
                            <td><?php echo $no; ?></td>
                            <td><?=$data->namaproyek;?></td>
                            <td><?=$data->suratpk;?></td>
                            <td><?=$data->kavling;?></td>
                            <td align="left"> <!-- <button class="btn btn-primary btn_tampil_gambar">Lihat Foto</button> -->
                            <a class="btn tooltipped col s4 offset-s4 l2 offset-l1 btn_tampil_gambar" data-position="left" data-delay="50" data-tooltip="<?php echo "Kavling ".$data->kavling; ?>"> Lihat Foto</a>
                            <div class="div1" style="display:none">
                            <img src="<?php echo base_url()."assets/visualupload/".$data->nm_gmbr; ?>" width="300" height="200"></div>
                            <div class="div2"></div></td>
                            <td><?=$data->progres."%";?></td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="<?=site_url('administrator/main/new_visual')?>" class="btn-floating waves-effect waves-light brown right" alt"New Proyek" title="New Proyek">
                  <i class="mdi-content-create"></i>
                </a>
                </div>
            <tfoot>

            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/excelvisual')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>
            <a target="_blank" style="color:#000; padding-left:5px;" href="<?=site_url('action/print_visual');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            <br>
                    <a  style="background-color:#F95D13;" id="del_all" href="<?php echo site_url('action/deletevisualbox'); ?>" class="btn waves-effect waves-light right"> Hapus Data Terpilih</a>
            </tfoot>
            </div>
            </div>
            </div>
 </body>
              <script>
            $(document).ready(function() {
                resetcheckbox();
                $('#selecctall').click(function(event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"
                        });
                    } else {
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"
                        });
                    }
                });


                $("#del_all").on('click', function(e) {
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);

                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//                    return  false;
                    $.ajax({
                        url: '<?php echo base_url()?>action/deletevisualbox',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
                        $('#selecctall').attr('checked', false);
                        window.location.reload();
                    });
                });

                $(".addrecord").click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        type: 'POST',
                        url: url
                    }).done(function() {
                        window.location.reload();
                    });
                });

                function  resetcheckbox(){
                $('input:checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"
                   });
                }
            });
        </script>
