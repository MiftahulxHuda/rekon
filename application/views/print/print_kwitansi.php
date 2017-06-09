<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.min.css'?>">
<body onload="window.print()">
<table class="table table-bordered" id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                        <tbody>

                          <td align="center">   <img style="float:left;" width="50" height="50" src="<?php echo base_url().'asset/web/images/newrekon.png'?>">  <h4> <b> Kwitansi Pembayaran</h4></td>
                    <?php
                    $angka = isset($_POST['jumlah_tagih']) ? $_POST['jumlah_tagih'] : "0";
                    if ($angka)
                    {
                    echo ucwords(Terbilang($angka));
                    }
                    function Terbilang($a) {
                        $ambil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                        if ($a < 12)
                            return " " . $ambil[$a];
                        elseif ($a < 20)
                            return Terbilang($a - 10) . "belas";
                        elseif ($a < 100)
                            return Terbilang($a / 10) . " puluh" . Terbilang($a % 10);
                        elseif ($a < 200)
                            return " seratus" . Terbilang($a - 100);
                        elseif ($a < 1000)
                            return Terbilang($a / 100) . " ratus" . Terbilang($a % 100);
                        elseif ($a < 2000)
                            return " seribu" . Terbilang($a - 1000);
                        elseif ($a < 1000000)
                            return Terbilang($a / 1000) . " ribu" . Terbilang($a % 1000);
                        elseif ($a < 1000000000)
                            return Terbilang($a / 1000000) . " juta" . Terbilang($a % 1000000);
                    }
                    ?>

                    </tbody>
                        <?php $id_kwitansi = $this->uri->segment(4);
                        $kwitansi = $this->db->query("SELECT * FROM tbl_kwitansi order by id_kwitansi DESC limit 1");
                        foreach ($kwitansi->result() as $reduce) { ?> 
                    <tbody>
                        <td style="padding-left:20%;">No kwitansi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp <?=$reduce->id_kwitansi." / REKON /";?> <?=date('Y', strtotime($reduce->create_date));?>
                        <br>
                        <br>
                        Telah di Terima Dari &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp <?php echo $reduce->nama_owner; ?>
                        <br>
                        <br>
                        Uang Sejumlah &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp <?php echo ucwords(Terbilang($reduce->jumlah_tagih))."Rupiah";?>  
                        <br>
                        <br>
                        Untuk Pembayaran &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp <?php echo "Tagihan Progres Ke &nbsp".$reduce->progres; ?>
                        <br>
                        <br>
                        Nomor SPK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp <?php echo $reduce->spk; ?>
                        <br>
                        <br>
                        Jenis Pekerjaan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp <?php echo $reduce->jenis_pekerjaan; ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p> <?php echo "Rp.". number_format($reduce->jumlah_tagih).",-";?></p>
                        <p style="padding-left:60%;"> Depok,&nbsp <?=date('d-m-Y', strtotime($reduce->create_date));?></p>
                                                
                    <?php 
                     $kwitansi = $this->db->query("SELECT * FROM tbl_kwitansi order by id_kwitansi DESC limit 1");
                        foreach ($kwitansi->result() as $reduce) { ?>
                        <style type="text/css">
                        #gm{
                            padding-left: 60%;
                        }
                        </style> 
                         <img id="gm" style=" height="20%;" width="20%;" " src="<?php echo base_url()."assets/tandakwitansi/".$reduce->foto; ?>">
                    <?php } ?> 
                        <br>
                        <p style="padding-left:67%;" >test</p>
                        </td>
                    </tbody>
                    <?php } ?>

            </table>
</body>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/npm.js'?>"></script>