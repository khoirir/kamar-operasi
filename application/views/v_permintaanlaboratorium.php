<!-- Main content -->
<div class="content-wrapper">

	<!-- Float buttons with text -->
	<div class="page-header page-header-default">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('dashboard')?>"><i class="icon-home2 position-left"></i> Beranda</a></li>
				<li class="active">Permintaan Laboratorium</li>
			</ul>
		</div>
	</div>
	<!-- /float buttons with text -->
	<!-- Content area -->
	<div class="content">

		<!-- Basic responsive configuration -->
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h6 class="panel-title">PERMINTAAN LABORATORIUM</h6>
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
                                <legend class="text-semibold"><i class="icon icon-microscope position-left" style="font-size:16px"></i>PERMINTAAN TINDAKAN LABORATORIUM</legend>
                                <div class="tabbable">
                                    <ul class="nav nav-pills nav-pills-bordered nav-justified">
                                        <li class="active"><a href="#basic-tab-tindakan" data-toggle="tab"><i class="icon icon-microscope position-left"></i>TINDAKAN LABORATORIUM</a></li>
                                        <li><a href="#basic-tab-riwayat" data-toggle="tab"><i class="fa fa-history position-left"></i>RIWAYAT</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic-tab-tindakan">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Dokter Pengirim</b></label>
                                                        <div class="col-lg-9" >
                                                            <select data-placeholder='' class='select-size-sm' id='selectdokterlaboratorium' disabled="disabled">
                                                                <?php foreach($dokter->result() as $data_dokter){?>
                                                                    <option value="<?php echo $data_dokter->kdPetugasMedis;?>"><?php echo $data_dokter->namapetugasMedis;?></option>
                                                                 <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Keterangan Klinis</b></label>
                                                        <div class="col-lg-9">
                                                            <textarea id="ketklinis" rows="1" cols="5" class="form-control text-uppercase" disabled="disabled" style="color:black"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Tindakan</b></label>
                                                        <div class="col-lg-9">
                                                        <?php
                                                            $priorGroup = "";
                                                            echo "<select data-placeholder='' class='select-size-sm select-clear' id='selecttindakan' disabled>";
                                                                    echo "<option></option>";
                                                                foreach ($tindakan->result() as $data_tindakan){
                                                                    if ($data_tindakan->kelas != $priorGroup){
                                                                        if ($priorGroup != ""){
                                                                            echo "</optgroup>";
                                                                        }
                                                                        echo "<optgroup label='{$data_tindakan->kelas}'>";
                                                                    }
                                                        ?>
                                                                    <option value='<?php echo $data_tindakan->kdTarif.";".$data_tindakan->tindakan.";Rp. ".number_format($data_tindakan->tarif,2,',','.').";".$data_tindakan->kelas.";".$data_tindakan->kdTindakan.";".$data_tindakan->kelompokTindakan;?>'>
                                                                        <?php echo $data_tindakan->tindakan." - Rp. ".number_format($data_tindakan->tarif,2,',','.')?>
                                                                    </option>
                                                        <?php
                                                                    $priorGroup = $data_tindakan->kelas;
                                                                }
                                                                echo "</optgroup></select>";
                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-lg-3">
                                                        <button id="btn_tambah" class='btn btn-primary btn-labeled' onclick="insertDataTable()" type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                    </div>
                                                </div>
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
                                                                            <th style="text-align:center">KODE</th>
                                                                            <th style="text-align:center">TINDAKAN</th>
                                                                            <th style="text-align:center; width:25px">JUMLAH</th>
                                                                            <th style="text-align:center">KELOMPOK TINDAKAN</th>
                                                                            <th style="text-align:center;">KELAS</th>
                                                                            <th style="text-align:center">TARIF</th>
                                                                            <th style="text-align:center">SUBTOTAL</th>
                                                                            <th style="text-align:center">AKSI</th>
                                                                            <th style="display: none">kode tarif</th>
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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-xs table-framed" id="tbl_tindakan_laboraturium">
                                                                    <thead>
                                                                        <tr style="background:#eee;">
                                                                            <th style="text-align:center">NO. REGISTRASI</th>
                                                                            <th style="text-align:center">TGL. REGISTRASI</th>
                                                                            <th style="text-align:center">DOKTER PENGIRIM</th>
                                                                            <th style="text-align:center">UNIT ASAL</th>
                                                                            <th style="text-align:center">KET. KLINIS</th>
                                                                            <th style="text-align:center">HASIL</th>
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
                    <button type="button" class="btn btn-success btn-labeled" id="btn_simpan" onclick="insertPermintaanLab()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
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
                                    <table class="table table-xs table-framed" id="tbl_detail_tindakan_laboraturium">
                                        <thead>
                                            <tr style="background:#eee;">
                                                <th style="text-align:center">NO.</th>
                                                <th style="text-align:center">TINDAKAN</th>
                                                <th style="text-align:center">JUMLAH</th>
                                                <th style="text-align:center;">KELAS</th>
                                                <th style="text-align:center">TARIF</th>
                                                <th style="text-align:center">SUBTOTAL</th>
                                                <th style="text-align:center">PETUGAS LAB.</th>
                                                <th style="text-align:center">STATUS TINDAKAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="4"></th>
                                                <th style="text-align:center;">TOTAL</th>
                                                <th id='subtotal_detail_tindakan' style="text-align:right">Rp. 0,00</th>
                                                <th></th>
                                                <th></th>
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
        height: 350px; 
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
                getRiwayatLab(data.norm);
                _("selectdokterlaboratorium").disabled = false;
                _("ketklinis").disabled=false;
                _("selecttindakan").disabled = false;
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

    function getRiwayatLab(norm){
        let table = _("tbl_tindakan_laboraturium");
        table.getElementsByTagName('tbody')[0].innerHTML = '';
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('permintaanlaboratorium/getRiwayatLab');?>",
            data:{norm:norm},
            dataType: "JSON",
            success: function (data) {
                if(data!=null){
                    let row_count = table.tBodies[0].rows.length;
                    for(let i=0; i<data.length; i++){
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let NOREGISTRASI = row_insert.insertCell(0);
                        let TGLREGISTRASI = row_insert.insertCell(1);
                        let DOKTERPENGIRIM = row_insert.insertCell(2);
                        let UNITASAL = row_insert.insertCell(3);
                        UNITASAL.style.textAlign="center";
                        let KETKLINIS = row_insert.insertCell(4);
                        let HASIL = row_insert.insertCell(5);
                        HASIL.style.textAlign="center";

                        NOREGISTRASI.innerHTML = data[i].noreg;
                        TGLREGISTRASI.innerHTML = formatTanggalData(data[i].tglreg);
                        DOKTERPENGIRIM.innerHTML = data[i].dokter;
                        UNITASAL.innerHTML = data[i].unitasal.toUpperCase();
                        KETKLINIS.innerHTML = data[i].ketklinis==null?"-":data[i].ketklinis.toUpperCase();
                        HASIL.innerHTML = "<a data-toggle='modal' data-target='#modal_riwayat_lab' onclick=\"getDetailRiwayatLab('"+data[i].noreg+"','"+data[i].notind+"');\"><button type='button' class='btn btn-info btn-rounded btn-labeled btn-xs'><b><i class='icon-file-eye'></i></b>LIHAT</button></a>";
                    }
                }
            }
        });
    }

    function getDetailRiwayatLab(noreg,notin){
        let table = _("tbl_detail_tindakan_laboraturium");
        table.getElementsByTagName('tbody')[0].innerHTML = '';
        _("title_detail_tindakan").innerHTML="DETAIL TINDAKAN LABORATORIUM - ("+noreg+")";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('permintaanlaboratorium/getDetailRiwayatLab');?>",
            data:{noreg:noreg,notin:notin},
            dataType: "JSON",
            success: function (data) {
                if(data!=null){
                    let totalakhir=0;
                    let row_count = table.tBodies[0].rows.length;
                    for(let i=0; i<data.length; i++){
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let NO = row_insert.insertCell(0);
                        NO.style.textAlign="center";
                        let TINDAKAN = row_insert.insertCell(1);
                        let JUMLAH = row_insert.insertCell(2);
                        JUMLAH.style.textAlign="center";
                        let KELAS = row_insert.insertCell(3);
                        KELAS.style.textAlign="center";
                        let TARIF = row_insert.insertCell(4);
                        TARIF.style.textAlign="right";
                        let SUBTOTAL = row_insert.insertCell(5);
                        SUBTOTAL.style.textAlign="right";
                        let PETUGAS = row_insert.insertCell(6);
                        let STATUS = row_insert.insertCell(7);
                        STATUS.style.textAlign="center";

                        NO.innerHTML = data.length-i;
                        TINDAKAN.innerHTML = data[i].tindakan;
                        JUMLAH.innerHTML = data[i].jml;
                        KELAS.innerHTML = data[i].kelas;
                        TARIF.innerHTML = tambahRP(data[i].tarif);
                        SUBTOTAL.innerHTML = tambahRP(data[i].subtotal);
                        PETUGAS.innerHTML = data[i].petugasmedis==null?"-":data[i].petugasmedis;
                        STATUS.innerHTML = data[i].statustindakan;
                        totalakhir+=parseInt(data[i].subtotal);
                    }
                    _("subtotal_detail_tindakan").innerHTML=tambahRP(totalakhir);
                }
            }
        });
    }

    function insertDataTable(){
        let table = _("tbl_tindakan");
        let row_count = table.tBodies[0].rows.length;
        let data=_("selecttindakan").value;
        if(data!==''){
            let data_array = data.split(';');
            let row_insert = table.tBodies[0].insertRow(row_count);
            let KODE = row_insert.insertCell(0);
            let TINDAKAN = row_insert.insertCell(1);
            let JMLTINDAKAN = row_insert.insertCell(2);
            let KELOMPOKTINDAKAN = row_insert.insertCell(3);
            KELOMPOKTINDAKAN.style.textAlign="center";
            let KELAS = row_insert.insertCell(4);
            KELAS.style.textAlign="center";
            let TARIF = row_insert.insertCell(5);
            TARIF.style.textAlign="right";
            let SUBTOTAL = row_insert.insertCell(6);
            SUBTOTAL.style.textAlign="right";
            let AKSI = row_insert.insertCell(7);
            AKSI.style.textAlign="CENTER";
            let KODETARIF = row_insert.insertCell(8);
            KODETARIF.style.display="none";
            let HIDDENJML = row_insert.insertCell(9);
            HIDDENJML.style.display="none";

            KODE.innerHTML = data_array[4];
            TINDAKAN.innerHTML = data_array[1];
            JMLTINDAKAN.innerHTML = "<input type='number' onpaste='return false' onwheel=\"blur();\" onchange=\"hitungSubtotal(this);\" class='form-control' min='1' value='1' step='1' style='text-align:center;' onkeydown='return false'>";
            KELOMPOKTINDAKAN.innerHTML = data_array[5];
            KELAS.innerHTML = data_array[3];
            TARIF.innerHTML = data_array[2];
            SUBTOTAL.innerHTML = data_array[2];
            AKSI.innerHTML = "<button type='button' onclick=\"hapusTindakan(this);\" class='btn btn-danger btn-rounded btn-labeled btn-xs'><b><i class='glyphicon glyphicon-trash'></i></b>HAPUS</button>";
            KODETARIF.innerHTML = data_array[0];
            HIDDENJML.innerHTML='1';
            $("#selecttindakan").val("").trigger('change');
            _("subtotal").innerHTML=subTotal();
        }else{
            swal({
                title: "Gagal",
                text: "Silahkan Pilih Tindakan!",
                confirmButtonColor: "#EF5350",
                type: "error"
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
            title: "Batal Permintaan Laboratorium",
            text: "Apakah Yakin Batal Isi Permintaan Laboratorium?",
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
                "kodetarif":table.tBodies[0].rows[brs].cells[8].innerText,
                "tindakan":table.tBodies[0].rows[brs].cells[1].innerText,
                "tarif":hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                "subtotaltindakan":hapusRP(table.tBodies[0].rows[brs].cells[6].innerText),
                "jmltindakan":table.tBodies[0].rows[brs].cells[9].innerText
            });
        }
        return row;
    }

    function setNoRegistrasiLab() {
        let fulltoday=getDate("ddmmyyHHMMSS");
        let setNoRegLab="";
        let setNoTinLab="";
        let setNo="";
        let instalasi=_("instalasi").value;
        let insta="";
        if(instalasi=="rajal"){
            insta="RJLAB";
        }else if(instalasi=="ranap"){
            insta="RILAB";
        }
        let tind="TLAB";
        $.ajax({
            type: "post",
            async: false,
            url: "<?php echo base_url('permintaanlaboratorium/getLastNoReg');?>",
            data:{instalasi:instalasi},
            dataType: "JSON",
            success: function (data) {
                if (data === null) {
                    setNoRegLab = insta +fulltoday+ "-1";
                    setNoTinLab = tind +fulltoday+ "-1";
                    setNo=setNoRegLab+";"+setNoTinLab;
                } else {
                    let arrId = data["noreg"].noreg.split('-');
                    let angka = arrId[1];
                    setNoRegLab = insta +fulltoday+'-'+(parseInt(angka) + 1);
                    let arrIdTin = data["notindakan"].notin.split('-');
                    let angkaTin = arrIdTin[1];
                    setNoTinLab = tind +fulltoday+'-'+(parseInt(angkaTin) + 1);
                    setNo=setNoRegLab+";"+setNoTinLab;
                }
            }
        });
        return setNo;
    }

    function insertPermintaanLab(){
        let instalasi=_("instalasi").value;
        let ketklinis=_("ketklinis").value;
        let dokterlab=_("selectdokterlaboratorium").value;
        const table = _("tbl_tindakan");
        let row_count = table.tBodies[0].rows.length;
        if(dokterlab=="0000"){
             swal({
                title: "Dokter Pengirim Permintaan Laboratorium\nTidak Boleh Kosong",
                text: "Data Tidak Disimpan!",
                confirmButtonColor: "#EF5350",
                type: "error",
                onClose: _("selectdokterlaboratorium").focus()
            });
        }
        else if(ketklinis==""){
             swal({
                title: "Keterangan Klinis Tidak Boleh Kosong",
                text: "Data Tidak Disimpan!",
                confirmButtonColor: "#EF5350",
                type: "error",
                onClose: _("ketklinis").focus()
            });
        }
        else if(row_count==0){
            swal({
                title: "Tindakan Tidak Boleh Kosong",
                text: "Data Tidak Disimpan!",
                confirmButtonColor: "#EF5350",
                type: "error"
            });
        }else{
            swal({
                title: "Permintaan Laboratorium",
                text: "Apakah Yakin Kirim Permintaan Laboratorium?",
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
                    let tglmasuklab=getDate("yyyy-mm-dd HH:MM:SS");
                    let nodaftar=_("noreg").value;
                    let nomor=setNoRegistrasiLab();
                    let noregistrasilab=nomor.split(";")[0];
                    let notinlab=nomor.split(";")[1];
                    let totaltindakan=hapusRP(_("subtotal").innerText);
                    let datatablevalue=getDataTableValue(table);
                    let response_value="";
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('permintaanlaboratorium/insertPermintaanLab');?>",
                        data: {instalasi:instalasi,noregistrasilab:noregistrasilab,nodaftar:nodaftar,tglmasuklab:tglmasuklab,dokterlab:dokterlab,ketklinis:ketklinis,notinlab:notinlab,totaltindakan:totaltindakan,datatablevalue:datatablevalue},
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
        _("ketklinis").value="";
        _('tbl_tindakan').getElementsByTagName('tbody')[0].innerHTML="";
        getRiwayatLab(_("norm").value);
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
        _("ketklinis").value="";
        _("ketklinis").disabled=true;
        _("btn_tambah").disabled = true;
        $("#selecttindakan").val("").trigger('change');
        _("selecttindakan").disabled = true;
        _('tbl_diagnosa').getElementsByTagName('tbody')[0].innerHTML="";
        var bodyRef = _('tbl_tindakan').getElementsByTagName('tbody')[0];
        bodyRef.innerHTML = '';
        _('tbl_tindakan_laboraturium').getElementsByTagName('tbody')[0].innerHTML="";
        _("subtotal").innerHTML='Rp. 0,00';
        _("btn_simpan").disabled=true;
        _("btn_batal").disabled=true;
    }

</script>
