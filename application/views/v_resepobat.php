<!-- Main content -->
<div class="content-wrapper">

	<!-- Float buttons with text -->
	<div class="page-header page-header-default">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('dashboard')?>"><i class="icon-home2 position-left"></i> Beranda</a></li>
				<li class="active">Resep Obat/BHP/Alkes</li>
			</ul>
		</div>
	</div>
	<!-- /float buttons with text -->
	<!-- Content area -->
	<div class="content">

		<!-- Basic responsive configuration -->
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h6 class="panel-title">RESEP OBAT/BHP/ALKES</h6>
            </div>

            <form role="form" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="fa fa-wheelchair position-left" style="font-size:16px"></i>PASIEN</legend>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>No. RM</b></label>
                                    <div class="col-lg-3">
                                        <input id="norm" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                    <div class="col-lg-2">
                                        <a data-toggle='modal' data-target='#modal_data_pasien'><button type="button" class="btn btn-info btn-labeled" onclick="tampilDataPasien()"><b><i class="icon-search4"></i></b>CARI PASIEN</button></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Nama</b></label>
                                    <div class="col-lg-9">
                                        <input id="nama" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Tempat/Tgl. Lahir</b></label>
                                    <div class="col-lg-9">
                                        <input id="tmptgllahir" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Umur</b></label>
                                    <div class="col-lg-9">
                                        <input id="umur" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Jenis Kelamin</b></label>
                                    <div class="col-lg-9">
                                        <input id="jk" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Alamat</b></label>
                                    <div class="col-lg-9">
                                        <textarea id="alamat" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="fa fa-hospital-o position-left" style="font-size:16px"></i>ASAL PASIEN</legend>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>No. Registrasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="noreg" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Tgl. Registrasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="tglreg" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Ruang/Poli</b></label>
                                    <div class="col-lg-9">
                                        <input id="instalasi" type="hidden" class="form-control" style="color:black">
                                        <input id="ruangpoli" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Kelas</b></label>
                                    <div class="col-lg-9">
                                        <input id="kelas" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Cara Bayar</b></label>
                                    <div class="col-lg-9">
                                        <input id="carabayar" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Penjamin</b></label>
                                    <div class="col-lg-9">
                                        <input id="penjamin" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="fa fa-stethoscope position-left" style="font-size:16px"></i>DIAGNOSA PASIEN</legend>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive pre-scrollable tableFixHead">
                                            <table class="table table-xs table-framed table-bordered" id="tbl_diagnosa">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align:center">TGL. DIAGNOSA</th>
                                                        <th style="text-align:center">KODE</th>
                                                        <th style="text-align:center">DIAGNOSA</th>
                                                        <th style="text-align:center">DESKRIPSI</th>
                                                        <th style="text-align:center">JENIS DIAGNOSA</th>
                                                        <th style="text-align:center">DOKTER</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="fa fa-medkit position-left" style="font-size:16px"></i>PEMESANAN OPERASI</legend>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Jenis Operasi/Keterangan</b></label>
                                    <div class="col-lg-2">
                                        <span class='label label-default' style='font-size:13px; padding-top:8px; width:100%; height:35px' id="jenisop"></span>
                                    </div>
                                    <div class="col-lg-7">
                                        <input id="keterangan" type="text" class="form-control" disabled="disabled" style="color:black">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>No. Registrasi Operasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="noregop" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Tgl. Registrasi Operasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="tglregop" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Dokter Pengirim</b></label>
                                    <div class="col-lg-9">
                                        <input id="dokterpengirim" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Waktu Pemesanan Operasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="wktpesanop" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><b>Waktu Pelayanan Operasi</b></label>
                                    <div class="col-lg-9">
                                        <input id="wktpelaksanaan" type="text" class="form-control" style="color:black" disabled="disabled">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url();?>/template/assets/css/icons/ob_obat2.png">RESEP OBAT/BHP/ALKES</legend>
                                <div class="tabbable">
                                    <ul class="nav nav-pills nav-pills-bordered nav-justified">
                                        <li class="active"><a href="#basic-tab-tindakan" data-toggle="tab"><i class="fa fa-medkit position-left"></i>RESEP</a></li>
                                        <li><a href="#basic-tab-riwayat" data-toggle="tab"><i class="fa fa-history position-left"></i>RIWAYAT</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic-tab-tindakan">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label"><b>Dokter Pemberi Resep</b></label>
                                                            <div>
                                                                <select data-placeholder='' class='select-size-sm' id='selectdokterlaboratorium' disabled="disabled">
                                                                    <?php foreach($dokter->result() as $data_dokter){?>
                                                                        <option value="<?php echo $data_dokter->kdPetugasMedis;?>"><?php echo $data_dokter->namapetugasMedis;?></option>
                                                                     <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <fieldset>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Obat/BHP/Alkes</b></label>
                                                                <div>
                                                                    <select data-placeholder='' class='select-size-sm select-clear' id='selectobat' disabled onchange="setDetailObat(this)">";
                                                                        <optgroup label="obat/bhp/alkes - stok">
                                                                        <?php foreach ($obat->result() as $data_obat){?>
                                                                            <option value='<?php echo $data_obat->plu.";".$data_obat->obat.";".$data_obat->jmlstok.";".$data_obat->hargajual.";".$data_obat->satuan;?>'><?php echo $data_obat->obat." - (".$data_obat->jmlstok." ".strtoupper($data_obat->satuan).")";?></option>
                                                                        <?php } ?>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><b>Stok Tersedia</b></label>
                                                                    <div>
                                                                        <input type="text" id="stokterserdia" class="form-control" readonly="readonly" style="width: 96%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><b>Satuan</b></label>
                                                                    <div>
                                                                        <input type="text" id="satuan" class="form-control" readonly="readonly" style="width: 96%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label"><b>Harga</b></label>
                                                                    <div>
                                                                        <input type="text" id="harga" class="form-control" readonly="readonly" style="width: 96%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset>
                                                    <div class="col-md-8">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Dibutuhkan</b></label>
                                                                <div>
                                                                    <input type="text" id="dibutuhkan" onkeyup="butuhberi(this)" class="form-control" style="width: 96%" disabled="disabled">
                                                                    <!-- <span class="help-block" id="validasibutuh"><font color="red"></font></span> -->
                                                                    <small class="display-block" id="validasibutuh"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Aturan Pakai</b></label>
                                                                <div>
                                                                    <input type="text" id="aturanpakai" onkeyup="butuhberi(this)" class="form-control text-uppercase" style="width: 96%" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Keterangan</b></label>
                                                                <div>
                                                                    <input type="text" id="keteranganresep" onkeyup="butuhberi(this)" class="form-control text-uppercase" style="width: 100%" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4" style="margin-left: -10px;">
                                                        <br style="line-height: 26px;">
                                                        <div>
                                                            <button id="btn_tambah" class='btn btn-primary btn-labeled' onclick="insertDataTable()" type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-xs table-framed" id="tbl_tindakan">
                                                                    <thead>
                                                                        <tr style="background:#eee;">
                                                                            <th style="text-align:center">OBAT/BHP/ALKES</th>
                                                                            <th style="text-align:center; width:25px">DIBUTUHKAN</th>
                                                                            <th style="text-align:center">SATUAN</th>
                                                                            <th style="text-align:center;">ATURAN PAKAI</th>
                                                                            <th style="text-align:center">KETERANGAN</th>
                                                                            <th style="text-align:center">HARGA</th>
                                                                            <th style="text-align:center">SUBTOTAL</th>
                                                                            <th style="text-align:center">AKSI</th>
                                                                            <th style="display: none">plu</th>
                                                                            <th style="display:none">hiddenjml</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th colspan="5"></th>
                                                                            <th style="text-align:center;">TOTAL</th>
                                                                            <th id='subtotal' style="text-align:right">Rp. 0,00</th>
                                                                            <th></th>
                                                                            <th style="display:none"></th>
                                                                            <th style="display:none"></th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="basic-tab-riwayat">
                                            <div class="row">
                                                <fieldset>
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Tanggal Awal</b></label>
                                                                <div>
                                                                    <input id="tglawal" type="date" class="form-control" style="color:black;width: 96%;" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Tanggal Akhir</b></label>
                                                                <div>
                                                                    <input id="tglakhir" type="date" class="form-control" style="color:black;width: 96%;" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label"><b>Jenis Resep</b></label>
                                                                <div>
                                                                    <select data-placeholder='' class='select' id='selectjenisresep' onchange="setTabelRiwayat()" style="width: 96%">
                                                                        <option value="belum">BELUM TERLAYANI</option>
                                                                        <option value="sudah">SUDAH TERLAYANI</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <br style="line-height: 26px;">
                                                            <button type="button" style="float: right;" class="btn btn-labeled btn-info" onclick="tampilDataResep()"><b><i class="icon-file-text2"></i></b>TAMPILKAN</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive pre-scrollable tableFixHead" id="div_riwayat_resep">
                                                                <table class="table table-xs table-framed" id="tbl_riwayat_resep">
                                                                    <thead>
                                                                        <tr style="background:#eee;">
                                                                            <th style="text-align:center">NO. RESEP</th>
                                                                            <th style="text-align:center">TGL. RESEP</th>
                                                                            <th style="text-align:center">DOKTER</th>
                                                                            <th style="text-align:center">INSTALASI</th>
                                                                            <th style="text-align:center">DETAIL</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="table-responsive pre-scrollable tableFixHead" id="div_riwayat_obat">
                                                                <table class="table table-xs table-framed" id="tbl_riwayat_obat">
                                                                    <thead>
                                                                        <tr style="background:#eee;">
                                                                            <th style="text-align:center">NO. TRANSAKSI</th>
                                                                            <th style="text-align:center">TGL. TRANSAKSI</th>
                                                                            <th style="text-align:center">DOKTER</th>
                                                                            <th style="text-align:center">INSTALASI</th>
                                                                            <th style="text-align:center">CARA BAYAR</th>
                                                                            <th style="text-align:center">PENJAMIN</th>
                                                                            <th style="text-align:center">TOTAL</th>
                                                                            <th style="text-align:center">STATUS BAYAR</th>
                                                                            <th style="text-align:center">DETAIL</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <hr>
                    <button type="button" class="btn btn-success btn-labeled" id="btn_simpan" onclick="insertResepPasien()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                    <button type="button" class="btn btn-danger btn-labeled" id="btn_batal" onclick="batalTindakan()" disabled><b><i class="glyphicon glyphicon-floppy-remove"></i></b>BATAL</button>
                    <hr>
                    <!-- <button type="button" class="btn btn-success btn-labeled" id="btn_coba" onclick="cobaTampil()"><b><i class="glyphicon glyphicon-saved"></i></b>GET VALUE</button> -->
                </div>
            </form>
            <div id="modal_data_pasien" class="modal fade">
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">PASIEN OPERASI</h5>
                        </div>
                        <form role="form" class="form-horizontal">
                            <div class="modal-body">
                                <div class="row">
                                    <table id="data_pasien" class="table datatable-basic table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px">NO.</th>
                                                <th>NO. REGISTRASI OPERASI</th>
                                                <th>NO. RM</th>
                                                <th>NAMA PASIEN</th>
                                                <th>DOKTER OPERATOR</th>
                                                <th>ASAL PASIEN</th>
                                                <th>JENIS OPERASI</th>
                                                <th>WAKTU PERMINTAAN</th>
                                                <th>WAKTU PELAKSANAAN</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="modal_riwayat_lab" class="modal fade">
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title" id="title_detail_tindakan"></h5>
                        </div>
                        <form role="form" class="form-horizontal">
                            <div class="modal-body">
                                <div class="row">
                                    <table class="table table-xs table-framed" id="tbl_detail_obat">
                                        <thead>
                                            <tr style="background:#eee;">
                                                <th style="text-align:center">NO.</th>
                                                <th style="text-align:center">OBAT/BHP/ALKES</th>
                                                <th style="text-align:center">DIBUTUHKAN (NON-KRONIS)</th>
                                                <th style="text-align:center;">DIBERIKAN (NON-KRONIS)</th>
                                                <th style="text-align:center">DIBUTUHKAN (KRONIS)</th>
                                                <th style="text-align:center">DIBERIKAN (KRONIS)</th>
                                                <th style="text-align:center">SATUAN</th>
                                                <th style="text-align:center">HARGA</th>
                                                <th style="text-align:center">SUBTOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="7"></th>
                                                <th style="text-align:center;">TOTAL</th>
                                                <th id='subtotal_detail_obat' style="text-align:right">Rp. 0,00</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<style type="text/css">
    .tableFixHead {
        overflow-y: auto;
        height: 300px; 
    }

    .tableFixHead thead tr:nth-child(1) th {
        background: #eee;
        position: sticky;
        top: 0;
        z-index: 10;
    }

</style>

<script type="text/javascript">
    function tampilDataPasien(){
        $('#data_pasien').dataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "order": [[8, 'ASC']], 
            "ajax": {
                "url": "<?php echo base_url('permintaanlaboratorium/dataTablePasien') ?>",
                "type": "POST",
            },
            "deferRender": true,
            "lengthMenu": [[10, 25, 50],[10, 25, 50]],
            "columns": [
                {
                    "render": function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                }, {
                    "data": "noregistrasiop"
                }, {
                    "data": "norm"
                }, {
                    "data": "namapasien"
                }, {
                    "render":
                    function (data, type, row) {
                        let getdokter=row.dokterop;
                        let arrdokter=getdokter.split(";").join("<br/>"+"- ");
                        let dokterop="";
                        for(let i=1;i<arrdokter.length;i++){
                            dokterop+="- "+arrdokter[i];
                        }
                        return arrdokter.substring(5);
                    }
                }, {
                    "render": function (data, type, row) {
                        var html = row.unitasal.toUpperCase();
                        return html;
                    }
                }, {
                    "render": function (data, type, row) {
                        var html = ""
                        if (row.jenisop === "ELEKTIF") {
                            html = "<span class='label label-info' style='width:50px'>" + row.jenisop +"</span>"
                        } else {
                            html = "<span class='label label-danger' style='width:50px'>" + row.jenisop + "</span>"
                        }
                        return html;
                    }
                }, {
                    "render": function (data,type,row){
                        return formatTanggalData(row.tglpermintaanop);
                    }
                }, {
                    "render": function (data,type,row){
                        return row.tgljadwalop==null?"-":formatTanggalData(row.tgljadwalop);
                    }
                }, {
                    "render": function (data, type, row) {
                        var noregistrasi=row.noregistrasiop;
                        let html =  "<button type='button' class='btn btn-primary btn-rounded btn-labeled btn-xs' onclick=\"getDetailPasien('"+noregistrasi+"');\" data-dismiss='modal'><b><i class='icon-checkmark4'></i></b>PILIH</button>";
                        return html;
                    }
                }
            ],
            "columnDefs": [
                {"targets": [6],"orderable": true},
                {"targets": [0],"orderable": false},
                {"targets": [1],"orderable": false},
                {"targets": [2],"orderable": false},
                {"targets": [9],"orderable": false}
            ]
        });
    }

    function getDetailPasien(noregop){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('permintaanlaboratorium/getDetailPasien');?>",
            data:{noregop:noregop},
            dataType: "JSON",
            success: function (data) {
                clearForm();
                $('#noregop').val(data.noregistrasiop);
                $('#norm').val(data.norm);
                $('#nama').val(data.namapasien);
                $('#tmptgllahir').val(hpskotakab(data.tmplahir)+" / "+data.tgllahir);
                $('#umur').val(hitungUmur(data.tgllahir));
                $('#jk').val(jklengkap(data.jk));
                $('#alamat').val(data.alamat.toUpperCase());
                _("jenisop").innerHTML=data.jenisop;
                data.jenisop==='CITO'?_("jenisop").className = 'label label-danger':_("jenisop").className = 'label label-info';
                $('#dokterpengirim').val(data.dokterpengirim);
                $('#noreg').val(data.noregistrasi);
                $('#tglreg').val(data.tglregistrasi);
                _("instalasi").value=data.instalasi;
                $('#ruangpoli').val(data.unitasal.toUpperCase());
                $('#kelas').val(data.kelas);
                $('#penjamin').val(data.penjamin.toUpperCase());
                $('#carabayar').val(data.carabayar.toUpperCase());
                $('#tglregop').val(data.tglregistrasiop);
                $('#wktpesanop').val(data.tglpermintaanop);
                $('#keterangan').val(data.keterangan);
                $('#wktpelaksanaan').val(data.tgljadwalop);
                getDiagnosaPasien(data.norm);
                // getRiwayatLab(data.norm);
                _("selectdokterlaboratorium").disabled = false;
                _("selectobat").disabled = false;
                _("btn_tambah").disabled = false;
                _("btn_simpan").disabled = false;
                _("btn_batal").disabled=false;
            }
        });
    }

    function getDiagnosaPasien(norm){
        let table = _("tbl_diagnosa");
        table.getElementsByTagName('tbody')[0].innerHTML = '';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('permintaanlaboratorium/getDiagnosaPasien');?>",
            data:{norm:norm},
            dataType: "JSON",
            success: function (data) {
                if(data!=null){
                    let row_count = table.tBodies[0].rows.length;
                    let data_clean = [...new Set(data.map(obj => JSON.stringify(obj)))].map(str => JSON.parse(str));
                    for(let i=0; i<data_clean.length; i++){
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let TGL_DIAGNOSA = row_insert.insertCell(0);
                        let KODE = row_insert.insertCell(1);
                        KODE.style.textAlign="center";
                        let DIAGNOSA = row_insert.insertCell(2);
                        let DESKRIPSI = row_insert.insertCell(3);
                        let JENIS_DIAGNOSA = row_insert.insertCell(4);
                        let DOKTER = row_insert.insertCell(5);

                        TGL_DIAGNOSA.innerHTML = data_clean[i].tgldiagnosa==null|data_clean[i].tgldiagnosa=='0000-00-00 00:00:00'?formatTanggalData(data_clean[i].tgldaftar):formatTanggalData(data_clean[i].tgldiagnosa);
                        KODE.innerHTML = data_clean[i].kdicd10;
                        DIAGNOSA.innerHTML = data_clean[i].icd10;
                        DESKRIPSI.innerHTML = data_clean[i].deskripsi;
                        JENIS_DIAGNOSA.innerHTML = data_clean[i].jenisdiagnosa;
                        DOKTER.innerHTML = data_clean[i].dokter;
                    }
                }
            }
        });
    }

    function butuhberi(el){
        let kode = event.which || event.keyCode;
        if(kode==13){
            if($(el).attr('id')=='dibutuhkan'){
                if($(el).val()!=""){
                    _("aturanpakai").focus();
                }
            }
            if($(el).attr('id')=='aturanpakai'){
                if($(el).val()!=""){
                    _("keteranganresep").focus();
                }
            }
            if($(el).attr('id')=='keteranganresep'){
                _("btn_tambah").focus();
            }
        }else{
            if($(el).attr('id')=='dibutuhkan'){
                let tersedia=parseInt(_("stokterserdia").value);
                let butuh=parseInt(_("dibutuhkan").value);
                // console.log(tersedia+";"+butuh);
                if(butuh>tersedia){
                    _("validasibutuh").innerHTML="<font color='red'>JUMLAH BUTUH > STOK TERSEDIA</font>";
                }else{
                     _("validasibutuh").innerHTML="";
                }
                return $(el).val($(el).val().replace(/[^0-9]+/g,''));
                
            }
        }
    }

    function setDetailObat(el){
        if(_('norm').value!=''){
            let data=_('selectobat').value;
            if(data!=''){
                let data_array = data.split(';');
                _('stokterserdia').value=data_array[2];
                _('satuan').value=data_array[4].toUpperCase();
                _('harga').value=tambahRP(data_array[3]);
                _('dibutuhkan').disabled=false;
                _('aturanpakai').disabled=false;
                _('keteranganresep').disabled=false;
                setTimeout(function(){_('dibutuhkan').focus(); }, 0);
            }else{
                _('stokterserdia').value="";
                _('satuan').value="";
                _('harga').value="";
                _('dibutuhkan').disabled=true;
                _('aturanpakai').disabled=true;
                _('keteranganresep').disabled=true;
                _("validasibutuh").innerHTML="";
            }
        }
    }

    function setTabelRiwayat(){
        let jenisresep=_("selectjenisresep").value;
        if(jenisresep=="belum"){
            css("div_riwayat_obat").display="none";
            css("div_riwayat_resep").display="block";
        }else if(jenisresep=="sudah"){
            css("div_riwayat_obat").display="block";
            css("div_riwayat_resep").display="none";
        }
        _('tbl_riwayat_obat').getElementsByTagName('tbody')[0].innerHTML="";
        _('tbl_riwayat_resep').getElementsByTagName('tbody')[0].innerHTML="";
    }
    setTabelRiwayat();

    function tampilDataResep(){
        let jenisresep=_("selectjenisresep").value;
        let table = jenisresep=="belum"?_("tbl_riwayat_resep"):_("tbl_riwayat_obat");
        table.getElementsByTagName('tbody')[0].innerHTML = '';
        let norm=_("norm").value;
        let tglawal=_("tglawal").value;
        let tglakhir=_("tglakhir").value;
        if(norm!=''){
            if(tglawal==''&&tglakhir==''){
                swal({
                    title: "Gagal Ditampilkan",
                    text: "Tgl. Awal dan Tgl. Akhir\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_("tglawal").focus()
                });
            }else if(tglawal==''&&tglakhir!=''){
                swal({
                    title: "Gagal Ditampilkan",
                    text: "Tgl. Awal\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_("tglawal").focus()
                });
            }else if(tglawal!=''&&tglakhir==''){
                swal({
                    title: "Gagal Ditampilkan",
                    text: "Tgl. Akhir\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_("tglakhir").focus()
                });
            }else{
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('resepobat/getRiwayatResep');?>",
                    data:{jenisresep:jenisresep,norm:norm,tglawal:tglawal,tglakhir:tglakhir},
                    dataType: "JSON",
                    success: function (data) {
                        if(jenisresep=="belum"){
                            if(data.length>0){
                                let row_count = table.tBodies[0].rows.length;
                                for(let i=0; i<data.length; i++){
                                    let row_insert = table.tBodies[0].insertRow(row_count);
                                    let NORESEP = row_insert.insertCell(0);
                                    let TGLRESEP = row_insert.insertCell(1);
                                    let DOKTER = row_insert.insertCell(2);
                                    let INSTALASI = row_insert.insertCell(3);
                                    INSTALASI.style.textAlign="center";
                                    let DETAIL = row_insert.insertCell(4);
                                    DETAIL.style.textAlign="center";

                                    NORESEP.innerHTML = data[i].noresep;
                                    TGLRESEP.innerHTML = formatTanggalData(data[i].tglresep);
                                    DOKTER.innerHTML = data[i].dokter;
                                    INSTALASI.innerHTML = data[i].depo=='Kamar Operasi'?"OK IBS":data[i].depo.toUpperCase();
                                    DETAIL.innerHTML = "<a data-toggle='modal' data-target='#modal_riwayat_lab' onclick=\"getDetailRiwayatObat('"+data[i].noresep+"');\"><button type='button' class='btn btn-info btn-rounded btn-labeled btn-xs'><b><i class='icon-file-eye'></i></b>LIHAT</button></a>";
                                }
                            }else{
                                console.log(data);
                                swal({
                                    title: "Riwayat Obat/BHP/Alkes",
                                    text: jenisresep.toUpperCase()+" Terlayani Tidak Tersedia",
                                    confirmButtonColor: "#FF7042",
                                    type: "warning"
                                });
                            }
                        }else if(jenisresep=="sudah"){
                            if(data.length>0){
                                let row_count = table.tBodies[0].rows.length;
                                for(let i=0; i<data.length; i++){
                                    let row_insert = table.tBodies[0].insertRow(row_count);
                                    let NOTRANSAKSI = row_insert.insertCell(0);
                                    let TGLTRANSAKSI = row_insert.insertCell(1);
                                    let DOKTER = row_insert.insertCell(2);
                                    let INSTALASI = row_insert.insertCell(3);
                                    INSTALASI.style.textAlign="center";
                                    let CARABAYAR = row_insert.insertCell(4);
                                    let PENJAMIN = row_insert.insertCell(5);
                                    let TOTAL = row_insert.insertCell(6);
                                    TOTAL.style.textAlign="right";
                                    let STATUSBAYAR = row_insert.insertCell(7);
                                    STATUSBAYAR.style.textAlign="center";
                                    let DETAIL = row_insert.insertCell(8);
                                    DETAIL.style.textAlign="center";

                                    NOTRANSAKSI.innerHTML = data[i].nopenjualan;
                                    TGLTRANSAKSI.innerHTML = formatTanggalData(data[i].tglpenjualan);
                                    DOKTER.innerHTML = data[i].dokter;
                                    INSTALASI.innerHTML = data[i].instalasi.toUpperCase();
                                    CARABAYAR.innerHTML = data[i].carabayar.toUpperCase();
                                    PENJAMIN.innerHTML = data[i].penjamin.toUpperCase();
                                    TOTAL.innerHTML = tambahRP(data[i].totalakhir);
                                    STATUSBAYAR.innerHTML = data[i].statusbayar;
                                    DETAIL.innerHTML = "<a data-toggle='modal' data-target='#modal_riwayat_lab' onclick=\"getDetailRiwayatObat('"+data[i].nopenjualan+"');\"><button type='button' class='btn btn-info btn-rounded btn-labeled btn-xs'><b><i class='icon-file-eye'></i></b>LIHAT</button></a>";
                                }
                            }else{
                                console.log(data);
                                swal({
                                    title: "Riwayat Obat/BHP/Alkes",
                                    text: jenisresep.toUpperCase()+" Terlayani Tidak Tersedia",
                                    confirmButtonColor: "#FF7042",
                                    type: "warning"
                                });
                            }
                        }
                    }
                });
            }
        }
    }

    function getDetailRiwayatObat(notransaksi){
        let table = _("tbl_detail_obat");
        table.getElementsByTagName('tbody')[0].innerHTML = '';
        _("title_detail_tindakan").innerHTML="DETAIL RESEP - ("+notransaksi+")";
        let jenisresep=_("selectjenisresep").value;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('resepobat/getDetailRiwayatObat');?>",
            data:{jenisresep:jenisresep,notransaksi:notransaksi},
            dataType: "JSON",
            success: function (data) {
                if(jenisresep=='belum'){
                    let totalakhir=0;
                    let row_count = table.tBodies[0].rows.length;
                    for(let i=0; i<data.length; i++){
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let NO = row_insert.insertCell(0);
                        NO.style.textAlign="center";
                        let OBAT = row_insert.insertCell(1);
                        let BUTUH_NONKRONIS = row_insert.insertCell(2);
                        BUTUH_NONKRONIS.style.textAlign="center";
                        let BERI_NONKRONIS = row_insert.insertCell(3);
                        BERI_NONKRONIS.style.textAlign="center";
                        let BUTUH_KRONIS = row_insert.insertCell(4);
                        BUTUH_KRONIS.style.textAlign="center";
                        let BERI_KRONIS = row_insert.insertCell(5);
                        BERI_KRONIS.style.textAlign="center";
                        let SATUAN = row_insert.insertCell(6);
                        SATUAN.style.textAlign="center";
                        let HARGA = row_insert.insertCell(7);
                        HARGA.style.textAlign="right";
                        let SUBTOTAL = row_insert.insertCell(8);
                        SUBTOTAL.style.textAlign="right";

                        NO.innerHTML = data.length-i;
                        OBAT.innerHTML = data[i].obat;
                        BUTUH_NONKRONIS.innerHTML = data[i].notransaksi.substring(0,5)=='RSPRJ'?data[i].butuhnonkronis:data[i].butuh;
                        BERI_NONKRONIS.innerHTML = "-";
                        BUTUH_KRONIS.innerHTML = data[i].notransaksi.substring(0,5)=='RSPRJ'?data[i].butuhkronis:"-";
                        BERI_KRONIS.innerHTML = "-";
                        SATUAN.innerHTML = data[i].satuan.toUpperCase();
                        HARGA.innerHTML = tambahRP(data[i].harga);
                        let sub_total=data[i].notransaksi.substring(0,5)=='RSPRJ'?(data[i].butuhkronis*data[i].harga):(data[i].butuh*data[i].harga);
                        SUBTOTAL.innerHTML = tambahRP(sub_total);
                        totalakhir+=parseFloat(sub_total);
                    }
                    _("subtotal_detail_obat").innerHTML=tambahRP(totalakhir);
                }else if(jenisresep=='sudah'){
                    let totalakhir=0;
                    let row_count = table.tBodies[0].rows.length;
                    for(let i=0; i<data.length; i++){
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let NO = row_insert.insertCell(0);
                        NO.style.textAlign="center";
                        let OBAT = row_insert.insertCell(1);
                        let BUTUH_NONKRONIS = row_insert.insertCell(2);
                        BUTUH_NONKRONIS.style.textAlign="center";
                        let BERI_NONKRONIS = row_insert.insertCell(3);
                        BERI_NONKRONIS.style.textAlign="center";
                        let BUTUH_KRONIS = row_insert.insertCell(4);
                        BUTUH_KRONIS.style.textAlign="center";
                        let BERI_KRONIS = row_insert.insertCell(5);
                        BERI_KRONIS.style.textAlign="center";
                        let SATUAN = row_insert.insertCell(6);
                        SATUAN.style.textAlign="center";
                        let HARGA = row_insert.insertCell(7);
                        HARGA.style.textAlign="right";
                        let SUBTOTAL = row_insert.insertCell(8);
                        SUBTOTAL.style.textAlign="right";

                        NO.innerHTML = data.length-i;
                        OBAT.innerHTML = data[i].obat;
                        BUTUH_NONKRONIS.innerHTML = data[i].nopenjualan.substring(0,4)=='P1RJ'?data[i].butuhnonkronis:data[i].butuhkronis;
                        BERI_NONKRONIS.innerHTML = data[i].nopenjualan.substring(0,4)=='P1RJ'?data[i].berinonkronis:data[i].berikronis;
                        BUTUH_KRONIS.innerHTML = data[i].nopenjualan.substring(0,4)=='P1RJ'?data[i].butuhkronis:"-";
                        BERI_KRONIS.innerHTML = data[i].nopenjualan.substring(0,4)=='P1RJ'?data[i].berikronis:"-";
                        SATUAN.innerHTML = data[i].satuan.toUpperCase();
                        HARGA.innerHTML = tambahRP(data[i].harga);
                        SUBTOTAL.innerHTML = tambahRP(data[i].subtotal);
                        totalakhir+=parseFloat(data[i].subtotal);
                    }
                    _("subtotal_detail_obat").innerHTML=tambahRP(totalakhir);
                }
            }
        });
    }

    function validasiInsert(table,input,cell){
        let row_count = table.tBodies[0].rows.length;
        let row="";
        for (let brs = 0; brs < row_count; brs++) {
            let data = typeof table.tBodies[0].rows[brs].cells[cell].children[0] !== 'undefined' ? table.tBodies[0].rows[brs].cells[cell].children[0].value:table.tBodies[0].rows[brs].cells[cell].innerText;
            if(data===input){
                row+=brs;
            }
        }
        return row;
    }

    function insertDataTable(){
        let table = _("tbl_tindakan");
        let row_count = table.tBodies[0].rows.length;
        let data=_("selectobat").value;
        let butuh=_('dibutuhkan').value;
        let aturanpakai=_('aturanpakai').value;
        let keteranganresep=_('keteranganresep').value;
        if(data!==''){
            let data_array = data.split(';');
            if(validasiInsert(table,data_array[0],8)!=""){
                swal({
                    title: "Gagal",
                    text: data_array[1]+" Sudah Dipilih!",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_("selectobat").focus()
                });
            }else if(butuh==''){
                swal({
                    title: "Gagal",
                    text: "Dibutuhkan Tidak Boleh Kosong!",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_('dibutuhkan').focus()
                });
            }else if(aturanpakai==''){
                swal({
                    title: "Gagal",
                    text: "Aturan Pakai Tidak Boleh Kosong!",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_('aturanpakai').focus()
                });
            }else if(_("validasibutuh").innerText!=""){
                swal({
                    title: "Gagal",
                    text: "Jumlah Dibutuhkan > Stok Tersedia!",
                    confirmButtonColor: "#EF5350",
                    type: "error",
                    onClose:_('dibutuhkan').focus()
                });
            }else{
                let row_insert = table.tBodies[0].insertRow(row_count);
                let OBAT = row_insert.insertCell(0);
                let BUTUH = row_insert.insertCell(1);
                BUTUH.style.textAlign="center";
                let SATUAN = row_insert.insertCell(2);
                SATUAN.style.textAlign="center";
                let ATURANPAKAI = row_insert.insertCell(3);
                ATURANPAKAI.style.textAlign="center";
                let KETERANGAN = row_insert.insertCell(4);
                let HARGA = row_insert.insertCell(5);
                HARGA.style.textAlign="right";
                let SUBTOTAL = row_insert.insertCell(6);
                SUBTOTAL.style.textAlign="right";
                let AKSI = row_insert.insertCell(7);
                AKSI.style.textAlign="CENTER";
                let PLU = row_insert.insertCell(8);
                PLU.style.display="none";
                let HIDDENJML = row_insert.insertCell(9);
                HIDDENJML.style.display="none";

                OBAT.innerHTML = data_array[1];
                HARGA.innerHTML = tambahRP(data_array[3]);
                BUTUH.innerHTML = "<input type='number' onpaste='return false' onwheel=\"blur();\" onchange=\"hitungSubtotal(this);\" class='form-control' min='1' value='"+butuh+"' step='1' style='text-align:center;' onkeydown='return false'>";
                SATUAN.innerHTML = data_array[4].toUpperCase();
                ATURANPAKAI.innerHTML = aturanpakai;
                KETERANGAN.innerHTML = keteranganresep.toUpperCase();
                SUBTOTAL.innerHTML = tambahRP(butuh*data_array[3]);
                AKSI.innerHTML = "<button type='button' onclick=\"hapusTindakan(this);\" class='btn btn-danger btn-rounded btn-labeled btn-xs'><b><i class='glyphicon glyphicon-trash'></i></b>HAPUS</button>";
                PLU.innerHTML = data_array[0];
                HIDDENJML.innerHTML=butuh;
                $("#selectobat").val("").trigger('change');
                _("dibutuhkan").value="";
                _("aturanpakai").value="";
                _("keteranganresep").value="";
                _("subtotal").innerHTML=subTotal();
                _("selectobat").focus();
            }
        }else{
            swal({
                title: "Gagal",
                text: "Obat/BHP/Alkes Tidak Boleh Kosong!",
                confirmButtonColor: "#EF5350",
                type: "error",
                onClose:_("selectobat").focus()
            });
        }
    }

    function subTotal() {
        const table = _("tbl_tindakan");
        let row_count = table.tBodies[0].rows.length;
        let tempTotal = [];

        for (let brs = 0; brs < row_count; brs++) {
            tempTotal.push(hapusRP(table.tBodies[0].rows[brs].cells[6].innerText));
        }
        let subtotal=0;
        tempTotal.forEach(function(t) {
            subtotal+=t;
        });
        return tambahRP(subtotal);
    }

    function hitungSubtotal(element){
        const table = _("tbl_tindakan");
        let row=$(element).closest('td').parent()[0].sectionRowIndex;
        let jml=$(element).val();
        let gettarif=table.tBodies[0].rows[row].cells[5].innerText;
        let tarif=hapusRP(gettarif);
        let subtotal=jml*tarif;
        table.tBodies[0].rows[row].cells[6].innerHTML=tambahRP(subtotal);
        table.tBodies[0].rows[row].cells[9].innerHTML=jml;
        _("subtotal").innerHTML=subTotal();
    }

    function hapusTindakan(element){
        const table = _("tbl_tindakan");
        let row=$(element).closest('td').parent()[0].sectionRowIndex;
        table.deleteRow(row+1);
        _("subtotal").innerHTML=subTotal();
    }

    function batalTindakan(){
        swal({
            title: "Batal Kirim Resep",
            text: "Apakah Yakin Batal Kirim Resep?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "YA",
            cancelButtonText: "TIDAK",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm){
            if (isConfirm) {
                clearForm();
            }
        });
    }

    function getDataTableValue(table){
        let row_count = table.tBodies[0].rows.length;
        let row=[];
        for (let brs = 0; brs < row_count; brs++) {
            row.push({
                "plu":table.tBodies[0].rows[brs].cells[8].innerText,
                "obat":table.tBodies[0].rows[brs].cells[0].innerText,
                "jumlah":table.tBodies[0].rows[brs].cells[9].innerText,
                "aturanpakai":table.tBodies[0].rows[brs].cells[3].innerText,
                "satuan":table.tBodies[0].rows[brs].cells[2].innerText,
                "harga":hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                "subtotal":hapusRP(table.tBodies[0].rows[brs].cells[6].innerText),
                "keterangan":table.tBodies[0].rows[brs].cells[4].innerText
            });
        }
        return row;
    }

    function setNoResep() {
        let fulltoday=getDate("ddmmyyHHMMSS");
        let setNoResep="";
        $.ajax({
            async: false,
            url: "<?php echo base_url('resepobat/getLastNoReg');?>",
            dataType: "JSON",
            success: function (data) {
                if (data === null) {
                    setNoResep = 'RSPOK' +fulltoday+ "-1";
                } else {
                    let arrId = data.noresep.split('-');
                    let angka = arrId[1];
                    setNoResep = 'RSPOK' +fulltoday+'-'+(parseInt(angka) + 1);
                }
            }
        });
        return setNoResep;
    }

    function insertResepPasien(){
        console.log(setNoResep());
        let dokter=_("selectdokterlaboratorium").value;
        const table = _("tbl_tindakan");
        let row_count = table.tBodies[0].rows.length;
        if(dokter=="0000"){
             swal({
                title: "Dokter Pemberi Resep\nTidak Boleh Kosong",
                text: "Data Tidak Disimpan!",
                confirmButtonColor: "#EF5350",
                type: "error",
                onClose: _("selectdokterlaboratorium").focus()
            });
        }
        else if(row_count==0){
            swal({
                title: "Obat/BHP/Alkes Tidak Boleh Kosong",
                text: "Data Tidak Disimpan!",
                confirmButtonColor: "#EF5350",
                type: "error",
                onClose:_("selectobat").focus()
            });
        }else{
            swal({
                title: "Resep Obat/BHP/Alkes",
                text: "Apakah Yakin Kirim Resep?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#EF5350",
                confirmButtonText: "YA",
                cancelButtonText: "TIDAK",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm){
                if (isConfirm) {
                    let tglresep=getDate("yyyy-mm-dd HH:MM:SS");
                    let nodaftar=_("noregop").value;
                    let norm=_('norm').value;
                    let noresep=setNoResep();
                    let datatablevalue=getDataTableValue(table);
                    let response_value="";
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('resepobat/insertResep');?>",
                        data: {noresep:noresep,nodaftar:nodaftar,norm:norm,dokter:dokter,tglresep:tglresep,datatablevalue:datatablevalue},
                        success: function(data) {
                            console.log(data);
                            swal({
                                title: "Berhasil",
                                text: "Data Disimpan",
                                confirmButtonColor: "#66BB6A",
                                type: "success",
                                onClose:clearPermintaan()
                            });
                            
                        },
                        error: function(response) {
                            console.log(response);
                            swal({
                                title: "Gagal",
                                text: "Data Tidak Disimpan!",
                                confirmButtonColor: "#EF5350",
                                type: "error"
                            });
                        }
                    });                
                }
            });
        }    
    }

    function clearPermintaan(){
        $("#selectdokterlaboratorium").val("0000;-").trigger('change');
        _('tbl_tindakan').getElementsByTagName('tbody')[0].innerHTML="";
        _("subtotal").innerHTML='Rp. 0,00';
    }

    function clearForm(){
        _('norm').value="";
        $('#noregop').val("");
        $('#nama').val("");
        $('#tmptgllahir').val("");
        $('#umur').val("");
        $('#jk').val("");
        $('#alamat').val("");
        _("jenisop").innerHTML="";
        $('#dokterpengirim').val("");
        $('#noreg').val("");
        $('#tglreg').val("");
        _("instalasi").value="";
        $('#ruangpoli').val("");
        $('#kelas').val("");
        $('#penjamin').val("");
        $('#carabayar').val("");
        $('#tglregop').val("");
        $('#wktpesanop').val("");
        $('#keterangan').val("");
        $('#wktpelaksanaan').val("");
        _("selectdokterlaboratorium").disabled=true;
        $("#selectdokterlaboratorium").val("0000;-").trigger('change');
        _("btn_tambah").disabled = true;
        $("#selectobat").val("").trigger('change');
        _("selectobat").disabled = true;
        _("stokterserdia").value="";
        _("satuan").value="";
        _("harga").value="";
        _("dibutuhkan").value="";
        _("dibutuhkan").disabled=true;
        _("validasibutuh").innerHTML="";
        _("aturanpakai").value="";
        _("aturanpakai").disabled=true;
        _("keteranganresep").value="";
        _("keteranganresep").disabled=true;
        _('tbl_diagnosa').getElementsByTagName('tbody')[0].innerHTML="";
        var bodyRef = _('tbl_tindakan').getElementsByTagName('tbody')[0];
        bodyRef.innerHTML = '';
        _('tbl_riwayat_obat').getElementsByTagName('tbody')[0].innerHTML="";
        _('tbl_riwayat_resep').getElementsByTagName('tbody')[0].innerHTML="";
        _("subtotal").innerHTML='Rp. 0,00';
        _("btn_simpan").disabled=true;
        _("btn_batal").disabled=true;
    }

</script>
