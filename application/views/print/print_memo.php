<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.css'?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assetss/css/bootstrap-theme.min.css'?>">
<body onload="window.print()">
<table id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1" width="100%" align="center">
<tr>
    <td rowspan="5" align="center">REKON</td>
    <td rowspan="5" align="center"><b><?php echo $this->input->get('nama_proyek'); ?></b><br><br></td>
    <td colspan="2" align="center" width="45%"><b>Page : 1/1</b></td>
    
</tr>
<tr>
    <td colspan="2"><b>Nomor&nbsp&nbsp&nbsp;: </b></td>
</tr>
<tr>
    <td colspan="2"><b>Tanggal&nbsp&nbsp;:</b></td> 
</tr>
<tr>
    <td colspan="2"><b>Perihal&nbsp&nbsp&nbsp;:</b></td>
</tr>
<tr>
    <td colspan="2"><b>&nbsp&nbsp;</b></td>
</tr>  
<tr>
    <td colspan="5" align="center"><b>MEMO PEMBAYARAN</b></td>
</tr>
<tr>
    <td colspan="5" align="left">KEPADA YTH <br>
    <b>Manager Keuangan</b><br>
    <b>PT. REKA MULIA KONSTRUKSI</b>
    </td>
</tr>
<tr>
    <td colspan="5">Dengan Hormat,<br>
<br>
    Mengacu kepada :<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 1. Surat Perjanjian Kerja berdasarkan SPK No : <?php echo $this->input->get('spk'); ?> <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 

 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Tanggal :
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u> <i> <?php echo $this->input->get('uraian'); ?> </i> </u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 

<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 2. Kwitasi penagihan &nbsp&nbsp;No.....,&nbsp&nbsp; Tanggal.....,&nbsp&nbsp;atas nama<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Sejumlah &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <b> <i>Rp&nbsp&nbsp&nbsp&nbsp; 10.055.750,00</b></i> <br>
Dengan ini diinformasikan kepada Manger Keuangan bahwa Pekerjaan tersebut diatas pada perumahaan <?php echo $this->input->get('nama_proyek'); ?> <br>
type&nbsp&nbsp; : <?php echo $this->input->get('type'); ?> <br>
Kavling&nbsp&nbsp; : <?php echo $this->input->get('nama_kavling_hidden'); ?> <br>
Jumlah Unit yang dikerjakan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; : <?php echo $this->input->get('unit'); ?> Unit<br>
Progress Pekerjaan dilapangan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; : <?php echo $this->input->get('progres'); ?> &nbsp%<br>
berhak menerima pembayaraan dengan rincian sebagai berikut <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Nilai Kontrak (SPK) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 10.585.000</u> <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Nilai Kontrak Setelah Opname &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 10.585.000</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; PPN/PPh &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; -</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; DP &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; -</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Retensi 5% &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 529.250</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Yang Sudah di Bayar &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; -</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Yang di Tagihkan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 10.055.750</u>  <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Sisa Yang Belum Terbayar &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <u>Rp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; 529.250</u>  <br>
Demikianlah Memo ini kami berikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih
</td>
<tr>
    <td width="20%"  rowspan="4">Keterangan :</td>
    <td width="20%" rowspan="4" align="center">Dibuat Oleh <br>
    <br>
    <u>(YAYA)</u> <br>
    Staff Konstruksi
    </td>
    <td width="20%" rowspan="4" align="center">Diketahui Oleh<br>
    <br>
    <u>(ADI DERMAWAN)</u> 
    Manager Procurement
    </td>
    <td width="20%" rowspan="4" align="center">Di periksa Oleh<br>
    <br>
    <u>(FERIADI IRAWAN) </u> <br>
     General Manager 
    </td>
</tr>
</table>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<h5 align="left">Kelengkapan Dokument
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 1. Kwitansi 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 2. Berita Acara Pekerjaan
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 3. Foto Copy SPK /WO
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 4. Foto Pekerjaan
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 5. Mapping Pekerjaan
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 6. Jaminan Garansi / Sertifikat
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; <h6 align="left" > 7. Lain lain
</body>
</html>
</body>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?=base_url().'assetss/js/npm.js'?>"></script>