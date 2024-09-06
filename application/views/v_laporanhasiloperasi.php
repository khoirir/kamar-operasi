<!-- Main content -->
<div class="content-wrapper">

	<!-- Float buttons with text -->
	<div class="page-header page-header-default">
		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('dashboard')?>"><i class="icon-home2 position-left"></i> Beranda</a></li>
				<li class="active">Hasil Operasi</li>
                <li class="active">Laporan Hasil Operasi</li>
			</ul>
		</div>
	</div>
	<!-- /float buttons with text -->
	<!-- Content area -->
	<div class="content">

		<!-- Basic responsive configuration -->
        <div class="panel panel-warning">
            <div class="panel-heading" >
                <h6 class="panel-title">LAPORAN HASIL OPERASI</h6>
            </div>

            <form role="form" class="form-horizontal" id="form_laporan">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <legend class="text-semibold"><i class="fa fa-wheelchair position-left" style="font-size:16px"></i>PASIEN</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label"><b>No. RM</b></label>
                                            <div class="col-lg-3">
                                                <input id="norm" name="norm" type="text" class="form-control" style="color:black" disabled="disabled">
                                                <input type="hidden" id="get_norm" value="<?php echo (!empty($pasien->norm) ? $pasien->norm:"");?>">
                                                <input type="hidden" id="get_noregop" value="<?php echo (!empty($pasien->noregistrasiop) ? $pasien->noregistrasiop:"");?>">
                                                <input id="statusop" type="hidden" class="form-control" style="color:black" name="statusop">
                                            </div>
                                            <div class="col-lg-2">
                                                <a data-toggle='modal' data-target='#modal_data_pasien'><button type="button" class="btn btn-info btn-labeled" onclick="tampilDataPasien()"><b><i class="icon-search4"></i></b>CARI PASIEN</button></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label"><b>Nama / Jenis Kelamin</b></label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <input id="nama" type="text" class="form-control" style="color:black" disabled="disabled">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input id="jk" type="text" class="form-control" style="color:black" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label"><b>Tgl. Lahir / Umur</b></label>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <input id="tgllahir" type="text" class="form-control" style="color:black" disabled="disabled">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input id="umur" type="text" class="form-control" style="color:black" disabled="disabled">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label"><b>Alamat</b></label>
                                            <div class="col-lg-9">
                                                <textarea id="alamat" rows="2" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="nohasiloperasi" name="nohasiloperasi" type="hidden" class="form-control" style="color:black"><input id="noregop" name="noregop" type="hidden" class="form-control" style="color:black">
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-12">
                            <legend class="text-semibold"><i class="icon-pencil7 position-left" style="font-size:16px"></i>HASIL OPERASI</legend>
                        </div>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-pills nav-pills-bordered nav-justified">
                            <li id="tab-upload" style="pointer-events: none" onclick="showFunc(this)"><a href="#basic-tab-upload" data-toggle="tab"><i class="icon-file-upload2 position-left"></i><button onMouseDown="closeTabPane(this)" class="close closeTab" type="button" value="upload">×</button>UPLOAD HASIL</a></li>
                            <li id="tab-isi" style="pointer-events: none" onclick="showFunc(this)"><a href="#basic-tab-isi" data-toggle="tab"><i class="icon-pencil position-left"></i><button onMouseDown="closeTabPane(this)" class="close closeTab" type="button" value="isi">×</button>ISI FORM HASIL</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="basic-tab-upload">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <input type="file" name="file_upload[]" id="file_upload" class="file-input" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true" accept=".jpg, .jpeg, .png, .pdf">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <legend class="text-semibold"></legend>
                                        <button type="button" style="float: right;" class="btn btn-success btn-labeled" id="btn_simpan" disabled="disabled" onclick="uploadHasil()"><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <legend class="text-semibold"></legend>
                                    </div>
                                </div>
                            </div>
                   <!--  <div class="row">
                        <button type="button" class="btn btn-success btn-labeled" id="btn_reset" onclick="removeActive()"><b><i class="glyphicon glyphicon-floppy-saved"></i></b>RESET</button>
                    </div> -->
                            <div class="tab-pane" id="basic-tab-isi">
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend class="text-semibold"><i class="fa fa-user-md position-left" style="font-size:16px"></i>PELAKSANA OPERASI</legend>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Dokter Operator</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="dokterop" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>     
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Asisten Operasi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="asistenop" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>         
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Perawat Instrument</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="instrumentir" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Dokter Anestesi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="dokteranestesi" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Asisten Anestesi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="asistenanestesi" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>       
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Perawat Sirkuler</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="sirkuler" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Radiografer</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="radiografer" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend class="text-semibold"><i class="fa fa-heartbeat position-left" style="font-size:16px"></i>TINDAKAN OPERASI</legend>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Diagnosa Pra Bedah</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="diagnosapra" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Diagnosa Pasca Bedah</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="diagnosapasca" rows="1" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Jaringan yang di-eksisi / -insisi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="jaringan" rows="1" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Dikirim untuk Pemeriksaan PA</b></label>
                                                        <div class="col-lg-6" >
                                                            <div class="row">
                                                                <div class="col-lg-6" >
                                                                    <label class="radio-inline"><input type="radio" id="radioya" name="radio-inline-left" class="styled" disabled="disabled">YA</label>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-lg-6" >
                                                                    <label class="radio-inline"><input type="radio" id="radiotidak" name="radio-inline-left" class="styled" disabled="disabled">TIDAK</label> 
                                                                </div>     
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Nama/Macam Operasi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="macamop" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Jenis Anestesi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="jenisanestesi" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend class="text-semibold"><i class="glyphicon glyphicon-time position-left" style="font-size:16px"></i>WAKTU PELAKSANAAN OPERASI</legend>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Tgl. Operasi</b></label>
                                                        <div class="col-lg-6" >
                                                            <input id="tglop" type="text" class="form-control" style="color:black" disabled="disabled">  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Operasi Mulai</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="opmulai" type="time" class="form-control" style="color:black" disabled="disabled" required="required">       
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Operasi Selesai</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="opselesai" type="time" class="form-control" style="color:black" disabled="disabled" required="required">      
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Lama Operasi</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="lamaop" type="text" class="form-control" style="color:black" disabled="disabled">    
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Pembiusan Mulai</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="biusmulai" type="time" class="form-control" style="color:black" disabled="disabled" required="required">       
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Pembiusan Selesai</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="biusselesai" type="time" class="form-control" style="color:black" disabled="disabled" required="required">       
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Lama Pembiusan</b></label>
                                                        <div class="col-lg-9" >
                                                            <input id="lamabius" type="text" class="form-control" style="color:black" disabled="disabled">      
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <legend class="text-semibold"><i class="icon-clipboard3 position-left" style="font-size:16px"></i>LAPORAN OPERASI</legend>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Laporan Operasi</b></label>
                                                        <div class="col-lg-12" >
                                                            <textarea id="laporanoperasi" rows="3" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Jumlah Pendarahan</b></label>
                                                        <div class="col-lg-6" >
                                                            <input id="jmlpendarahan" type="text" class="form-control" style="color:black" disabled="disabled">       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Komplikasi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="komplikasi" rows="1" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Pemakaian Implan</b></label>
                                                        <div class="col-lg-9">
                                                            <textarea id="pakaiimplan" rows="1" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label"><b>Instruksi Post Operasi</b></label>
                                                        <div class="col-lg-9" >
                                                            <textarea id="instruksipostop" rows="1" cols="5" class="form-control" style="color:black" disabled="disabled"></textarea>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <legend class="text-semibold"></legend>
                                        <button type="button" style="float: right;" class="btn btn-success btn-labeled" id="btn_simpan2" disabled="disabled" onclick="simpanLaporanOperasi()"><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <legend class="text-semibold"></legend>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col-md-12">
                            <legend class="text-semibold"><i class="icon-clipboard3 position-left" style="font-size:16px;"></i>LAPORAN HASIL OPERASI</legend>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-xs table-framed table-bordered" id="tbl_laporanoperasi">
                                    <thead>
                                        <tr style="background:#eee;">
                                            <th class="col-lg-4" style="text-align:center">LAPORAN OPERASI</th>
                                            <th class="col-lg-2" style="text-align:center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <legend class="text-semibold"><i class="icon-clipboard3 position-left" style="font-size:16px;"></i>LAPORAN HASIL OPERASI</legend> 
                    <div class="table-responsive pre-scrollable">
                        <table class="table table-xs" id="tbl_laporanoperasi">
                            <thead>
                                <tr>
                                    <th class="col-lg-4" style="text-align:center">Laporan Operasi</th>
                                    <th class="col-lg-2" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <hr> -->
                    <button type="button" class="btn btn-info btn-labeled" id="btn_cetak" disabled="disabled" onclick="cetakHasilOperasi()" style="display: none"><b><i class="icon-printer2"></i></b>CETAK HASIL</button>
                    <div class="form-group">
                        <input placeholder="Nama File Hasil" id="filehasil" name="filehasil" class="form-control" type="hidden">
                        <div class="col-lg-12" id="iframehasil"></div>
                    </div>
                </div>
            </form>
            <div id="modal_form_horizontal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title" id="title_modal"></h5>
                        </div>

                        <form action="#" class="form-horizontal">
                            <div class="modal-body">
                                <iframe id="framehasil" src="" width="100%" height="500px"></iframe>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
    $(document).ready(getDetailPasien($('#get_noregop').val()));
    function caripasien(id,event){
        let kode = event.which || event.keyCode;
        if(kode==13){
            let norm=$(id).val();
            let norm0='00000000';
            let getNorm0=norm0.substring(0,(norm0.length-norm.length));
            id.value=getNorm0+norm;
            if(norm!==''){
                getDetailPasien(getNorm0+norm);
            }
        }else if(kode === 8||kode===46){
            if(_('nama').value!=''){
                clearForm();
            }
        }else{
            if(id.value.length>8){
                id.value=id.value.substring(0,8);
            }
            return $('#norm').val($('#norm').val().replace(/[^0-9]+/g,''));
        }
        // console.log(isNumeric(_(id.id).value));
    }
    // $("#norm").on('keyup', function (e) {
    //     if (e.keyCode === 13) {
    //         let norm=$('#norm').val();
    //         if(norm!==''){
    //             getDetailPasien(norm);
    //         }
    //     }else if(e.keyCode === 8||e.keyCode===46){
    //         clearForm();
    //     }else{
    //         return $('#norm').val($('#norm').val().replace(/[^0-9]+/g,''));
    //     }
    //     return false;
    // });

    

    // function resetInput(){
    //     $('#file_upload').reset();

    //     // _("file_upload").value="";
    //     // alert("oke");
    // }

    function tampilDataPasien () {
        $('#data_pasien').dataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "order": [[8, 'ASC']], 
            "ajax": {
                "url": "<?php echo base_url('permintaanselesaitindakan/permintaanList') ?>",
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
                    "data":"noregistrasiop"
                }, {
                    "data": "norm"
                }, {
                    "data": "namapasien"
                }, {
                    "render": function (data, type, row) {
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
                        var html = "";
                        if (row.jenisop === "ELEKTIF") {
                            html = "<span class='label label-info' style='width:50px'>" + row.jenisop +"</span>";
                        } else {
                            html = "<span class='label label-danger' style='width:50px'>" + row.jenisop + "</span>";
                        }
                        return html;
                    }
                }, {
                    "render": function (data,type,row){
                        return formatTanggalData(row.tglpermintaanop);
                    }
                }, {
                    "render": function (data,type,row){
                        return formatTanggalData(row.tgljadwalop);
                    }
                }, {
                    "render": function (data, type, row) {
                        var noregistrasi=row.noregistrasiop;
                        var norm=row.norm;
                        var waktupelaksanaan=row.tgljadwalop;
                        var html = "<button type='button' class='btn btn-primary btn-rounded btn-labeled btn-xs' onclick=\"getDetailPasien('"+noregistrasi+"')\" data-dismiss='modal'><b><i class='icon-checkmark4'></i></b>PILIH</button>";
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
        if(noregop!==""){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('laporanhasiloperasi/getDataLaporan');?>",
                data:{noregop:noregop},
                dataType: "JSON",
                success: function (data) {
                    $('#noregop').val(data['pasien'].noregistrasiop);
                    $('#statusop').val(data['pasien'].statusop);
                    $('#norm').val(data['pasien'].norm);
                    _('get_norm').value=data['pasien'].norm;
                    $('#nama').val(data['pasien'].namapasien);
                    $('#tgllahir').val(data['pasien'].tgllahir);
                    $('#umur').val(hitungUmur(data['pasien'].tgllahir));
                    $('#jk').val(jklengkap(data['pasien'].jk));
                    $('#alamat').val(data['pasien'].alamat);
                    // $('#diagnosapra').val(data['pasien'].diagnosapreop.toUpperCase());

                    if(data['operator'].dokterOP!=null){
                        let data_dokter = data['operator'].dokterOP.split(';');
                        let list_dokter='';
                        for(let i=1; i<data_dokter.length; i++){
                            list_dokter +='\n-  '+data_dokter[i];
                        }
                        $('#dokterop').val(list_dokter.substring(1));
                    }else{
                        $('#dokterop').val('-'); 
                    }

                    if(data['operator'].timOP!=null){
                        let data_timop = data['operator'].timOP.split(';');
                        let list_timop='';
                        for(let i=1; i<data_timop.length; i++){
                            list_timop +='\n-  '+data_timop[i];
                        }
                        $('#asistenop').val(list_timop.substring(1));
                    }else{
                        $('#asistenop').val('-'); 
                    }

                    if(data['operator'].perawatInstrument!=null){
                        let data_instrumentir = data['operator'].perawatInstrument.split(';');
                        let list_instrumentir='';
                        for(let i=1; i<data_instrumentir.length; i++){
                            list_instrumentir +='\n-  '+data_instrumentir[i];
                        }
                        $('#instrumentir').val(list_instrumentir.substring(1));
                    }else{
                       $('#instrumentir').val('-'); 
                    }

                    if(data['operator'].dokterAnestesi!=null){
                        let data_dokteranestesi = data['operator'].dokterAnestesi.split(';');
                        let list_dokteranestesi='';
                        for(let i=1; i<data_dokteranestesi.length; i++){
                            list_dokteranestesi +='\n-  '+data_dokteranestesi[i];
                        }
                        $('#dokteranestesi').val(list_dokteranestesi.substring(1));
                    }else{
                       $('#dokteranestesi').val('-'); 
                    }

                    if(data['operator'].asistenAnestesi!=null){
                        let data_asistenanestesi = data['operator'].asistenAnestesi.split(';');
                        let list_asistenanestesi='';
                        for(let i=1; i<data_asistenanestesi.length; i++){
                            list_asistenanestesi +='\n-  '+data_asistenanestesi[i];
                        }
                        $('#asistenanestesi').val(list_asistenanestesi.substring(1));
                    }else{
                       $('#asistenanestesi').val('-'); 
                    }

                    if(data['operator'].perawatSirkuler!=null){
                        let data_sirkuler = data['operator'].perawatSirkuler.split(';');
                        let list_sirkuler='';
                        for(let i=1; i<data_sirkuler.length; i++){
                            list_sirkuler +='\n-  '+data_sirkuler[i];
                        }
                        $('#sirkuler').val(list_sirkuler.substring(1));
                    }else{
                       $('#sirkuler').val('-'); 
                    }

                    if(data['operator'].radiografer!=null){
                        let data_radiografer = data['operator'].radiografer.split(';');
                        let list_radiografer='';
                        for(let i=1; i<data_radiografer.length; i++){
                            list_radiografer +='\n-  '+data_radiografer[i];
                        }
                        $('#radiografer').val(list_radiografer.substring(1));
                    }else{
                       $('#radiografer').val('-'); 
                    }

                    if(data['operator'].jenisAnestesi!=null){
                        let data_jenisanestesi = data['operator'].jenisAnestesi.split(';');
                        let list_jenisanestesi='';
                        for(let i=1; i<data_jenisanestesi.length; i++){
                            list_jenisanestesi +='\n-  '+data_jenisanestesi[i];
                        }
                        $('#jenisanestesi').val(list_jenisanestesi.substring(1));
                    }else{
                       $('#jenisanestesi').val('-'); 
                    }

                    $('#tglop').val(data['operator'].tglTindakan.substring(0,10));
                    $('#opmulai').val(data['operator'].tglTindakan.substring(11,16));
                    $('#biusmulai').val(data['operator'].tglTindakan.substring(11,16));

                    let data_tindakan = data['tindakan'];
                    let list_tindakan='';
                    for(let i=0; i<data_tindakan.length; i++){
                        list_tindakan +='\n-  '+data_tindakan[i].tindakan;
                    }
                    $('#macamop').val(list_tindakan.substring(1));

                                // _nm("radio-jenis")[0].disabled=false;
                                // _nm("radio-jenis")[1].disabled=false;
                    _("diagnosapasca").disabled = false;
                    _("jaringan").disabled = false;
                    _("radioya").disabled = false;
                    _("radiotidak").checked=true;
                    _("radiotidak").disabled = false;
                    _("opmulai").disabled = false;
                    _("opselesai").disabled = false;
                    _("biusmulai").disabled = false;
                    _("biusselesai").disabled = false;
                    _("laporanoperasi").disabled = false;
                    _("jmlpendarahan").disabled = false;
                    _("komplikasi").disabled = false;
                    _("pakaiimplan").disabled = false;
                    _("instruksipostop").disabled = false;
                    _("tab-upload").style="pointer-events: block";
                    _("tab-isi").style="pointer-events: block";

                    if(data['hasiloperasi']!=null){
                        _('norm').value=_('get_norm').value;
                        $('#nohasiloperasi').val(data['hasiloperasi'].nohasilop);
                        if(data['hasiloperasi'].opmulai==null){
                            _("tab-upload").className="active";
                            _("basic-tab-upload").className="active";
                            $("#tab-isi").removeClass("active");
                            $("#basic-tab-isi").removeClass("active");
                            _("tab-isi").style="pointer-events: none";
                            _("filehasil").value=data['hasiloperasi'].hasilop;
                            insertDataTable();
                        }else{
                            $("#tab-upload").removeClass("active");
                            $("#basic-tab-upload").removeClass("active");
                            _("tab-upload").style="pointer-events: none";
                            _("tab-isi").className="active";
                            _("basic-tab-isi").className="active";
                            
                            $('#tglop').val(data['hasiloperasi'].tglop);
                            $('#opmulai').val(data['hasiloperasi'].opmulai.substring(0,5));
                            $('#opselesai').val(data['hasiloperasi'].opselesai.substring(0,5));
                            $('#biusmulai').val(data['hasiloperasi'].biusmulai.substring(0,5));
                            $('#biusselesai').val(data['hasiloperasi'].biusselesai.substring(0,5));
                            $('#diagnosapasca').val(data['hasiloperasi'].diagnosapost);
                            $('#jaringan').val(data['hasiloperasi'].jaringan);
                            $('#laporanoperasi').val(data['hasiloperasi'].laporan);
                            $('#jmlpendarahan').val(data['hasiloperasi'].jmlpendarahan);
                            $('#komplikasi').val(data['hasiloperasi'].komplikasi);
                            $('#pakaiimplan').val(data['hasiloperasi'].pakaiimplan);
                            $('#instruksipostop').val(data['hasiloperasi'].instruksipost);
                            let pemeriksaanpa=data['hasiloperasi'].pemeriksaanpa;
                            if(pemeriksaanpa=='YA'){
                                _("radiotidak").checked=false;
                                _("radioya").checked=true;
                            }else{
                                ("radiotidak").checked=true;
                                _("radioya").checked=false;
                            }
                        }
                    }
                    _("btn_simpan").disabled = false;
                    _("btn_simpan2").disabled = false;
                    data['pasien'].statusop=='1'?_("btn_cetak").disabled = false:_("btn_cetak").disabled = true;
                    window.history.pushState("", "", '/simrs_ok/laporanhasiloperasi');
                            
                }
            });
        }
    }
    function showFunc(el){
        if($(el).attr('id')=="tab-upload"){
            $("#basic-tab-upload").show();
            $("#basic-tab-isi").hide();
        }else if($(el).attr('id')=="tab-isi"){
            $("#basic-tab-isi").show();
            $("#basic-tab-upload").hide();
        }
    }

    function closeTabPane(el){
        if($(el).val()=="upload"){
            console.log("upload");
            $("#basic-tab-upload").hide();
            $("#tab-upload").removeClass("active");
        }else if($(el).val()=="isi"){
            console.log("isi");
            $("#basic-tab-isi").hide();
            $("#tab-isi").removeClass("active");
        }
    }

    function getStatusBayar(noregop){
        let statusbayar='';
        $.ajax({
            type:"POST",
            async:false,
            url:"<?php echo base_url('laporanhasiloperasi/getStatusBayar')?>",
            data:{noregop:noregop},
            dataType: "JSON",
            success:function(data){
                statusbayar=data.statusbayar;
            },
        });
        return statusbayar;
    }

    function setNoHasilOperasi() {
        let today = getDate("yymmdd");
        let fulltoday=getDate("yymmddHHMMSS");
        let setNoHasilOP=null;
        $.ajax({
            type: "GET",
            async: false,
            url: "<?php echo base_url('laporanhasiloperasi/getLastNoHasilOperasi');?>",
            dataType: "JSON",
            success: function (data) {
                if (data === null) {
                    setNoHasilOP = "HOP" +fulltoday+ "-1";
                } else {
                    if (data.getdatesql===today) {
                        let arrId = data.nohasilop.split('-');
                        let angka = arrId[1];
                        setNoHasilOP = "HOP" +fulltoday+'-'+(parseInt(angka) + 1);
                    } else {
                        setNoHasilOP = "HOP" +fulltoday+ "-1";
                    }
                }
            }
        });
        return setNoHasilOP;
    }

    function uploadHasil(){
        _('nohasiloperasi').value=_('statusop').value=="0"?setNoHasilOperasi():_('nohasiloperasi').value;
        let form = $("#form_laporan")[0];
        let data = new FormData(form);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('laporanhasiloperasi/uploadHasil')?>",
            data: data,
            cache:false,
            processData: false,
            contentType: false,
            dataType: "JSON",
            success:function(data){
                console.log(data);
                swal({
                    title: "Berhasil",
                    text: "Data Disimpan",
                    confirmButtonColor: "#66BB6A",
                    type: "success",
                    onClose:onCloseSwal("upload",data['filehasil'])
                });
            },error: function(response){
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

    function simpanLaporanOperasi(){
            let nohasilop=$('#nohasiloperasi').val()==''?setNoHasilOperasi():$('#nohasiloperasi').val();
            let noregop=$('#noregop').val();
            let diagnosapostop=$('#diagnosapasca').val();
            let jaringaneksisiinsisi=$('#jaringan').val();
            let pemeriksaanpa=_('radiotidak').checked===true?"TIDAK":"YA";
            let tglop = new Date($('#tglop').val().replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3"));
            let dd = String(tglop.getDate()).padStart(2, '0');
            let mm = String(tglop.getMonth() + 1).padStart(2, '0');
            let yy = tglop.getFullYear().toString();
            let operasimulai=yy+'-'+mm+'-'+dd+" "+_('opmulai').value+':00';
            let operasiselesai=yy+'-'+mm+'-'+dd+" "+_('opselesai').value+':00';
            let pembiusanmulai=yy+'-'+mm+'-'+dd+" "+_('biusmulai').value+':00';
            let pembiusanselesai=yy+'-'+mm+'-'+dd+" "+_('biusselesai').value+':00';
            let laporan=$('#laporanoperasi').val();
            let jmlpendarahan=$('#jmlpendarahan').val();
            let komplikasi=$('#komplikasi').val();
            let instruksipostop=$('#instruksipostop').val();
            let pemakaianimplan=$('#pakaiimplan').val();
            let statusop=$('#statusop').val();
            var tglpelaksanaanop=$('#tglpelaksanaanop').val();
            var opmulai=_("opmulai").value;
            var opselesai=_("opselesai").value;
            var biusmulai=_("biusmulai").value;
            var biusselesai=_("biusselesai").value;
            if(opmulai==''){
                swal({
                    title: "Gagal Disimpan",
                    text: "Jam Operasi Mulai\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            }else if(opselesai==''){
                swal({
                    title: "Gagal Disimpan",
                    text: "Jam Operasi Selesai\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            }else if(biusmulai==''){
                swal({
                    title: "Gagal Disimpan",
                    text: "Jam Pembiusan Mulai\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            }else if(biusselesai==''){
                swal({
                    title: "Gagal Disimpan",
                    text: "Jam Pembiusan Selesai\nTidak Boleh Kosong",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            }else{
                if(getStatusBayar(noregop)!='LUNAS'){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('laporanhasiloperasi/insertLaporanHasilOperasi');?>",
                        data: {nohasilop:nohasilop,noregop:noregop,diagnosapostop:diagnosapostop,jaringaneksisiinsisi:jaringaneksisiinsisi,pemeriksaanpa:pemeriksaanpa,operasimulai:operasimulai,operasiselesai:operasiselesai,pembiusanmulai:pembiusanmulai,pembiusanselesai:pembiusanselesai,laporan:laporan,jmlpendarahan:jmlpendarahan,komplikasi:komplikasi,instruksipostop:instruksipostop,pemakaianimplan:pemakaianimplan,statusop:statusop},
                        success: function(data) {
                            console.log(data);
                            swal({
                                title: "Berhasil",
                                text: "Data Disimpan",
                                confirmButtonColor: "#66BB6A",
                                type: "success",
                                onClose:onCloseSwal("input",data)
                            });
                            
                        },
                        error: function(data) {
                            console.log(data);
                            swal({
                                title: "Gagal",
                                text: "Data Tidak Disimpan!",
                                confirmButtonColor: "#EF5350",
                                type: "error"
                            });
                        }
                    });
                }
                else{
                    swal({
                        title: "Gagal Edit Hasil",
                        text: "Status Pembayaran LUNAS,\nTidak Dapat Dilakukan Edit Hasil!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose:clearForm()
                    });
                }
            }
        
        return false;
    }

    function onCloseSwal(jenis,data){
        _('norm').value=_('get_norm').value;
        setCount();
        _('statusop').value='1';
        _("btn_cetak").disabled = false;
        if(jenis=="upload"){
            _('filehasil').value=data;
            insertDataTable();
            $("#file_upload").val("").trigger('change');
            $("#tab-upload").className="active";
            $("#basic-tab-upload").removeClass("active");
            $("#tab-isi").removeClass("active");
            $("#basic-tab-isi").removeClass("active");
            _("tab-isi").style="pointer-events: none";
        }else{
            _("tab-isi").className="active";
            _("basic-tab-isi").className="active";
            _("tab-upload").style="pointer-events: none";
        }
    }

    function insertDataTable(){
        let table = _("tbl_laporanoperasi");
        let row_count = table.tBodies[0].rows.length;
        let data=_("filehasil").value;
        if(data!==''){
            let bodyRef = _('tbl_laporanoperasi').getElementsByTagName('tbody')[0];
            bodyRef.innerHTML = '';
            let data_array = data.split(';');
            for(let i=1;i<data_array.length;i++){
                let row_insert = table.tBodies[0].insertRow(i-1);
                let LAPORAN = row_insert.insertCell(0);
                let AKSI = row_insert.insertCell(1);
                AKSI.style.textAlign="center";

                LAPORAN.innerHTML = "Laporan Operasi "+i;
                AKSI.innerHTML = "<a data-toggle='modal' data-target='#modal_form_horizontal' onclick=\"tampilLaporan('"+i+"','"+data_array[i]+"');\"><button type='button' class='btn btn-info btn-rounded btn-labeled btn-xs'><b><i class='icon-file-eye'></i></b>LIHAT</button></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type='button' onclick=\"hapusLaporan('"+i+"','"+data_array[i]+"');\" class='btn btn-danger btn-rounded btn-labeled btn-xs'><b><i class='glyphicon glyphicon-trash'></i></b>HAPUS</button>";
            }
        }else{
            _("tab-isi").style="pointer-events: block";
            let bodyRef = _('tbl_laporanoperasi').getElementsByTagName('tbody')[0];
            bodyRef.innerHTML = '';
        }
    }

    function tampilLaporan(nomor,file) {
        _("title_modal").innerHTML="LAPORAN OPERASI "+nomor;
       _("framehasil").src = "<?php echo base_url();?>template/file_upload/"+file;
    }

    function hapusLaporan(nomor,file){
        swal({
            title: "Hapus Laporan Operasi "+nomor,
            text: "Apakah Yakin Dihapus?",
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
                let nohasilop=_('nohasiloperasi').value;
                let hasilop=_('filehasil').value.replace(';'+file,'');
                $.ajax({
                    url: '<?php echo base_url('laporanhasiloperasi/hapusLaporan');?>',
                    type: "POST",
                    data: {'file' : "<?php echo './template/file_upload/'?>" + file ,nohasilop:nohasilop,hasilop:hasilop},
                    dataType:"JSON",
                    success: function (response) {
                        console.log(response);
                        _("filehasil").value=hasilop;
                        insertDataTable();
                    },
                    error: function (response) {
                         console.log(response);
                    }
                });
            }
        });   
    }

    function cetakHasilOperasi(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200){
                   alert(xmlhttp.responseText);
                   console.log(xmlhttp.responseText);// you will see OKKK in console
             }
        }
        let nohasilop=$('#nohasiloperasi').val();
        xmlhttp.open("GET","<?= base_url(); ?>" + "/semuapermintaan/cetakLaporanOperasi/"+nohasilop,true);
        xmlhttp.send();
    }

    function clearForm(){
        _("norm").value="";
        _('get_norm').value='';
        _('get_noregop').value='';
        $('#noregop').val("");
        $('#nama').val("");
        $('#tgllahir').val("");
        $('#umur').val("");
        $('#jk').val("");
        $('#alamat').val("");
        $('#diagnosapra').val("");
        $('#dokterop').val("");
        $('#asistenop').val("");
        $('#instrumentir').val("");
        $('#dokteranestesi').val("");
        $('#asistenanestesi').val("");
        $('#radiografer').val("");
        $('#sirkuler').val("");
        $('#jenisanestesi').val("");
        $('#tglop').val("");
        $('#opmulai').val("");
        $('#biusmulai').val("");
        $('#macamop').val("");
        $('#diagnosapasca').val("");
        $('#jaringan').val("");
        _('radioya').checked=false;
        _('radiotidak').checked=false;
        $('#nohasiloperasi').val("");
        $('#opselesai').val("");
        $('#biusselesai').val("");
        $('#laporanoperasi').val("");
        $('#jmlpendarahan').val("");
        $('#komplikasi').val("");
        $('#pakaiimplan').val("");
        $('#instruksipostop').val("");
        _("diagnosapasca").disabled = true;
        _("jaringan").disabled = true;
        _("radioya").disabled = true;
        _("radiotidak").disabled = true;
        _("opmulai").disabled = true;
        _("opselesai").disabled = true;
        _("biusmulai").disabled = true;
        _("biusselesai").disabled = true;
        _("laporanoperasi").disabled = true;
        _("jmlpendarahan").disabled = true;
        _("komplikasi").disabled = true;
        _("pakaiimplan").disabled = true;
        _("instruksipostop").disabled = true;
        _("btn_cetak").disabled = true;
        _("btn_simpan").disabled = true;
        _("btn_simpan2").disabled = true;
        $("#file_upload").val("").trigger('change');
        $("#tab-upload").removeClass("active");
        $("#basic-tab-upload").removeClass("active");
        // _("tab-upload").style="pointer-events: none";
        $("#basic-tab-isi").removeClass("active");
        $("#tab-isi").removeClass("active");
        // _("tab-isi").style="pointer-events: none";
        let bodyRef = _('tbl_laporanoperasi').getElementsByTagName('tbody')[0];
        bodyRef.innerHTML = '';
    }

</script>