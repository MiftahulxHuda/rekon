<?php if ($this->session->userdata('hak_akses')=='Administrator') {  ?>

<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Sertifikat Pembayaran</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li class="active">Sertifikat Pembayaran</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          
              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <h4 class="header2" align="center">Sertifikat Pembayaran</h4>
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/savekwitansi');?>
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->query("SELECT DISTINCT nama_proyek FROM tbl_spk");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="nama_owner" type="text" readonly="1" name="nama_owner">
                            <label for="nama_owner" class="active">Owner</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Surat Perintah Kerja</label>
                            <select id="spk">
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="nilai_kontrak" type="text" readonly="1" name="nilai_kontrak">
                            <label for="nilai_kontrak" class="active">Nilai Kontrak</label>
                          </div>
                         <div class="input-field col s12">
                            <select id="jenis_pekerjaan" name="jenis_pekerjaan">
                              <option value="unit">Unit</option>
                              <option value="infrastruktur">Infrastruktur</option>
                              <option value="pondasi">Pondasi</option>
                            </select>
                            <label for="jenis_pekerjaan" class="">Jenis Pekerjaan</label>
                          </div>
                         <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" id="progres_hidden" name="progres_hidden" />
                            <select id="progres" name="progres">
                              <option></option>
                            </select>
                            <label for="progres" class="">Progres</label>
                          </div>                                                  
                          <div class="input-field col s12" style="width:30%;">
                            <input id="tgl_tagih" name="tgl_tagih" type="date">
                            <label for="tgl_tagih" class="active">Tanggal Tagih</label>
                          </div>
                          </div>                                                  
                          <div class="input-field col s12">
                            <input placeholder="" id="jumlah_tagih" type="text" readonly="1" name="jumlah_tagih">
                            <label for="jumlah_tagih" class="active">Jumlah Tagih</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" id="submit" name="action">Submit
                              </button>
                              <button class="btn cyan waves-effect waves-light" id="apply" name="action">Apply
                              </button>
                              <?=form_close();?>
                            </div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
        <!--start container-->
</section>   
           
        <!--end container-->
      <!-- END CONTENT -->
                <!--end container-->
<script>
function goBack() {
    window.history.go(-1);
}
</script>
<script type="text/javascript">
$(document).ready(function() {

    $('#submit').on('click', function(e) {

      $('form').attr('action', '<?php echo site_url("action/savesp")?>');
      $('form').submit();
    });

    $('#apply').on('click', function(e) {

      $('form').attr('action', '<?php echo site_url("action/savekwitansi")?>');
      $('form').submit();
    });

    $('#jenis_pekerjaan').on('change', function() {
      var progres = {
        "unit": '<option value="10%">10%</option><option value="25%">25%</option><option value="50%">50%</option><option value="85%">85%</option><option value="100%">100%</option><option value="5%">5%</option>',
        "infrastruktur" : '<option value="50%">50%</option><option value="100%">100%</option><option value="5%">5%</option>',
        "pondasi": '<option value="100%">100%</option><option value="5%">5%</option>'
      };

      $('#progres').html(progres[$(this).val()]).material_select();
    });

    $('#progres').on('change', function() {
      var prog = parseInt($(this).val());
      var nk = $('#nilai_kontrak').val();
      var jenis_pekerjaan = $('#jenis_pekerjaan').val();

      var persenan = {
        "unit": {
          "10": 10,
          "25": 21.25,
          "50": 21.25,
          "85": 31.25,
          "100": 11.25,
          "5": 5
        },
        "infrastruktur": {
          "50": 45,
          "100":50,
          "5":5
        },
        "pondasi": {
          "100": 95,
          "5": 5
        }
      };

      $('#jumlah_tagih').val(nk * (persenan[jenis_pekerjaan][prog]/100));

      $('#progres_hidden').val(prog);
    });

    $('#nama_proyek').on('change', function(){
    var dataProyek = $(this).val();
    $('#spk').empty();
      $.ajax({
        url: "<?php echo site_url('action/token') ?>",
        type: "POST",
        data: {proyek: dataProyek},
        success: function(notice){
          $('#nama_owner').val(notice[0].nama_owner);
          var htmlSpk = '';
          notice.map(function(obj) {
            var data = '<option value="{0}">{0}</option>';
            htmlSpk += data.format([obj.spk]);
          });
          // console.log(htmlSpk);
          $('#spk').html(htmlSpk);
          $("#spk").material_select();

          $('#spk').on('change', function(e) {
            var value = $(this).val();
            $('#spk_hidden').val(value);

            $.ajax({
              url: "<?php echo site_url('action/datar') ?>", 
              type: "POST", 
              data: {proyek: dataProyek, spk: value},
              success: function(dataSpk) {
                $('#nilai_kontrak').val(dataSpk.nilai_kontrak);
              }
            });
          });
        }
      })
  })
})
</script>
<?php } else {
  echo "Not permission";
} ?>