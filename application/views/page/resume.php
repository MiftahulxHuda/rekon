
                <!--start container-->

                    <!-- START WRAPPER -->
                <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Resume</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li class="active">Resume</li>
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
                        <p><input type="checkbox" id="selecctall"  /><label for="selecctall"></label></p></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Mandor</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">No SPk</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">Kavling</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Satuan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Harga Satuan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Jumlah Borongan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">S/D Minggu lalu</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Minggu Ini</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">S/D Minggu Ini</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Sisa</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Tagihan S/D Minggu Lalu</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Tagihan Minggu Ini</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Sisa Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 200px;">Retensi</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">Modify</th></tr>
                    </thead>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">No.</th><th rowspan="1" colspan="1">Mandor</th><th rowspan="1" colspan="1">No.SPK</th><th rowspan="1" colspan="1">Kavling</th><th rowspan="1" colspan="1">Type</th><th rowspan="1" colspan="1">Satuan</th><th rowspan="1" colspan="1">Harga Satuan</th><th rowspan="1" colspan="1">Jumlah Borongan</th><th rowspan="1" colspan="1">S/D Minggu Lalu</th><th rowspan="1" colspan="1">Minggu Ini</th><th rowspan="1" colspan="1">S/D Minggu Ini</th><th rowspan="1" colspan="1">Sisa</th><th rowspan="1" colspan="1">Tagihan S/D Minggu Lalu</th><th rowspan="1" colspan="1">Tagihan Minggu Ini</th><th rowspan="1" colspan="1">Sisa Tagihan</th><th rowspan="1" colspan="1">Retensi</th><th rowspan="1" colspan="1">Modify</th></tr>
                    </tfoot>
                 
                    <tbody>
 <?php 
 $no=0;
 $query = $this->db->get('tbl_resume');
 foreach ($query->result() as $row) {
    $no++;
  ?>
  <tr>
<td><p><input type="checkbox" name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox_<?php echo $no;?>" value="<?php echo $row->id?>" />
   <label for="checkbox_<?php echo $no;?>"></label>
  </p></th></td>
  <td><?php echo $no; ?></td>
    <td><?php echo $row->nama_pemborong; ?></td>
    <td><?php echo $row->spk; ?></td>
    <td><?php echo $row->nama_kavling; ?></td>
    <td><?php echo $row->type; ?></td>
    <td><?php echo $row->satuan; ?></td>
    <td><?php echo number_format($row->harga_satuan); ?></td>
    <td><?php echo number_format( $row->jumborong); ?></td>
    <td><?php echo $row->minggulalu."%"; ?></td>
    <td><?php echo $row->mingguini."%"; ?></td>
    <td><?php echo $row->sdmingguini."%"; ?></td>
    <td><?php echo $row->sisa."%"; ?></td>
    <td><?php echo $row->tagihanlalu;?></td>
    <td><?php echo $row->tagihanini;?></td>
    <td><?php echo $row->tagihansisa; ?></td>
    <td><?php echo $row->retensi; ?></td>
    <td>
<a style="color:#000; padding-right:5px;" href="<?=site_url('administrator/main/edit_resume/'.$row->id)?>" title="Edit"><li class="mdi-editor-border-color"></li></a>
<a style="color:#000; padding-left:5px;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=site_url('action/deleteresume/'.$row->id)?>" title="Delete"><li class="mdi-action-delete"></li></a>
    </td>
  </tr>
  <?php } ?>
</table>
 </tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="<?=site_url('administrator/main/new_resume')?>" class="btn-floating waves-effect waves-light brown right" alt"New Proyek" title="New Proyek">
                  <i class="mdi-content-create"></i>
                </a>
            </div>
            <tfoot>
<a  style="background-color:#F95D13;" id="del_all" href="<?php echo site_url('action/deleteproyekbox'); ?>" class="btn waves-effect waves-light right"> Hapus Data Terpilih</a>
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/exporttoexcel')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>            
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/print_spk');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            </tfoot>
            </div>
            </div>
            </div>
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
                        url: '<?php echo base_url()?>action/deleteresumebox',
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