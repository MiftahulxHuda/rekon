       <script type="text/javascript">

        function startCalculate(){
        interval=setInterval("Calculate()",10);

    }
          function Calculate(){
            var b=document.form1.jumlah_tagih.value;
            var c=document.form1.nilai_byr.value;
            var tag1=document.form1.kurang_tgh.value=(b-c);
    }
    function stopCalc() 
    {
        clearInterval(interval);
    }

      </script>
<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Update Finance</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/finance');?>">Finance</a></li>
                                <li class="active">Update Finance</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>                  
              <div class="row" align="center">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <div class="row">
                        
                  <table class="centered" id="table-data">
                    <thead>
                      <tr>
                        <th >SPK</th>
                        <th >Nilai Kontrak</th>
                        <th >Progres</th>
                        <th >Tanggal Penagihan</th>
                        <th >Nilai Tagihan</th>
                        <th >Tanggal Bayar</th>
                        <th >Nilai Bayar</th>
                        <th >Kurang Tagih</th>
                      </tr>
                    </thead>
                    <tbody>
               <!--      <?=form_open('action/update_finance', "class='stdform stdform2'")?> -->
                    <form method="post" name="form1" id="form1" action="<?php echo site_url('action/update_finance'); ?>">
                    <?php $id = $this->uri->segment(4);
                    $show_item = $this->db->get_where('tbl_finance', array("id_finance"=>"$id"));
                    foreach ($show_item->result() as $reduce) { ?> 
                      <tr class="tr_clone">
                        <td>
                    <input type="hidden" value="<?=$reduce->id_finance;?>" id="id" name="id">
                    <input readonly="1" value="<?=$reduce->spk;?>" id="spk" name="spk" type="text">

                        <td>
                            <input value="<?php echo $reduce->nilai_kontrak; ?>" readonly="1" id="nilai_kontrak" name="nilai_kontrak" type="text">
                        </td>
                        <td>
                            <input type="text" name="progres" readonly="1" id="progres" value="<?php echo $reduce->progres; ?>">
                        </td>
                        <td> <input type="date"  name="tgl_tagih" readonly="1" value="<?php echo $reduce->tgl_tagih; ?>"> </td>
                        <td>
                            <input type="text" readonly="1" name="jumlah_tagih" id="jumlah_tagih" onfocus="startCalculate()" onblur="stopCalc()" value="<?php echo $reduce->jumlah_tagih; ?>">
                        </td>
                        <td><input type="date" name="tglbayar" id="tglbayar"></td>                              
                        <td><input type="text" name="nilai_byr" id="nilai_byr" onfocus="startCalculate()" placeholder="<?php echo $reduce->nilai_byr; ?>" onblur="stopCalc()"></td>                              
                        <td><input type="text" name="kurang_tgh" id="kurang_tgh" onfocus="startCalculate()" onblur="stopCalc()" readonly="1"></td>                              
                        </tr>
                    </tbody>
                    <?php } ?>
                    <br>
                  </table>
                  <!-- <a name="add" value="add" id="add" class="btn-floating waves-effect waves-light brown"><i class="mdi-content-add"></i></a> -->
                </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="margin-left:10px;">Approve
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light right" type="submit" name="action">Cancel
                              </button>
                           <!--    <?=form_close();?> -->
                           </form>
                            </div>
                          </div>        
