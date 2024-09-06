<!-- Main content -->
<div class="content-wrapper">

    <!-- Float buttons with text -->
    <div class="page-header page-header-default">
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('dashboard') ?>"><i class="icon-home2 position-left"></i>Beranda</a></li>
                <li class="active">Tindakan Operasi</li>
            </ul>
        </div>
    </div>
    <!-- /float buttons with text -->
    <!-- Content area -->
    <div class="content">

        <!-- Basic responsive configuration -->
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h6 class="panel-title">PASIEN</h6>
                    </div>
                    <form action="#" class="form-vertical">
                        <div class="modal-header">
                            <a data-toggle='modal' data-target='#modal_data_pasien'><button style="width: 100%" type="button" class="btn btn-info btn-labeled" onclick="tampilDataPasien()"><b><i class="icon-search4"></i></b>CARI PASIEN</button></a>
                        </div>
                        <hr>
                        <div class="modal-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs nav-tabs-highlight">
                                    <li class="active" data-popup="tooltip" title="Identitas Pasien"><a href="#tab-identitas-pasien" data-toggle="tab"><i class="fa fa-wheelchair"></i></a></li>
                                    <li data-popup="tooltip" title="Asal Pasien"><a href="#tab-asal-pasien" data-toggle="tab"><i class="fa fa-hospital-o"></i></a></li>
                                    <li data-popup="tooltip" title="Pemesanan Operasi"><a href="#tab-pemesanan-operasi" data-toggle="tab"><i class="fa fa-medkit"></i></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-identitas-pasien">
                                        <fieldset>
                                            <!-- <legend class="text-semibold"><i class="fa fa-wheelchair position-left" style="font-size:16px"></i>IDENTITAS PASIEN</legend> -->
                                            <div class="form-group">
                                                <label><b>Nama</b></label>
                                                <input id="nama" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>No. RM</b></label>
                                                <input id="norm" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Tempat/Tgl. Lahir</b></label>
                                                <input id="tmptgllahir" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Umur</b></label>
                                                <input id="umur" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Jenis Kelamin</b></label>
                                                <input id="jk" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Alamat</b></label>
                                                <textarea id="alamat" rows="2" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="tab-pane" id="tab-asal-pasien">
                                        <fieldset>
                                            <!-- <legend class="text-semibold"><i class="fa fa-hospital-o position-left" style="font-size:16px"></i>ASAL PASIEN</legend> -->
                                            <div class="form-group">
                                                <label><b>No. Daftar</b></label>
                                                <input id="nodaftar" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Tgl. Daftar</b></label>
                                                <input id="tgldaftar" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>No. Registrasi</b></label>
                                                <input id="noreg" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Tgl. Registrasi</b></label>
                                                <input id="tglreg" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Instalasi</b></label>
                                                <input id="instalasi" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Unit</b></label>
                                                <input id="ruangpoli" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Kelas</b></label>
                                                <input id="kelas" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Cara Bayar</b></label>
                                                <input id="carabayar" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Penjamin</b></label>
                                                <input id="penjamin" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="tab-pane" id="tab-pemesanan-operasi">
                                        <fieldset>
                                            <!-- <legend class="text-semibold"><i class="fa fa-medkit position-left" style="font-size:16px"></i>PEMESANAN OPERASI</legend> -->
                                            <div class="form-group">
                                                <label><b>Jenis Operasi</b></label>
                                                <span class='label label-default' style='font-size:13px; padding-top:8px; width:100%; height:35px' id="jenisop">&nbsp;</span>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Keterangan</b></label>
                                                <textarea id="keterangan" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label><b>No. Registrasi Operasi</b></label>
                                                <input id="noregop" type="text" class="form-control" style="color:black" disabled="disabled" value="<?php echo (!empty($noregop) ? $noregop : ""); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Tgl. Registrasi Operasi</b></label>
                                                <input id="tglregop" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Dokter Pengirim</b></label>
                                                <input id="dokterpengirim" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Waktu Pemesanan Operasi</b></label>
                                                <input id="wktpesanop" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Waktu Pelayanan Operasi</b></label>
                                                <input id="wktpelaksanaan" type="text" class="form-control" style="color:black" disabled="disabled">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h6 class="panel-title">KONFIRMASI SELESAI TINDAKAN</h6>
                    </div>
                    <form action="#" class="form-vertical">
                        <div class="modal-body">
                            <button type="button" style="width: 100%" class="btn btn-success btn-labeled" id="btn_selesai" onclick="konfirmasiSelesai()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SELESAI TINDAKAN</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h6 class="panel-title">TINDAKAN PASIEN</h6>
                    </div>
                    <form role="form" class="form-horizontal">
                        <div class="modal-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs nav-tabs-highlight">
                                    <li class="active"><a href="#tab-diagnosa-pasien" data-toggle="tab"><i class="fa fa-stethoscope position-left" style="font-size:16px"></i></i>DIAGNOSA PASIEN</a></li>
                                    <li><a href="#tab-tindakan-anestesi" data-toggle="tab"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url(); ?>/template/assets/css/icons/injection.svg">TINDAKAN ANESTESI</a></li>
                                    <li><a href="#tab-tindakan-operasi" data-toggle="tab"><i class="fa fa-heartbeat position-left" style="font-size:16px"></i>TINDAKAN OPERASI</a></li>
                                    <li><a href="#tab-tindakan-rr" data-toggle="tab"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url(); ?>/template/assets/css/icons/rehabilitation.svg">TINDAKAN RR</a></li>
                                    <li><a href="#tab-resep" data-toggle="tab"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url(); ?>/template/assets/css/icons/medication.svg">RESEP</a></li>
                                    <li><a href="#tab-laboratorium" data-toggle="tab"><i class="icon icon-microscope position-left" style="font-size:16px"></i>LABORATORIUM</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-diagnosa-pasien">
                                        <div class="modal-body">
                                            <fieldset>
                                                <legend class="text-semibold"><i class="fa fa-stethoscope position-left" style="font-size:16px"></i>DIAGNOSA PRA & POST OPERASI</legend>
                                                <input type="hidden" id="iddiagnosa">
                                                <input type="hidden" id="iduserdiagnosa">
                                                <input type="hidden" id="tgluserdiagnosa">
                                                <div class="form-group">
                                                    <label><b>Sars Covid<span class="text-danger"> *</span></b></label>
                                                    <select data-placeholder='' class='select' id='selectsarscovid' disabled='disabled'>
                                                        <option value="-">-- Pilih Sars Covid--</option>
                                                        <option value="Reaktif">Reaktif</option>
                                                        <option value="Non Reaktif">Non Reaktif</option>
                                                        <option value="Swab Positive">Swab Positive</option>
                                                        <option value="Swab Negative Rapid Reaktif">Swab Negative Rapid Reaktif</option>
                                                    </select>
                                                    <!-- <input id="sarscovid" type="text" class="form-control" style="color:black" disabled="disabled"> -->
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Dokter Diagnosa Pra<span class="text-danger"> *</span></b></label>
                                                    <select id="selectdokterdiagnosapra" class="select-search" disabled='disabled'>
                                                        <option value="-">-- Pilih Dokter Diagnosa Pra --</option>
                                                        <?php foreach ($dokter->result() as $data_dokter) {
                                                            $namadokter = $data_dokter->namapetugasMedis;
                                                            if ($namadokter != '-') { ?>
                                                                <option value="<?php echo $data_dokter->namapetugasMedis; ?>"><?php echo $namadokter; ?></option>
                                                        <?php   }
                                                        } ?>
                                                    </select>
                                                    <!-- <input id="dokterdiagnosapra" type="text" class="form-control" style="color:black" disabled="disabled"> -->
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Diagnosa Pra Operasi<span class="text-danger"> *</span></b></label>
                                                    <select id="diagnosapre" multiple="multiple" class="select-multiple-tags" disabled="disabled">
                                                    </select>
                                                    <!-- <textarea id="diagnosapre" rows="1" cols="5" class="form-control" disabled="disabled" style="color:black"></textarea> -->
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Dokter Diagnosa Post<span class="text-danger"> *</span></b></label>
                                                    <select id="selectdokterdiagnosapost" class="select-search" disabled='disabled'>
                                                        <option value="-">-- Pilih Dokter Diagnosa Post --</option>
                                                        <?php foreach ($dokter->result() as $data_dokter) {
                                                            $namadokter = $data_dokter->namapetugasMedis;
                                                            if ($namadokter != '-') { ?>
                                                                <option value="<?php echo $data_dokter->namapetugasMedis; ?>">
                                                                    <?php echo $namadokter; ?></option>
                                                        <?php   }
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Diagnosa Post Operasi<span class="text-danger"> *</span></b></label>
                                                    <select id="diagnosapost" multiple="multiple" class="select-multiple-tags" disabled="disabled">
                                                    </select>
                                                </div>
                                                <br /><br />
                                                <legend class="text-semibold"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url(); ?>/template/assets/css/icons/icd.svg">DIAGNOSA ICD</legend>
                                                <div class="form-group">
                                                    <div class="table-responsive pre-scrollable tableFixHead">
                                                        <table class="table table-xs table-framed" id="tbl_diagnosa">
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

                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <hr>
                                            <div style="text-align: left;">
                                                <span class="text-danger"><b>* Wajib Diisi</b></span>
                                            </div>
                                            <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_diagnosaprapost" onclick="updateDiagnosaPrapost()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-tindakan-anestesi">
                                        <div class="modal-body">
                                            <fieldset>
                                                <legend class="text-semibold"><i class="fa fa-user-md position-left" style="font-size:16px"></i>PELAKSANA ANESTESI</legend>
                                                <div class="form-group">
                                                    <label><b>Dokter Anestesi<span class="text-danger"> *</span></b></label>
                                                    <select id="selectdokteranestesi" multiple="multiple" class="select" disabled="disabled">
                                                        <?php
                                                        foreach ($dokter->result() as $data_dokter) {
                                                            if ($data_dokter->namapetugasMedis != "-") {
                                                        ?>
                                                                <option value="<?php echo $data_dokter->namapetugasMedis; ?>"><?php echo $data_dokter->namapetugasMedis; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Asisten Anestesi<span class="text-danger"> *</span></b></label>
                                                    <select id="selectasistenanestesi" multiple="multiple" class="select" disabled="disabled">
                                                        <?php foreach ($perawatanestesi->result() as $data_perawat) { ?>
                                                            <option value="<?php echo $data_perawat->namapetugasMedis; ?>"><?php echo $data_perawat->namapetugasMedis; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <br /><br />
                                            <fieldset>
                                                <legend class="text-semibold"><img style="float: left; width: 20px; height: auto; margin-right: 6px;" src="<?php echo base_url(); ?>/template/assets/css/icons/injection.svg">TINDAKAN ANESTESI</legend>
                                                <input type="hidden" id="notindakananestesi">
                                                <input type="hidden" id="iduseranestesi">
                                                <input type="hidden" id="tgluseranestesi">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label><b>Tgl. Tindakan Anestesi<span class="text-danger"> *</span></b></label>
                                                            <input id="tglanestesi" type="date" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label><b>Jam Tindakan Anestesi<span class="text-danger"> *</span></b></label>
                                                            <input id="jamanestesi" type="time" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Jenis Anestesi<span class="text-danger"> *</span></b></label>
                                                    <select id="selectanestesi" multiple="multiple" class="select" disabled="disabled">
                                                        <?php foreach ($jenisanestesi->result() as $data_jenisanestesi) { ?>
                                                            <option value="<?php echo strtoupper($data_jenisanestesi->jenisAnestesi); ?>"><?php echo strtoupper($data_jenisanestesi->jenisAnestesi); ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Tindakan Anestesi<span class="text-danger"> *</span></b></label>
                                                    <select id="selecttindakananestesi" multiple="multiple" class="select-multiple-tags text-uppercase" disabled="disabled">
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Keterangan</b></label>
                                                    <textarea id="keterangananestesi" rows="2" cols="5" class="form-control text-uppercase" disabled="disabled" style="color:black"></textarea>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <hr>
                                            <div style="text-align: left;">
                                                <span class="text-danger"><b>* Wajib Diisi</b></span>
                                            </div>
                                            <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_anestesi" onclick="insupTindakanAnestesi()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-tindakan-operasi">
                                        <div class="modal-body">
                                            <fieldset>
                                                <legend class="text-semibold"><i class="fa fa-user-md position-left" style="font-size:16px"></i>PELAKSANA OPERASI</legend>
                                                <div class="form-group">
                                                    <label><b>Dokter Operator<span class="text-danger"> *</span></b></label>
                                                    <select id="selectdokter" multiple="multiple" class="select" onchange="setOperatorValue(this);" disabled="disabled">
                                                        <?php
                                                        foreach ($dokter->result() as $data_dokter) {
                                                            if ($data_dokter->namapetugasMedis != "-") {
                                                        ?>
                                                                <option value="<?php echo $data_dokter->namapetugasMedis; ?>"><?php echo $data_dokter->namapetugasMedis; ?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Asisten Operasi<span class="text-danger"> *</span></b></label>
                                                    <select id="selectperawat" multiple="multiple" class="select-multiple-tags" disabled="disabled">
                                                        <?php foreach ($perawatop->result() as $data_perawat) { ?>
                                                            <option value="<?php echo $data_perawat->namapetugasMedis; ?>"><?php echo $data_perawat->namapetugasMedis; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Perawat Instrument</b></label>
                                                    <select id="selectperawatinstrument" multiple="multiple" class="select" disabled="disabled">
                                                        <?php foreach ($perawatinsir->result() as $data_perawat) { ?>
                                                            <option value="<?php echo $data_perawat->namapetugasMedis; ?>"><?php echo $data_perawat->namapetugasMedis; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Perawat Sirkuler</b></label>
                                                    <select id="selectperawatsirkuler" multiple="multiple" class="select" disabled="disabled">
                                                        <?php foreach ($perawatinsir->result() as $data_perawat) { ?>
                                                            <option value="<?php echo $data_perawat->namapetugasMedis; ?>"><?php echo $data_perawat->namapetugasMedis; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><b>Radiografer</b></label>
                                                    <select id="selectradiografer" multiple="multiple" class="select" disabled="disabled">
                                                        <?php foreach ($radiografer->result() as $data_radiografer) { ?>
                                                            <option value="<?php echo $data_radiografer->namapetugasMedis; ?>"><?php echo $data_radiografer->namapetugasMedis; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <br /><br />
                                            <fieldset>
                                                <legend class="text-semibold"><i class="fa fa-heartbeat position-left" style="font-size:16px"></i>TINDAKAN OPERASI</legend>
                                                <input type="hidden" id="notindakanoperasi">
                                                <input type="hidden" id="iduserop">
                                                <input type="hidden" id="tgluserop">
                                                <div class="form-group">
                                                    <label><b>Kamar Operasi<span class="text-danger"> *</span></b></label>
                                                    <select id="selectkamarop" class="select-search" disabled='disabled'>
                                                        <option value="-">-- Pilih Kamar Operasi --</option>
                                                        <?php foreach ($kamarop->result() as $datakamar) { ?>
                                                            <option value="<?php echo $datakamar->namaKamarOP; ?>"><?php echo $datakamar->namaKamarOP; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label><b>Tgl. Tindakan Operasi<span class="text-danger"> *</span></b></label>
                                                            <input id="tgltindakanop" type="date" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label><b>Jam Tindakan Operasi<span class="text-danger"> *</span></b></label>
                                                            <input id="jamtindakanop" type="time" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label><b>Jam Induksi<span class="text-danger"> *</span></b></label>
                                                            <input id="jaminduksi" type="time" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label><b>Jam Incisi<span class="text-danger"> *</span></b></label>
                                                            <input id="jamincisi" type="time" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label><b>Pemakaian Implan<span class="text-danger"> *</span></b></label>
                                                            <select id="selectpakaiimplan" class="select" disabled='disabled' onchange="changeSelect('implan',this)">
                                                                <option value="-">-- Pilih Pemakaian Implan --</option>
                                                                <option value="YA">YA</option>
                                                                <option value="TIDAK">TIDAK</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <label><b>Jenis Implan</b></label>
                                                            <select id="selectimplan" multiple="multiple" class="select-multiple-tags" disabled="disabled">
                                                                <?php foreach ($jenisimplanop->result() as $datajenisimplanop) { ?>
                                                                    <option value="<?php echo $datajenisimplanop->jenisImplan; ?>"><?php echo $datajenisimplanop->jenisImplan; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label><b>Kelas Tindakan</b></label>
                                                            <select id="selectkelastindakan" class="select-search" disabled='disabled' onchange="changeSelect('kelastindakan',this)">
                                                                <option value="-">-- Pilih Kelas Tindakan --</option>
                                                                <?php foreach ($kelastindakanop->result() as $datakelastindakanop) { ?>
                                                                    <option value="<?php echo $datakelastindakanop->kdkelas; ?>"><?php echo $datakelastindakanop->kelas; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <label><b>Tindakan Operasi</b></label>
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <select data-placeholder='' class='select-search select-clear' id='selecttindakan' disabled='disabled'>
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <button id="btn_tambah" class='btn btn-primary btn-labeled' onclick="insertDataTable()" type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <input type="hidden" id="tindakanhapus">
                                                <div class="form-group">
                                                    <div class="table-responsive">
                                                        <table class="table table-xs table-framed" id="tbl_tindakan">
                                                            <thead>
                                                                <tr style="background:#eee;">
                                                                    <th style="text-align:center">OPERATOR</th>
                                                                    <th style="text-align:center">TINDAKAN</th>
                                                                    <th style="text-align:center;">KELAS</th>
                                                                    <th style="text-align:center;">JUMLAH</th>
                                                                    <th style="text-align:center">TARIF</th>
                                                                    <th style="text-align:center">SUBTOTAL</th>
                                                                    <th style="text-align:center">AKSI</th>
                                                                    <th style="display:none">kodetarif</th>
                                                                    <th style="display:none">jenistindakan</th>
                                                                    <th style="display:none">kodetindakan</th>
                                                                    <th style="display:none">baru</th>
                                                                    <th style="display:none">hidden jumlah</th>
                                                                    <th style="display:none">dataedit</th>
                                                                    <th style="display:none">editoperator</th>
                                                                    <th style="display:none">idtindakan</th>
                                                                    <th style="display:none">usertgl</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="4"></th>
                                                                    <th style="text-align:center;">TOTAL</th>
                                                                    <th id='subtotal' style="text-align:right">Rp 0,00
                                                                    </th>
                                                                    <th></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                    <th style="display:none"></th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <hr>
                                            <div style="text-align: left;">
                                                <span class="text-danger"><b>* Wajib Diisi</b></span>
                                            </div>
                                            <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_tindakan" onclick="insupTindakanOperasi()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-tindakan-rr">
                                        <div class="modal-body">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label><b>Tgl. Tindakan RR<span class="text-danger"> *</span></b></label>
                                                            <input id="tgltindakanrr" type="date" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label><b>Jam Tindakan RR<span class="text-danger"> *</span></b></label>
                                                            <input id="jamtindakanrr" type="time" class="form-control" style="color:black" required="required" disabled='disabled'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label><b>Kelas Tindakan</b></label>
                                                            <select id="selectkelastindakanrr" class="select-search" disabled='disabled' onchange="changeSelect('kelastindakanrr',this)">
                                                                <option value="-">-- Pilih Kelas Tindakan --</option>
                                                                <?php
                                                                foreach ($kelastindakanrr->result() as $datakelastindakanrr) { ?>
                                                                    <option value="<?php echo $datakelastindakanrr->kdkelas; ?>"><?php echo $datakelastindakanrr->kelas; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <label><b>Tindakan RR</b></label>
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <select data-placeholder='' class='select-search' id='selecttindakanrr' disabled='disabled'>
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <button id="btn_tambah_rr" class='btn btn-primary btn-labeled' type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="hidden" id="tindakanhapusrr">
                                                    <div class="table-responsive">
                                                        <table class="table table-xs table-framed" id="tbl_tindakan_rr">
                                                            <thead>
                                                                <tr style="background:#eee;">
                                                                    <th style="text-align:center">PETUGAS</th>
                                                                    <th style="text-align:center">TINDAKAN</th>
                                                                    <th style="text-align:center;">KELAS</th>
                                                                    <th style="text-align:center;">JUMLAH</th>
                                                                    <th style="text-align:center">TARIF</th>
                                                                    <th style="text-align:center">SUBTOTAL</th>
                                                                    <th style="text-align:center">AKSI</th>
                                                                    <th style="display:none">kode tindakan</th>
                                                                    <th style="display:none">kode tarif</th>
                                                                    <th style="display:none">edit</th>
                                                                    <th style="display:none">id</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="4"></th>
                                                                    <th style="text-align:center;">TOTAL</th>
                                                                    <th id='subtotal_rr' style="text-align:right">Rp 0,00</th>
                                                                    <th>&nbsp;</th>
                                                                    <th colspan="4" style="display: none;"></th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <hr>
                                            <div style="text-align: left;">
                                                <span class="text-danger"><b>* Wajib Diisi</b></span>
                                            </div>
                                            <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_rr" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-resep">
                                        <div class="tabbable">
                                            <ul class="nav nav-pills nav-pills-toolbar nav-justified">
                                                <li class="active"><a href="#tab-detail-resep" data-toggle="tab"><i class="fa fa-medkit position-left"></i>RESEP</a></li>
                                                <li><a href="#tab-riwayat-resep" data-toggle="tab"><i class="fa fa-history position-left"></i>RIWAYAT</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-detail-resep">
                                                    <div class="modal-body">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label><b>Dokter Pemberi Resep<span class="text-danger"> *</span></b></label>
                                                                <select id="selectdokterresep" class="select-search" disabled='disabled'>
                                                                    <option value="-">-- Pilih Dokter Pemberi Resep --</option>
                                                                    <?php
                                                                    foreach ($dokter->result() as $data_dokter) {
                                                                        $namadokter = $data_dokter->namapetugasMedis;
                                                                        if ($namadokter != '-') {
                                                                    ?>
                                                                            <option value="<?php echo $data_dokter->kdPetugasMedis; ?>"><?php echo $namadokter; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><b>Obat/BHP/Alkes</b></label>
                                                                <select id="selectobat" class="select-search" disabled='disabled' onchange="setDetailObat(this)">
                                                                    <option value="-">-- Pilih Obat/BHP/Alkes --</option>
                                                                    <?php
                                                                    foreach ($obat->result() as $data_obat) {
                                                                    ?>
                                                                        <option value='<?php echo $data_obat->plu . ";" . $data_obat->obat . ";" . $data_obat->jmlstok . ";" . $data_obat->hargajual . ";" . $data_obat->satuan; ?>'><?php echo $data_obat->obat . " - (" . $data_obat->jmlstok . " " . strtoupper($data_obat->satuan) . ")"; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label><b>Stok Tersedia</b></label>
                                                                        <input type="text" id="stokterserdia" class="form-control" readonly="readonly">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label><b>Satuan</b></label>
                                                                        <input type="text" id="satuan" class="form-control" readonly="readonly">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label><b>Harga</b></label>
                                                                        <input type="text" id="harga" class="form-control" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label><b>Dibutuhkan</b></label>
                                                                        <input type="text" id="dibutuhkan" onkeyup="butuhberi(this)" class="form-control" disabled="disabled">
                                                                        <small class="display-block" id="validasibutuh"></small>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label><b>Aturan Pakai</b></label>
                                                                        <input type="text" id="aturanpakai" onkeyup="butuhberi(this)" class="form-control text-uppercase" disabled="disabled">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label><b>Keterangan</b></label>
                                                                        <input type="text" id="keteranganresep" onkeyup="butuhberi(this)" class="form-control text-uppercase" disabled="disabled">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <br style="line-height: 26px;">
                                                                <button id="btn_tambah_resep" class='btn btn-primary btn-labeled' onclick="insertDataTableResep()" type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="table-responsive">
                                                                    <table class="table table-xs table-framed" id="tbl_resep">
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
                                                                                <th id='subtotalresep' style="text-align:right">Rp 0,00</th>
                                                                                <th></th>
                                                                                <th style="display:none"></th>
                                                                                <th style="display:none"></th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <hr>
                                                        <div style="text-align: left;">
                                                            <span class="text-danger"><b>* Wajib Diisi</b></span>
                                                        </div>
                                                        <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_resep" onclick="insertResepPasien()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-riwayat-resep">
                                                    <div class="modal-header">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="col-md-3">
                                                                    <label><b>Tanggal Awal</b></label>
                                                                    <input id="tglawalresep" type="date" class="form-control" disabled='disabled' required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label><b>Tanggal Akhir</b></label>
                                                                    <input id="tglakhirresep" type="date" class="form-control" disabled='disabled' required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <br style="line-height: 26px;">
                                                                    <button type="button" style="float: right;" id="btn_tampil_resep" disabled='disabled' class="btn btn-labeled btn-info" onclick="tampilRiwayatResep()"><b><i id="i_btn_tampil_riwayat_resep" class="icon-file-text2"></i></b>TAMPILKAN</button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <hr>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group" id="konten-riwayat-resep"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-laboratorium">
                                        <div class="tabbable">
                                            <ul class="nav nav-pills nav-pills-toolbar nav-justified">
                                                <li class="active"><a href="#tab-tindakan-lab" data-toggle="tab"><i class="icon icon-microscope position-left"></i>TINDAKAN LABORATORIUM</a></li>
                                                <li><a href="#tab-riwayat-lab" data-toggle="tab"><i class="fa fa-history position-left"></i>RIWAYAT</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-tindakan-lab">
                                                    <div class="modal-body">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label><b>Dokter Pengirim<span class="text-danger"> *</span></b></label>
                                                                <select id="selectdokterlab" class="select-search" disabled='disabled'>
                                                                    <option value="-">-- Pilih Dokter Pengirim --</option>
                                                                    <?php
                                                                    foreach ($dokter->result() as $data_dokter) {
                                                                        $namadokter = $data_dokter->namapetugasMedis;
                                                                        if ($namadokter != '-') { ?>
                                                                            <option value="<?php echo $data_dokter->kdPetugasMedis; ?>"><?php echo $namadokter; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><b>Keterangan Klinis<span class="text-danger"> *</span></b></label>
                                                                <textarea id="ketklinis" rows="1" cols="5" class="form-control text-uppercase" disabled="disabled" style="color:black"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <label><b>Kelas Tindakan</b></label>
                                                                        <select id="selectkelastindakanlab" class="select-search" disabled='disabled' onchange="changeSelect('kelastindakanlab',this)">
                                                                            <option value="-">-- Pilih Kelas Tindakan --</option>
                                                                            <?php
                                                                            foreach ($kelastindakanlab->result() as $datakelastindakanlab) { ?>
                                                                                <option value="<?php echo $datakelastindakanlab->kdKelas; ?>"><?php echo $datakelastindakanlab->kelas; ?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <label><b>Tindakan Laoratorium</b></label>
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <select data-placeholder='' class='select-search select-clear' id='selecttindakanlab' disabled='disabled'>
                                                                                    <option></option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <button id="btn_tambah_lab" class='btn btn-primary btn-labeled' onclick="insertDataTableLab()" type="button" disabled><b><i class="icon-plus2"></i></b>TAMBAH</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="table-responsive">
                                                                    <table class="table table-xs table-framed" id="tbl_tindakan_lab">
                                                                        <thead>
                                                                            <tr style="background:#eee;">
                                                                                <th style="display: none">KODE</th>
                                                                                <th style="text-align:center">TINDAKAN</th>
                                                                                <th style="text-align:center;">JUMLAH</th>
                                                                                <th style="display: none">KELOMPOK TINDAKAN</th>
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
                                                                                <th colspan="3"></th>
                                                                                <th style="text-align:center;">TOTAL</th>
                                                                                <th id='subtotal_lab' style="text-align:right">Rp 0,00</th>
                                                                                <th></th>
                                                                                <th style="display:none"></th>
                                                                                <th style="display:none"></th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <hr>
                                                        <div style="text-align: left;">
                                                            <span class="text-danger"><b>* Wajib Diisi</b></span>
                                                        </div>
                                                        <button type="button" class="btn btn-success btn-labeled" id="btn_simpan_lab" onclick="insertPermintaanLab()" disabled><b><i class="glyphicon glyphicon-floppy-saved"></i></b>SIMPAN</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-riwayat-lab">
                                                    <div class="modal-header">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="col-md-3">
                                                                    <label><b>Tanggal Awal</b></label>
                                                                    <input id="tglawallab" type="date" class="form-control" disabled='disabled' required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label><b>Tanggal Akhir</b></label>
                                                                    <input id="tglakhirlab" type="date" class="form-control" disabled='disabled' required>
                                                                </div>
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-3">
                                                                    <br style="line-height: 26px;">
                                                                    <button type="button" style="float: right;" disabled='disabled' id="btn_tampil_lab" class="btn btn-labeled btn-info" onclick="tampilRiwayatLab()"><b><i id="i_btn_tampil_riwayat_lab" class="icon-file-text2"></i></b>TAMPILKAN</button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <hr>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group" id="konten-riwayat-lab">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                        <table id="data_pasien" class="table datatable-basic table-framed">
                                            <thead>
                                                <tr style="background:#eee;">
                                                    <th style="width: 60px">NO.</th>
                                                    <th>NO. REGISTRASI OPERASI</th>
                                                    <th>NO. RM</th>
                                                    <th>NAMA PASIEN</th>
                                                    <th>DOKTER OPERATOR</th>
                                                    <th>ASAL PASIEN</th>
                                                    <th>UNIT</th>
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

                <!-- <div id="modal_riwayat_resep" class="modal fade">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title" id="title_detail_resep"></h5>
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
                                                    <th id='subtotal_detail_obat' style="text-align:right">Rp 0,00</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
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

            .tablekonten {
                overflow-y: auto;
                height: 250px;
            }

            .tablekonten thead tr:nth-child(1) th {
                background: #eee;
                position: sticky;
                top: 0;
                z-index: 10;
            }
        </style>

        <script type="text/javascript">
            $(document).ready(() => {
                getDetailPasien($('#noregop').val())
            });

            //TODO BEGIN DATA PASIEN
            function tampilDataPasien() {
                $('#data_pasien').dataTable({
                    "bDestroy": true,
                    "processing": true,
                    "serverSide": true,
                    "ordering": true,
                    "bInfo": false,
                    "order": [
                        [9, 'ASC']
                    ],
                    "ajax": {
                        "url": "<?php echo base_url('permintaansudah/permintaanList') ?>",
                        "type": "POST",
                    },
                    "deferRender": true,
                    "lengthMenu": [
                        [10, 25, 50],
                        [10, 25, 50]
                    ],
                    "columnDefs": [{
                            "render": function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            },
                            "targets": [0],
                            "orderable": false
                        },
                        {
                            "data": "noregop",
                            "targets": [1],
                            "orderable": false
                        },
                        {
                            "data": "norm",
                            "targets": [2],
                            "orderable": false
                        },
                        {
                            "data": "pasien",
                            "targets": [3]
                        },
                        {
                            "render": function(data, type, row) {
                                var dokterop = row.dokterop.substring(1);
                                return dokterop;
                            },
                            "targets": [4]
                        },
                        {
                            "render": function(data, type, row) {
                                var html = row.instalasi.toUpperCase()
                                return html;
                            },
                            "targets": [5]
                        },
                        {
                            "render": function(data, type, row) {
                                var html = row.unit.toUpperCase();
                                return html;
                            },
                            "targets": [6]
                        },
                        {
                            "render": function(data, type, row) {
                                let html = /*html*/ `<span class='label label-${row.warnajenisop}' style='width:100px'>${row.jenisop}</span>`;
                                return html;
                            },
                            "targets": [7],
                            "orderable": true
                        },
                        {
                            "render": function(data, type, row) {
                                var html = formatTanggalData(row.tglpermintaanop);
                                return html;
                            },
                            "targets": [8]
                        },
                        {
                            "render": function(data, type, row) {
                                var html = formatTanggalData(row.tglkonfirmasiop);
                                return html;
                            },
                            "targets": [9]
                        },
                        {
                            "render": function(data, type, row) {
                                let noregistrasi = row.noregop;
                                let html = /*html*/ `<button data-popup='tooltip' title='Pilih Pasien' type='button' onclick="getDetailPasien('${noregistrasi}','tampil')" data-dismiss='modal' class='btn btn-primary btn-icon'><i class='icon-checkmark4'></i></button>`;
                                return html;
                            },
                            "targets": [10],
                            "orderable": false
                        }
                    ]
                });
            }

            function getDetailPasien(noregop) {
                if (noregop !== "") {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('tindakan/getPasienTindakan'); ?>",
                        data: {
                            noregop: noregop
                        },
                        dataType: "JSON",
                        success: function(data) {
                            clearForm();
                            $('#nama').val(data.namapasien);
                            $('#norm').val(data.norm);
                            $('#tmptgllahir').val(hpskotakab(data.tmplahir).toUpperCase() + " / " + data.tgllahir);
                            $('#umur').val(hitungUmur(data.tgllahir));
                            $('#jk').val(jklengkap(data.jk));
                            $('#alamat').val(data.alamat.toUpperCase());
                            $("#nodaftar").val(data.nodaftar);
                            $("#tgldaftar").val(data.tgldaftar);
                            $('#noreg').val(data.noregistrasi);
                            $('#tglreg').val(data.tglregistrasi);
                            $('#instalasi').val(data.instalasi);
                            $('#ruangpoli').val(data.unitasal.toUpperCase());
                            $('#kelas').val(data.kelas == null ? "-" : data.kelas);
                            $('#carabayar').val(data.carabayar.toUpperCase());
                            $('#penjamin').val(data.penjamin.toUpperCase());
                            _("jenisop").innerHTML = data.jenisop;
                            _("jenisop").className = 'label label-' + data.warnajenisop;
                            $('#keterangan').val(data.keterangan == "" ? "-" : data.keterangan.toUpperCase());
                            $('#noregop').val(data.noregistrasiop);
                            $('#tglregop').val(data.tglregistrasiop);
                            $('#dokterpengirim').val(data.dokterpengirim);
                            $('#wktpesanop').val(data.tglpermintaanop);
                            $('#wktpelaksanaan').val(data.tgljadwalop);
                            _("btn_selesai").disabled = false;
                            getDiagnosaPasien(data.norm, data.noregistrasiop);
                            getTindakanAnestesi(data.noregistrasiop);
                            getTindakanOperasi(data.noregistrasiop);
                            setFormResepEnabled();
                            setFormLabEnabled();
                            window.history.pushState("", "", '/kamar_operasi/tindakan');
                        }
                    });
                }
            }
            //TODO END DATA PASIEN


            //TODO BEGIN DIAGNOSA
            function eventRadio(el) {
                if ($(el).val() == 'ICD 10') {
                    _("icd10").className = "label label-info";
                    _("icd9").className = "label label-default";
                } else if ($(el).val() == 'ICD 9') {
                    _("icd10").className = "label label-default";
                    _("icd9").className = "label label-info";
                }
                tampilDataDiagnosa($(el).val());
            }

            function getDiagnosaPasien(norm, noregop) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getDiagnosaPasien'); ?>",
                    data: {
                        noregop: noregop
                    },
                    dataType: "JSON",
                    success: function(data) {
                        _("iddiagnosa").value = data["prapost"].iddiagnosa;
                        _("iduserdiagnosa").value = data["prapost"].iduser;
                        _("tgluserdiagnosa").value = data["prapost"].tgluser;
                        _("selectsarscovid").disabled = false;
                        $("#selectsarscovid").val(data["prapost"].sarscovid == null ? "-" : data["prapost"].sarscovid).trigger("change");
                        _("selectdokterdiagnosapra").disabled = false;
                        $("#selectdokterdiagnosapra").val(data["prapost"].dokterdiagnosapra == null ? "-" : data["prapost"].dokterdiagnosapra).trigger("change");
                        _("diagnosapre").disabled = false;
                        let option_diagnosapra = "";
                        if (data["prapost"].diagnosapra != null) {
                            let data_diagnosa = data["prapost"].diagnosapra.substring(1).split(";");
                            for (let i = 0; i < data_diagnosa.length; i++) {
                                option_diagnosapra += "<option value='" + data_diagnosa[i] + "'>" +
                                    data_diagnosa[i] + "</option>";
                            }
                        }
                        $("select#diagnosapre").html(option_diagnosapra);
                        $('#diagnosapre').val(data["prapost"].diagnosapra == null ? "" : data["prapost"].diagnosapra.substring(1).split(";")).trigger('change');

                        _("selectdokterdiagnosapost").disabled = false;
                        $("#selectdokterdiagnosapost").val(data["prapost"].dokterdiagnosapost == null ? "-" : data["prapost"].dokterdiagnosapost).trigger("change");
                        _("diagnosapost").disabled = false;
                        let option_diagnosapost = "";
                        if (data["prapost"].diagnosapost != null) {
                            let data_diagnosa = data["prapost"].diagnosapost.substring(1).split(";");
                            for (let i = 0; i < data_diagnosa.length; i++) {
                                option_diagnosapost += "<option value='" + data_diagnosa[i] + "'>" +
                                    data_diagnosa[i] + "</option>";
                            }
                        }
                        $("select#diagnosapost").html(option_diagnosapost);
                        $('#diagnosapost').val(data["prapost"].diagnosapost == null ? "" : data["prapost"].diagnosapost.substring(1).split(";")).trigger('change');
                        getDiagnosaICD(norm);
                        _("btn_simpan_diagnosaprapost").disabled = false;
                    }
                });
            }

            function getDiagnosaICD(norm) {
                let table = _("tbl_diagnosa");
                table.getElementsByTagName('tbody')[0].innerHTML = '';
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getDiagnosaICD'); ?>",
                    data: {
                        norm: norm
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data["icd"].length != 0) {
                            let row_count = table.tBodies[0].rows.length;
                            let data_clean = [...new Set(data["icd"].map(obj => JSON.stringify(obj)))].map(str => JSON.parse(str));
                            for (let i = 0; i < data_clean.length; i++) {
                                let row_insert = table.tBodies[0].insertRow(row_count);
                                let TGL_DIAGNOSA = row_insert.insertCell(0);
                                let KODE = row_insert.insertCell(1);
                                KODE.style.textAlign = "center";
                                let DIAGNOSA = row_insert.insertCell(2);
                                let DESKRIPSI = row_insert.insertCell(3);
                                let JENIS_DIAGNOSA = row_insert.insertCell(4);
                                let DOKTER = row_insert.insertCell(5);

                                TGL_DIAGNOSA.innerHTML = data_clean[i].tgldiagnosa == null | data_clean[i].tgldiagnosa == '0000-00-00 00:00:00' ? formatTanggalData(data_clean[i].tgldaftar) : formatTanggalData(data_clean[i].tgldiagnosa);
                                KODE.innerHTML = data_clean[i].kdicd10;
                                DIAGNOSA.innerHTML = data_clean[i].icd10;
                                DESKRIPSI.innerHTML = data_clean[i].deskripsi;
                                JENIS_DIAGNOSA.innerHTML = data_clean[i].jenisdiagnosa;
                                DOKTER.innerHTML = data_clean[i].dokter;
                            }
                        } else {
                            table.getElementsByTagName('tbody')[0].innerHTML = /*html*/ `<tr><td colspan="6" style="text-align:center">TIDAK ADA DATA DIAGNOSA ICD</td></tr>`;
                        }
                    }
                });
            }

            function updateDiagnosaPrapost() {
                let noregop = _("noregop").value;
                let norm = _("norm").value;
                let iddiagnosa = _("iddiagnosa").value;
                let iduser = _("iduserdiagnosa").value;
                let tgluser = _("tgluserdiagnosa").value;
                let sarscovid = _("selectsarscovid").value;
                let dokterdiagnosapra = _("selectdokterdiagnosapra").value;
                let diagnosapra = $("#diagnosapre").val();
                let dokterdiagnosapost = _("selectdokterdiagnosapost").value;
                let diagnosapost = $("#diagnosapost").val();
                if (sarscovid == "-") {
                    swal({
                        title: "Sars Covid",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectsarscovid").focus()
                    });
                } else if (dokterdiagnosapra == "-") {
                    swal({
                        title: "Dokter Diagnosa Pra",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokterdiagnosapra").focus()
                    });
                } else if (diagnosapra == null) {
                    swal({
                        title: "Diagnosa Pra",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("diagnosapre").focus()
                    });
                } else if (dokterdiagnosapost == "-") {
                    swal({
                        title: "Dokter Diagnosa Post",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokterdiagnosapost").focus()
                    });
                } else if (diagnosapost == null) {
                    swal({
                        title: "Diagnosa Post",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("diagnosapost").focus()
                    });
                } else {
                    swal({
                            title: "Diagnosa Pasien",
                            text: "Apakah Yakin Simpan?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#EF5350",
                            confirmButtonText: "YA",
                            cancelButtonText: "TIDAK",
                            closeOnConfirm: false,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                let arr_data = {
                                    iddiagnosa: iddiagnosa,
                                    iduser: iduser,
                                    tgluser: tgluser,
                                    sarscovid: sarscovid,
                                    dokterdiagnosapra: dokterdiagnosapra,
                                    diagnosapra: diagnosapra,
                                    dokterdiagnosapost: dokterdiagnosapost,
                                    diagnosapost: diagnosapost
                                };
                                // console.log(arr_data);
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('tindakan/updateDiagnosaPrapost'); ?>",
                                    data: {
                                        arr_data: arr_data
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        console.log(data);
                                        swal({
                                            title: "Berhasil",
                                            text: "Data Disimpan",
                                            confirmButtonColor: "#66BB6A",
                                            type: "success",
                                        }, () => getDiagnosaPasien(norm, noregop));
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
                        });
                }
            }
            //TODO END DIAGNOSA PASIEN


            //TODO BEGIN TINDAKAN ANESTESI
            function getTindakanAnestesi(noregop) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getTindakanAnestesi'); ?>",
                    data: {
                        noregop: noregop
                    },
                    dataType: "JSON",
                    success: function(data) {
                        _("notindakananestesi").value = data.notindakananestesi == null ? "" : data.notindakananestesi;
                        _("iduseranestesi").value = data.iduser;
                        _("tgluseranestesi").value = data.tgluser;
                        _("selectdokteranestesi").disabled = false;
                        $("#selectdokteranestesi").val(data.dokteranestesi == null ? "" : data.dokteranestesi.substring(1).split(";")).trigger("change");
                        _("selectasistenanestesi").disabled = false;
                        $("#selectasistenanestesi").val(data.asistenanestesi == null ? "" : data.asistenanestesi.substring(1).split(";")).trigger("change");
                        _("tglanestesi").disabled = false;
                        $('#tglanestesi').val(data.tgltindakananestesi == null ? "" : ubahFormatTanggal(data.tgltindakananestesi, 1));
                        _("jamanestesi").disabled = false;
                        $('#jamanestesi').val(data.tgltindakananestesi == null ? "" : ubahFormatTanggal(data.tgltindakananestesi, 0));
                        _("selectanestesi").disabled = false;
                        $("#selectanestesi").val(data.jenisanestesi == null ? "" : data.jenisanestesi.substring(1).split(";")).trigger("change");
                        let option_tindakan_anestesi = "";
                        if (data.tindakananestesi != null) {
                            let data_tindakan_anestesi = data.tindakananestesi.substring(1).split(";");
                            for (let i = 0; i < data_tindakan_anestesi.length; i++) {
                                option_tindakan_anestesi += "<option value='" + data_tindakan_anestesi[i] + "'>" + data_tindakan_anestesi[i] + "</option>";
                            }
                        }
                        $("select#selecttindakananestesi").html(option_tindakan_anestesi);
                        _("selecttindakananestesi").disabled = false;
                        $('#selecttindakananestesi').val(data.tindakananestesi == null ? "" : data.tindakananestesi.substring(1).split(";")).trigger('change');
                        _("keterangananestesi").disabled = false;
                        _("keterangananestesi").value = data.keterangan == null ? "" : data.keterangan;
                        _("btn_simpan_anestesi").disabled = false;
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            }

            function insupTindakanAnestesi() {
                let noregistrasiop = _("noregop").value;
                let iduser = _("iduseranestesi").value;
                let tgluser = _("tgluseranestesi").value;
                let jenis = _("notindakananestesi").value == "" ? "insert" : "update";
                let notindakananestesi = _("notindakananestesi").value;
                let dokteranestesi = $("#selectdokteranestesi").val();
                let asistenanestesi = $("#selectasistenanestesi").val();
                let tglanestesi = _("tglanestesi").value;
                let jamanestesi = _("jamanestesi").value;
                let jenisanestesi = $("#selectanestesi").val();
                let tindakananestesi = $("#selecttindakananestesi").val();
                let keterangan = _("keterangananestesi").value;
                if (dokteranestesi == null) {
                    swal({
                        title: "Dokter Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokteranestesi").focus()
                    });
                } else if (asistenanestesi == null) {
                    swal({
                        title: "Asisten Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectasistenanestesi").focus()
                    });
                } else if (tglanestesi == "") {
                    swal({
                        title: "Tgl. Tindakan Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("tglanestesi").focus()
                    });
                } else if (jamanestesi == "") {
                    swal({
                        title: "Jam Tindakan Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("jamanestesi").focus()
                    });
                } else if (jenisanestesi == null) {
                    swal({
                        title: "Jenis Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectanestesi").focus()
                    });
                } else if (tindakananestesi == null) {
                    swal({
                        title: "Tindakan Anestesi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selecttindakananestesi").focus()
                    });
                } else {
                    swal({
                            title: "Tindakan Anestesi",
                            text: "Apakah Yakin Simpan?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#EF5350",
                            confirmButtonText: "YA",
                            cancelButtonText: "TIDAK",
                            closeOnConfirm: false,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                let arr_data = {
                                    jenis: jenis,
                                    noregistrasiop: noregistrasiop,
                                    notindakananestesi: notindakananestesi,
                                    dokteranestesi: dokteranestesi,
                                    asistenanestesi: asistenanestesi,
                                    tgltindakananestesi: formatTanggal("tglanestesi", "jamanestesi"),
                                    jenisanestesi: jenisanestesi,
                                    tindakananestesi: tindakananestesi,
                                    keterangan: keterangan,
                                    iduser: iduser,
                                    tgluser: tgluser
                                }
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('tindakan/insupTindakanAnestesi'); ?>",
                                    data: {
                                        arr_data: arr_data
                                    },
                                    dataType: "JSON",
                                    success: function(data) {
                                        console.log(data);
                                        swal({
                                            title: "Berhasil",
                                            text: "Data Disimpan",
                                            confirmButtonColor: "#66BB6A",
                                            type: "success",
                                        }, () => getTindakanAnestesi(noregistrasiop));
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
                        });
                }
            }
            //TODO END TINDAKAN ANESTESI


            //TODO BEGIN TINDAKAN OPERASI
            function changeSelect(jenis, id) {
                switch (jenis) {
                    case "implan":
                        let val = $(id).val();
                        if (val == "YA") {
                            _("selectimplan").disabled = false;
                        } else {
                            $('#selectimplan').val("").trigger('change');
                            _("selectimplan").disabled = true;
                        }
                        break;
                    case "kelastindakan":
                        let kdkelas = $(id).val();
                        if (kdkelas != "-") {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('tindakan/getListTindakanOP'); ?>",
                                data: {
                                    kdkelas
                                },
                                dataType: "JSON",
                                success: function(data) {
                                    _("selecttindakan").disabled = false;
                                    $("#selecttindakan").val("").trigger('change');
                                    let option_tindakan = "<option value='-'>-- Pilih Tindakan Operasi --</option>";
                                    for (let i = 0; i < data.length; i++) {
                                        option_tindakan += /*html*/ `<option value='${data[i].kdtarif};${data[i].tindakan};${data[i].tarif};${data[i].kelas};${data[i].kdtindakan}'>${data[i].tindakan} - ${tambahRP(data[i].tarif)}</option>`;
                                    }
                                    $("select#selecttindakan").html(option_tindakan);
                                },
                                error: function(response) {
                                    console.log(response);
                                }
                            });
                        } else {
                            $("select#selecttindakan").html("<option value=''></option>");
                            $("#selecttindakan").val("").trigger('change');
                            _("selecttindakan").disabled = true;
                        }
                        break;
                    case "kelastindakanrr":
                        let kdkelasrr = $(id).val();
                        if (kdkelasrr != "-") {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('tindakan/getListTindakanRR'); ?>",
                                data: {
                                    kdkelasrr
                                },
                                dataType: "JSON",
                                success: function(data) {
                                    _("selecttindakanrr").disabled = false;
                                    $("#selecttindakanrr").val("").trigger('change');
                                    let option_tindakan = "<option value='-'>-- Pilih Tindakan RR --</option>";
                                    for (let i = 0; i < data.length; i++) {
                                        option_tindakan += /*html*/ `<option value='${data[i].kdtarif};${data[i].tindakan};${data[i].tarif};${data[i].kelas};${data[i].kdtindakan}'>${data[i].tindakan} - ${tambahRP(data[i].tarif)}</option>`;
                                    }
                                    $("select#selecttindakanrr").html(option_tindakan);
                                },
                                error: function(response) {
                                    console.log(response);
                                }
                            });
                        } else {
                            $("select#selecttindakanrr").html("<option value=''></option>");
                            $("#selecttindakanrr").val("").trigger('change');
                            _("selecttindakanrr").disabled = true;
                        }
                        break;
                    case "kelastindakanlab":
                        let kdkelaslab = $(id).val();
                        if (kdkelaslab != "-") {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('tindakan/getListTindakanLab'); ?>",
                                data: {
                                    kdkelaslab
                                },
                                dataType: "JSON",
                                success: function(data) {
                                    _("selecttindakanlab").disabled = false;
                                    $("#selecttindakanlab").val("").trigger('change');
                                    let option_tindakan = "<option value='-'>-- Pilih Tindakan Laboratorium --</option>";
                                    for (let i = 0; i < data.length; i++) {
                                        option_tindakan += /*html*/ `<option value='${data[i].kdTarif};${data[i].tindakan};${data[i].tarif};${data[i].kelas};${data[i].kdTindakan};${data[i].kelompokTindakan}'>${data[i].tindakan} - ${tambahRP(data[i].tarif)}</option>`;
                                    }
                                    $("select#selecttindakanlab").html(option_tindakan);
                                },
                                error: function(response) {
                                    console.log(response);
                                }
                            });
                        } else {
                            $("select#selecttindakanlab").html("<option value=''></option>");
                            $("#selecttindakanlab").val("").trigger('change');
                            _("selecttindakanlab").disabled = true;
                        }
                        break;
                    default:
                        break;
                }
                // if (jenis == "implan") {
                //     let val = $(id).val();
                //     if (val == "YA") {
                //         _("selectimplan").disabled = false;
                //     } else {
                //         $('#selectimplan').val("").trigger('change');
                //         _("selectimplan").disabled = true;
                //     }
                // } else if (jenis == "kelastindakan") {
                //     let kdkelas = $(id).val();
                //     if (kdkelas != "-") {
                //         $.ajax({
                //             type: "POST",
                //             url: "<?php echo base_url('tindakan/getListTindakanOP'); ?>",
                //             data: {
                //                 kdkelas
                //             },
                //             dataType: "JSON",
                //             success: function(data) {
                //                 _("selecttindakan").disabled = false;
                //                 $("#selecttindakan").val("").trigger('change');
                //                 let option_tindakan = "<option value='-'>-- Pilih Tindakan Operasi --</option>";
                //                 for (let i = 0; i < data.length; i++) {
                //                     option_tindakan += /*html*/ `<option value='${data[i].kdtarif};${data[i].tindakan};${data[i].tarif};${data[i].kelas};${data[i].kdtindakan}'>${data[i].tindakan} - ${tambahRP(data[i].tarif)}</option>`;
                //                 }
                //                 $("select#selecttindakan").html(option_tindakan);
                //             },
                //             error: function(response) {
                //                 console.log(response);
                //             }
                //         });
                //     } else {
                //         $("select#selecttindakan").html("<option value=''></option>");
                //         $("#selecttindakan").val("").trigger('change');
                //         _("selecttindakan").disabled = true;
                //     }
                // } else if (jenis == "kelastindakanlab") {
                //     let kdkelas = $(id).val();
                //     if (kdkelas != "-") {
                //         $.ajax({
                //             type: "POST",
                //             url: "<?php echo base_url('tindakan/getListTindakanLab'); ?>",
                //             data: {
                //                 kdkelas
                //             },
                //             dataType: "JSON",
                //             success: function(data) {
                //                 _("selecttindakanlab").disabled = false;
                //                 $("#selecttindakanlab").val("").trigger('change');
                //                 let option_tindakan = "<option value='-'>-- Pilih Tindakan Laboratorium --</option>";
                //                 for (let i = 0; i < data.length; i++) {
                //                     option_tindakan += /*html*/ `<option value='${data[i].kdTarif};${data[i].tindakan};${data[i].tarif};${data[i].kelas};${data[i].kdTindakan};${data[i].kelompokTindakan}'>${data[i].tindakan} - ${tambahRP(data[i].tarif)}</option>`;
                //                 }
                //                 $("select#selecttindakanlab").html(option_tindakan);
                //             },
                //             error: function(response) {
                //                 console.log(response);
                //             }
                //         });
                //     } else {
                //         $("select#selecttindakanlab").html("<option value=''></option>");
                //         $("#selecttindakanlab").val("").trigger('change');
                //         _("selecttindakanlab").disabled = true;
                //     }
                // }
            }

            function getTindakanOperasi(noregop) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getTindakanOperasi'); ?>",
                    data: {
                        noregop: noregop
                    },
                    dataType: "JSON",
                    success: function(data) {
                        _("notindakanoperasi").value = data.notindakanop == null ? "" : data.notindakanop;
                        _("iduserop").value = data.iduser;
                        _("tgluserop").value = data.tgluser;
                        _("selectdokter").disabled = false;
                        $('#selectdokter').val(data.dokterop === null ? '' : (data.dokterop).substring(1).split(";")).trigger('change');
                        _("selectperawat").disabled = false;
                        addOptionSelect(data.asistenop, "selectperawat");
                        _("selectperawatinstrument").disabled = false;
                        $('#selectperawatinstrument').val(data.perawatinstrument === null ? '' : (data.perawatinstrument.substring(1)).split(";")).trigger('change');
                        _("selectperawatsirkuler").disabled = false;
                        $('#selectperawatsirkuler').val(data.perawatsirkuler === null ? '' : (data.perawatsirkuler.substring(1)).split(";")).trigger('change');
                        _("selectradiografer").disabled = false;
                        $('#selectradiografer').val(data.radiografer === null ? '' : (data.radiografer.substring(1)).split(";")).trigger('change');
                        _("selectkamarop").disabled = false;
                        $("#selectkamarop").val(data.kamarop == null ? "-" : data.kamarop).trigger("change");
                        _("tgltindakanop").disabled = false;
                        $('#tgltindakanop').val(data.tgltindakanop == null ? "" : ubahFormatTanggal(data.tgltindakanop, 1));
                        _("jamtindakanop").disabled = false;
                        $('#jamtindakanop').val(data.tgltindakanop == null ? "" : ubahFormatTanggal(data.tgltindakanop, 0));
                        _("jamincisi").disabled = false;
                        $('#jamincisi').val(data.jamincisi == null ? "" : ubahFormatTanggal(data.jamincisi, 0));
                        _("jaminduksi").disabled = false;
                        $('#jaminduksi').val(data.jaminduksi == null ? "" : ubahFormatTanggal(data.jaminduksi, 0));
                        _("selectpakaiimplan").disabled = false;
                        $("#selectpakaiimplan").val(data.pemakaianimplan == null ? "-" : data.pemakaianimplan).trigger("change");
                        if (data.jenisimplan != null) {
                            _("selectimplan").disabled = false;
                            addOptionSelect(data.jenisimplan, "selectimplan");
                        }
                        _("selectkelastindakan").disabled = false;
                        _("btn_tambah").disabled = false;
                        getDetailTindakanOperasi(data.notindakanop);
                        _("btn_simpan_tindakan").disabled = false;
                        getDetailTindakanRR(data.notindakanop);
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            }

            function addOptionSelect(data, id) {
                if (data != null) {
                    let arr_data = data.substring(1).split(";");
                    let jml_arr_data = arr_data.length;
                    $("#" + id).val(arr_data).trigger("change");
                    let data_baru = $("#" + id).val();
                    let jml_data_baru = data_baru == null ? 0 : data_baru.length;
                    if (jml_data_baru < jml_arr_data) {
                        let dataa = "";
                        for (let i = 0; i < jml_data_baru; i++) {
                            dataa += ";" + data_baru[i];
                        }
                        let option_baru = data.replace(dataa, "").substring(1).split(";");
                        for (let a = 0; a < option_baru.length; a++) {
                            let select_data = _(id);
                            let option_data = document.createElement("option");
                            option_data.text = option_baru[a];
                            option_data.value = option_baru[a];
                            select_data.add(option_data);
                        }
                        $('#' + id).val(data.substring(1).split(";")).trigger('change');
                    } else {
                        $('#' + id).val(data.substring(1).split(";")).trigger('change');
                    }
                } else {
                    $('#' + id).val("").trigger('change');
                }
            }

            function getDetailTindakanOperasi(notinop) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getDetailTindakanOperasi'); ?>",
                    dataType: "JSON",
                    data: {
                        notinop: notinop
                    },
                    success: function(data) {
                        let table = _("tbl_tindakan");
                        table.getElementsByTagName('tbody')[0].innerHTML = "";
                        let row_count = table.tBodies[0].rows.length;
                        for (let i = 0; i < data.length; i++) {
                            let row_insert = table.tBodies[0].insertRow(row_count);

                            let OPERATOR = row_insert.insertCell(0);
                            let TINDAKAN = row_insert.insertCell(1);
                            let KELAS = row_insert.insertCell(2);
                            KELAS.style.textAlign = "center";
                            let JMLTINDAKAN = row_insert.insertCell(3);
                            let TARIF = row_insert.insertCell(4);
                            TARIF.style.textAlign = "right";
                            let SUBTOTAL = row_insert.insertCell(5);
                            SUBTOTAL.style.textAlign = "right";
                            let AKSI = row_insert.insertCell(6);
                            AKSI.style.textAlign = "CENTER";

                            let KODETARIF = row_insert.insertCell(7);
                            KODETARIF.style.display = "none";
                            let JENISTINDAKAN = row_insert.insertCell(8);
                            JENISTINDAKAN.style.display = "none";
                            let KODETINDAKAN = row_insert.insertCell(9);
                            KODETINDAKAN.style.display = "none";
                            let DATABARU = row_insert.insertCell(10);
                            DATABARU.style.display = "none";
                            let HIDDENJML = row_insert.insertCell(11);
                            HIDDENJML.style.display = "none";
                            let DATAEDIT = row_insert.insertCell(12);
                            DATAEDIT.style.display = "none";
                            let EDITOPERATOR = row_insert.insertCell(13);
                            EDITOPERATOR.style.display = "none";
                            let IDDETAIL = row_insert.insertCell(14);
                            IDDETAIL.style.display = "none";
                            let USERTGL = row_insert.insertCell(15);
                            USERTGL.style.display = "none";

                            OPERATOR.innerHTML = operatorValue('#selectdokter', data[i].operator);
                            TINDAKAN.innerHTML = (data[i].kdtarif).length != 12 ? data[i].tindakan : /*html*/ `<input type='text' class='form-control text-uppercase' value='${data[i].tindakan}'>`;
                            KELAS.innerHTML = data[i].kelas;
                            JMLTINDAKAN.innerHTML = /*html*/ `<input type='number' onpaste='return false' onwheel="blur()" onchange="hitungSubtotal(this)" class='form-control' min='1' value='${data[i].jmltindakan}' step='1' style='text-align:center;' onkeydown='return false'>`;
                            TARIF.innerHTML = data[i].kdtarif.length != 12 ? tambahRP(data[i].tarif) : /*html*/ `<input type='text' style='text-align:right' class='form-control' onkeyup="inputTarif(this)" onblur="gantiFormatBlur(this)" onfocus="gantiFormatFocus(this)" value='${tambahRP(data[i].tarif)}'>`;
                            SUBTOTAL.innerHTML = tambahRP(data[i].subtotal);
                            AKSI.innerHTML = /*html*/ `<a data-popup='tooltip' title='Hapus Tindakan' type='button' onclick="deleteTindakan(this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a>`;

                            KODETARIF.innerHTML = data[i].kdtarif;
                            JENISTINDAKAN.innerHTML = data[i].jenistindakan;
                            KODETINDAKAN.innerHTML = data[i].kdtindakan;
                            DATABARU.innerHTML = 'X';
                            HIDDENJML.innerHTML = data[i].jmltindakan;
                            DATAEDIT.innerHTML = 'T';
                            EDITOPERATOR.innerHTML = data[i].operator;
                            IDDETAIL.innerHTML = data[i].iddetail;
                            USERTGL.innerHTML = data[i].iduser + "~" + data[i].tgluser;
                            _("subtotal").innerHTML = subTotal();
                        }

                    }
                });
            }

            function insertDataTable() {
                let table = _("tbl_tindakan");
                let row_count = table.tBodies[0].rows.length;
                let data = _("selecttindakan").value;
                if (data !== '') {
                    if (data != "-") {
                        let data_array = data.split(';');
                        if (getTableValue(table, data_array[4], 9) === "") {
                            let row_insert = table.tBodies[0].insertRow(row_count);

                            let OPERATOR = row_insert.insertCell(0);
                            let TINDAKAN = row_insert.insertCell(1);
                            let KELAS = row_insert.insertCell(2);
                            KELAS.style.textAlign = "center";
                            let JMLTINDAKAN = row_insert.insertCell(3);
                            let TARIF = row_insert.insertCell(4);
                            TARIF.style.textAlign = "right";
                            let SUBTOTAL = row_insert.insertCell(5);
                            SUBTOTAL.style.textAlign = "right";
                            let AKSI = row_insert.insertCell(6);
                            AKSI.style.textAlign = "CENTER";

                            let KODETARIF = row_insert.insertCell(7);
                            KODETARIF.style.display = "none";
                            let JENISTINDAKAN = row_insert.insertCell(8);
                            JENISTINDAKAN.style.display = "none";
                            let KODETINDAKAN = row_insert.insertCell(9);
                            KODETINDAKAN.style.display = "none";
                            let DATABARU = row_insert.insertCell(10);
                            DATABARU.style.display = "none";
                            let HIDDENJML = row_insert.insertCell(11);
                            HIDDENJML.style.display = "none";
                            let DATAEDIT = row_insert.insertCell(12);
                            DATAEDIT.style.display = "none";
                            let EDITOPERATOR = row_insert.insertCell(13);
                            EDITOPERATOR.style.display = "none";
                            let IDDETAIL = row_insert.insertCell(14);
                            IDDETAIL.style.display = "none";
                            let USERTGL = row_insert.insertCell(15);
                            USERTGL.style.display = "none";

                            OPERATOR.innerHTML = operatorValue('#selectdokter');
                            TINDAKAN.innerHTML = data_array[1];
                            KELAS.innerHTML = data_array[3];
                            JMLTINDAKAN.innerHTML = /*html*/ `<input type='number' onpaste='return false' onwheel="blur()" onchange="hitungSubtotal(this)" class='form-control' min='1' value='1' step='1' style='text-align:center;' onkeydown='return false'>`;
                            TARIF.innerHTML = tambahRP(data_array[2]);
                            SUBTOTAL.innerHTML = tambahRP(data_array[2]);
                            AKSI.innerHTML = /*html*/ `<a data-popup='tooltip' title='Hapus Tindakan' type='button' onclick="deleteTindakan(this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a>`;

                            KODETARIF.innerHTML = data_array[0];
                            JENISTINDAKAN.innerHTML = 'TAMBAHAN';
                            KODETINDAKAN.innerHTML = data_array[4];
                            DATABARU.innerHTML = 'Y';
                            HIDDENJML.innerHTML = '1';
                            DATAEDIT.innerHTML = 'T';
                            EDITOPERATOR.innerHTML = '';
                            IDDETAIL.innerHTML = "";
                            USERTGL.innerHTML = "";
                            $("#selecttindakan").val("-").trigger('change');
                            _("subtotal").innerHTML = subTotal();
                        } else {
                            $("#selecttindakan").val("-").trigger('change');
                            swal({
                                title: "Gagal",
                                text: "Tindakan Sudah Dipilih!",
                                confirmButtonColor: "#EF5350",
                                type: "error"
                            });
                        }
                    } else {
                        swal({
                            title: "Gagal",
                            text: "Pilih Tindakan Terlebih Dahulu!",
                            confirmButtonColor: "#EF5350",
                            type: "error"
                        });
                    }
                } else {
                    swal({
                            title: "Biaya Tambahan",
                            text: "Apakah Ingin Menambahkan Tambahan Biaya?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#EF5350",
                            confirmButtonText: "YA",
                            cancelButtonText: "TIDAK",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                let row_insert = table.tBodies[0].insertRow(row_count);

                                let OPERATOR = row_insert.insertCell(0);
                                let TINDAKAN = row_insert.insertCell(1);
                                let KELAS = row_insert.insertCell(2);
                                KELAS.style.textAlign = "center";
                                let JMLTINDAKAN = row_insert.insertCell(3);
                                let TARIF = row_insert.insertCell(4);
                                TARIF.style.textAlign = "right";
                                let SUBTOTAL = row_insert.insertCell(5);
                                SUBTOTAL.style.textAlign = "right";
                                let AKSI = row_insert.insertCell(6);
                                AKSI.style.textAlign = "CENTER";

                                let KODETARIF = row_insert.insertCell(7);
                                KODETARIF.style.display = "none";
                                let JENISTINDAKAN = row_insert.insertCell(8);
                                JENISTINDAKAN.style.display = "none";
                                let KODETINDAKAN = row_insert.insertCell(9);
                                KODETINDAKAN.style.display = "none";
                                let DATABARU = row_insert.insertCell(10);
                                DATABARU.style.display = "none";
                                let HIDDENJML = row_insert.insertCell(11);
                                HIDDENJML.style.display = "none";
                                let DATAEDIT = row_insert.insertCell(12);
                                DATAEDIT.style.display = "none";
                                let EDITOPERATOR = row_insert.insertCell(13);
                                EDITOPERATOR.style.display = "none";
                                let IDDETAIL = row_insert.insertCell(14);
                                IDDETAIL.style.display = "none";
                                let USERTGL = row_insert.insertCell(15);
                                USERTGL.style.display = "none";

                                OPERATOR.innerHTML = operatorValue('#selectdokter');
                                TINDAKAN.innerHTML = /*html*/ `<input type='text' class='form-control text-uppercase'>`;
                                KELAS.innerHTML = '-';
                                JMLTINDAKAN.innerHTML = /*html*/ `<input type='number' onpaste='return false' onwheel="blur()" onchange="hitungSubtotal(this)" class='form-control' min='1' value='1' step='1' style='text-align:center;' onkeydown='return false'>`;
                                TARIF.innerHTML = /*html*/ `<input type='text' style='text-align:right' class='form-control' onkeyup="inputTarif(this)" onblur="gantiFormatBlur(this)" onfocus="gantiFormatFocus(this)">`;
                                SUBTOTAL.innerHTML = 'Rp 0,00';
                                AKSI.innerHTML = /*html*/ `<a data-popup='tooltip' title='Hapus Tindakan' type='button' onclick="deleteTindakan(this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a>`;

                                KODETARIF.innerHTML = setKodeTarifOpsional();
                                JENISTINDAKAN.innerHTML = 'TAMBAHAN';
                                KODETINDAKAN.innerHTML = '0000000';
                                DATABARU.innerHTML = 'Y';
                                HIDDENJML.innerHTML = '1';
                                DATAEDIT.innerHTML = 'T';
                                EDITOPERATOR.innerHTML = '';
                                IDDETAIL.innerHTML = '';
                                USERTGL.innerHTML = "";
                                $("#selecttindakan").val("-").trigger('change');
                            }
                        });
                }
            }

            function setKodeTarifOpsional() {
                let getDate = new Date();
                let dd = String(getDate.getDate()).padStart(2, '0');
                let mm = String(getDate.getMonth() + 1).padStart(2, '0');
                let yy = getDate.getFullYear().toString();
                let HH = String(getDate.getHours()).padStart(2, '0');
                let MM = String(getDate.getMinutes()).padStart(2, '0');
                let SS = String(getDate.getSeconds()).padStart(2, '0');
                return yy.substr(-2) + mm + dd + HH + MM + SS;
            }

            function setOperatorValue(element) {
                const table = _("tbl_tindakan");
                let row_count = table.tBodies[0].rows.length;
                let operator = [];
                for (let brs = 0; brs < row_count; brs++) {
                    operator.push(table.tBodies[0].rows[brs].cells[13].innerText);
                }
                if (row_count != 0) {
                    for (let i = 0; i < row_count; i++) {
                        table.tBodies[0].rows[i].cells[0].innerHTML = operatorValue(element, operator[i]);
                    }
                }
            }

            function operatorValue(id, op) {
                let operator = "";
                let getOperator = $(id).val();
                let style = "";
                if (getOperator != null) {
                    getOperator.forEach(function(o) {
                        if (o == op) {
                            operator += /*html*/ `<option value = '${o}' selected>${o}</option>`;
                        } else {
                            operator += /*html*/ `<option style='display:none;'>Pilih Dokter Operator</option><option value='${o}'>${o}</option>`;
                        }
                    });
                } else {
                    operator = /*html*/ `<option style='display:none;'>Isi Dokter Operator</option>`;
                    style = "style='background-color:red; color:white;'";
                }
                return /*html*/ `<select class='select form-control' ${style} onchange="editOperatorValue(this)">${operator}</select>`;
                // return '<select multiple="multiple" class="select-multiple-tags" >'+operator+'</select>';
            }

            function editOperatorValue(element) {
                const table = _("tbl_tindakan");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let selectvalue = $(element).val();
                table.tBodies[0].rows[row].cells[13].innerHTML = selectvalue;
                let databaru = table.tBodies[0].rows[row].cells[10].innerText;
                if (databaru === 'X') {
                    table.tBodies[0].rows[row].cells[12].innerHTML = 'E';
                }
            }

            function inputTarif(element) {
                const table = _("tbl_tindakan");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let input = $(element).val().replace(/[^0-9]+/g, '');
                $(element).val(input);
                let jml = table.tBodies[0].rows[row].cells[11].innerText;
                let subtotal = jml * input;
                table.tBodies[0].rows[row].cells[5].innerHTML = tambahRP(subtotal);
                _("subtotal").innerHTML = subTotal();

                var evtobj = window.event ? event : element
                if (evtobj.keyCode == 13) {
                    $(element).blur();
                    $(element).val(tambahRP(input));
                }

                let databaru = table.tBodies[0].rows[row].cells[10].innerText;
                if (databaru === 'X') {
                    table.tBodies[0].rows[row].cells[12].innerHTML = 'E';
                }
            }

            function gantiFormatBlur(element) {
                let input = $(element).val();
                $(element).val(tambahRP(input));
            }

            function gantiFormatFocus(element) {
                let input = $(element).val();
                if (input.substring(0, 2) == 'Rp') {
                    $(element).val(hapusRP(input));
                }
            }

            function subTotal() {
                const table = _("tbl_tindakan");
                let row_count = table.tBodies[0].rows.length;
                let tempTotal = [];

                for (let brs = 0; brs < row_count; brs++) {
                    tempTotal.push(hapusRP(table.tBodies[0].rows[brs].cells[5].innerText));
                }
                let subtotal = 0;
                tempTotal.forEach(function(t) {
                    subtotal += t;
                });
                return tambahRP(subtotal);
            }

            function hitungSubtotal(element) {
                const table = _("tbl_tindakan");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let jml = $(element).val();
                let kode = table.tBodies[0].rows[row].cells[7].innerText;
                let gettarif = kode.length == 12 ? table.tBodies[0].rows[row].cells[4].children[0].value : table.tBodies[0].rows[row].cells[4].innerText;
                let tarif = hapusRP(gettarif);
                let subtotal = jml * tarif;
                table.tBodies[0].rows[row].cells[5].innerHTML = tambahRP(subtotal);
                table.tBodies[0].rows[row].cells[11].innerHTML = jml;
                // console.log(jml);
                _("subtotal").innerHTML = subTotal();
                let databaru = table.tBodies[0].rows[row].cells[10].innerText;
                if (databaru === 'X') {
                    table.tBodies[0].rows[row].cells[12].innerHTML = 'E';
                }
            }

            function deleteTindakan(element) {
                const table = _("tbl_tindakan");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let tindakanvalue = table.tBodies[0].rows[row].cells[1].innerText;
                let iddetailtindakan = table.tBodies[0].rows[row].cells[14].innerText;
                let databaru = table.tBodies[0].rows[row].cells[10].innerText;
                let notindakanvalue = $("#notindakan").val();
                swal({
                        title: "Hapus Tindakan " + tindakanvalue,
                        text: "Apakah Yakin Dihapus?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#EF5350",
                        confirmButtonText: "YA",
                        cancelButtonText: "TIDAK",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            if (databaru === 'X') {
                                _("tindakanhapus").value = _("tindakanhapus").value + ";" + iddetailtindakan;
                            }
                            table.deleteRow(row + 1);
                            _("subtotal").innerHTML = subTotal();
                        }
                    });
            }

            function getValueTindakanOperasi(table, cell, input) {
                let row_count = table.tBodies[0].rows.length;
                let row = [];
                for (let brs = 0; brs < row_count; brs++) {
                    if (table.tBodies[0].rows[brs].cells[cell].innerText === input) {
                        row.push({
                            "iddetail": table.tBodies[0].rows[brs].cells[14].innerText,
                            "operator": table.tBodies[0].rows[brs].cells[0].children[0].value,
                            "kodetarif": table.tBodies[0].rows[brs].cells[7].innerText,
                            "tindakan": table.tBodies[0].rows[brs].cells[7].innerText.length == 12 ? table.tBodies[0].rows[brs].cells[1].children[0].value : table.tBodies[0].rows[brs].cells[1].innerText,
                            "jenistindakan": table.tBodies[0].rows[brs].cells[8].innerText,
                            "kelas": table.tBodies[0].rows[brs].cells[2].innerText,
                            "tarif": table.tBodies[0].rows[brs].cells[7].innerText.length == 12 ? hapusRP(table.tBodies[0].rows[brs].cells[4].children[0].value) : hapusRP(table.tBodies[0].rows[brs].cells[4].innerText),
                            "subtotaltindakan": hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                            "kodetindakan": table.tBodies[0].rows[brs].cells[9].innerText,
                            "jmltindakan": table.tBodies[0].rows[brs].cells[11].innerText,
                            "idtgluser": table.tBodies[0].rows[brs].cells[15].innerText
                        });
                    }
                }
                return row;
            }

            function getValidasiTableValue(table, input, cell) {
                let row_count = table.tBodies[0].rows.length;
                let row = "";
                for (let brs = 0; brs < row_count; brs++) {
                    let data = typeof table.tBodies[0].rows[brs].cells[cell].children[0] !== 'undefined' ? table.tBodies[0].rows[brs].cells[cell].children[0].value : table.tBodies[0].rows[brs].cells[cell].innerText;
                    if (data === input) {
                        row += brs;
                    }
                }
                return row;
            }

            function insupTindakanOperasi() {
                let noregistrasiop = _("noregop").value;
                let notindakanop = _("notindakanoperasi").value;
                let jenis = notindakanop == "" ? "insert" : "update";
                let iduser = _("iduserop").value;
                let tgluser = _("tgluserop").value;
                let dokterop = $("#selectdokter").val();
                let asistenop = $("#selectperawat").val();
                let perawatinstrument = $("#selectperawatinstrument").val();
                let perawatsirkuler = $("#selectperawatsirkuler").val();
                let radiografer = $("#selectradiografer").val();
                let kamarop = _("selectkamarop").value;
                let tgltindakanop = _("tgltindakanop").value;
                let jamtindakanop = _("jamtindakanop").value;
                let jaminduksi = _("jaminduksi").value;
                let jamincisi = _("jamincisi").value;
                let pemakaianimplan = _("selectpakaiimplan").value;
                let jenisimplan = $("#selectimplan").val();
                let totaltarif = hapusRP(_("subtotal").innerText);
                const table = _("tbl_tindakan");
                let row_count = table.tBodies[0].rows.length;
                if (dokterop == null) {
                    swal({
                        title: "Dokter Operator",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokter").focus()
                    });
                } else if (asistenop == null) {
                    swal({
                        title: "Asisten Operasi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectperawat").focus()
                    });
                } else if (kamarop == "-") {
                    swal({
                        title: "Kamar Operasi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectkamarop").focus()
                    });
                } else if (tgltindakanop == "") {
                    swal({
                        title: "Tgl. Tindakan Operasi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("tgltindakanop").focus()
                    });
                } else if (jamtindakanop == "") {
                    swal({
                        title: "Jam Tindakan Operasi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("jamtindakanop").focus()
                    });
                } else if (jaminduksi == "") {
                    swal({
                        title: "Jam Induksi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("jaminduksi").focus()
                    });
                } else if (jamincisi == "") {
                    swal({
                        title: "Jam Incisi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("jamincisi").focus()
                    });
                } else if (pemakaianimplan == "-") {
                    swal({
                        title: "Pemakaian Implan",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectpakaiimplan").focus()
                    });
                } else if (pemakaianimplan == "YA" && jenisimplan == null) {
                    swal({
                        title: "Jenis Implan",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectimplan").focus()
                    });
                } else if (row_count == 0) {
                    swal({
                        title: "Tindakan Operasi",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error"
                    });
                } else {
                    let operator = getValidasiTableValue(table, "Pilih Dokter Operator", 0);
                    let operator2 = getValidasiTableValue(table, "Isi Dokter Operator", 0);
                    let tarif = getValidasiTableValue(table, "Rp 0,00", 5);
                    let tarif2 = getValidasiTableValue(table, "", 5);
                    let tindakanhapus = _("tindakanhapus").value;
                    if (operator == "" && operator2 == "") {
                        if (tarif == "" && tarif2 == "") {
                            let datatindakanbaru = getValueTindakanOperasi(table, 10, 'Y');
                            let datatindakanedit = getValueTindakanOperasi(table, 12, 'E');

                            // console.log(datatindakanbaru);
                            swal({
                                    title: "Tindakan Operasi",
                                    text: "Apakah Yakin Simpan?",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#EF5350",
                                    confirmButtonText: "YA",
                                    cancelButtonText: "TIDAK",
                                    closeOnConfirm: false,
                                    closeOnCancel: true
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        let arr_data = {
                                            jenis: jenis,
                                            notindakanop: notindakanop,
                                            iduser: iduser,
                                            tgluser: tgluser,
                                            dokterop: dokterop,
                                            asistenop: asistenop,
                                            perawatinstrument: perawatinstrument,
                                            perawatsirkuler: perawatsirkuler,
                                            radiografer: radiografer,
                                            kamarop: kamarop,
                                            tgltindakanop: formatTanggal("tgltindakanop", "jamtindakanop"),
                                            jaminduksi: formatTanggal("tgltindakanop", "jaminduksi"),
                                            jamincisi: formatTanggal("tgltindakanop", "jamincisi"),
                                            pemakaianimplan: pemakaianimplan,
                                            jenisimplan: jenisimplan,
                                            totaltarif: totaltarif,
                                            datatindakanedit: datatindakanedit,
                                            datatindakanbaru: datatindakanbaru,
                                            tindakanhapus: tindakanhapus
                                        };
                                        // console.log(arr_data);
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url('tindakan/insupTindakanOperasi'); ?>",
                                            data: {
                                                arr_data: arr_data
                                            },
                                            dataType: "JSON",
                                            success: function(data) {
                                                console.log(data);
                                                swal({
                                                    title: "Berhasil",
                                                    text: "Data Disimpan",
                                                    confirmButtonColor: "#66BB6A",
                                                    type: "success",
                                                }, () => getTindakanOperasi(noregistrasiop));
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
                                });
                        } else {
                            swal({
                                title: "Tarif Tindakan",
                                text: "Tidak Boleh Kosong!",
                                confirmButtonColor: "#EF5350",
                                type: "error"
                            });
                        }
                    } else {
                        swal({
                            title: "Operator Tindakan",
                            text: "Tidak Boleh Kosong!",
                            confirmButtonColor: "#EF5350",
                            type: "error"
                        });
                    }
                }
            }
            //TODO END TINDAKAN OPERASI


            //TODO BEGIN TINDAKAN RR
            // function getTindakanRR() {
            //     _("tgltindakanrr").disabled = false;
            //     _("jamtindakanrr").disabled = false;
            //     _("selectkelastindakanrr").disabled = false;
            //     _("btn_tambah_rr").disabled = false;
            //     _("btn_simpan_rr").disabled = false;
            // }

            function eventTableTindakanRR(jenis, id) {
                const table = _("tbl_tindakan_rr");
                let row = $(id).closest('td').parent()[0].sectionRowIndex;
                let iddetail = table.tBodies[0].rows[row].cells[10].innerText;
                switch (jenis) {
                    case "jmltindakan":
                        let jml = $(id).val();
                        let tarif = hapusRP(table.tBodies[0].rows[row].cells[4].innerText);
                        let subtotal = jml * tarif;
                        table.tBodies[0].rows[row].cells[5].innerHTML = tambahRP(subtotal);

                        if (iddetail != '') {
                            table.tBodies[0].rows[row].cells[9].innerHTML = 'Y';
                        }
                        _("subtotal_rr").innerHTML = subTotalRR();
                        break;
                    case "petugasrr":
                        if (iddetail != '') {
                            table.tBodies[0].rows[row].cells[9].innerHTML = 'Y';
                        }
                        break;
                    case "hapustindakanrr":
                        swal({
                                title: "Hapus Tindakan",
                                text: "Apakah Yakin Dihapus?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#EF5350",
                                confirmButtonText: "YA",
                                cancelButtonText: "TIDAK",
                                closeOnConfirm: true,
                                closeOnCancel: true
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    if (iddetail != '') {
                                        _("tindakanhapusrr").value = _("tindakanhapusrr").value + ";" + iddetail;
                                    }
                                    table.deleteRow(row + 1);
                                    _("subtotal_rr").innerHTML = subTotalRR();
                                }
                            });
                        break;
                    default:
                        break;
                }
            }

            function getDetailTindakanRR(notindakanop) {
                _("tgltindakanrr").disabled = false;
                _("jamtindakanrr").disabled = false;
                _("selectkelastindakanrr").disabled = false;
                _("btn_tambah_rr").disabled = false;
                _("btn_simpan_rr").disabled = false;
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('tindakan/getTindakanRRPasien') ?>",
                    data: {
                        notindakanop: notindakanop
                    },
                    dataType: "JSON",
                    success: data => {
                        let table = _("tbl_tindakan_rr");
                        table.getElementsByTagName('tbody')[0].innerHTML = "";
                        let html = '';
                        data.forEach(d => {
                            html += /*html*/
                                `<tr>
                                    <td>${setPetugasRR(d.petugas)}</td>
                                    <td>${d.tindakan}</td>
                                    <td style="text-align:center">${d.kelas}</td>
                                    <td style="text-align:center"><input type='number' onpaste='return false' onwheel="blur()" onchange="eventTableTindakanRR('jmltindakan',this)" class='form-control' min='1' value='${d.jmltindakan}' step='1' style='text-align:center;' onkeydown='return false'></td>
                                    <td style="text-align:right">${tambahRP(d.tarif)}</td>
                                    <td style="text-align:right">${tambahRP(d.subtotal)}</td>
                                    <td style="text-align:center"><a data-popup='tooltip' title='Hapus Tindakan' type='button' onclick="eventTableTindakanRR('hapustindakanrr',this);" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a></td>
                                    <td style="display:none">${d.kdtindakan}</td>
                                    <td style="display:none">${d.kdtarif}</td>
                                    <td style="display:none">T</td>
                                    <td style="display:none">${d.iddetail}</td>
                                </tr>`;
                            $('#tgltindakanrr').val(d.tgltindakan == null ? "" : ubahFormatTanggal(d.tgltindakan, 1));
                            $('#jamtindakanrr').val(d.tgltindakan == null ? "" : ubahFormatTanggal(d.tgltindakan, 0));
                        });
                        table.getElementsByTagName('tbody')[0].innerHTML = html;
                        $('.select-2').select2({
                            width: "300px"
                        });
                        _("subtotal_rr").innerHTML = subTotalRR();
                    },
                    error: response => {
                        console.log(response);
                    }
                });
            }

            function subTotalRR() {
                const table = _("tbl_tindakan_rr");
                let row_count = table.tBodies[0].rows.length;
                let tempTotal = [];

                for (let brs = 0; brs < row_count; brs++) {
                    tempTotal.push(hapusRP(table.tBodies[0].rows[brs].cells[5].innerText));
                }
                let subtotal = 0;
                tempTotal.forEach(function(t) {
                    subtotal += t;
                });
                return tambahRP(subtotal);
            }

            function setPetugasRR(op = "") {
                let dataOperator = "";
                let arr_op = op != "" ? op.split(";") : "";
                $.ajax({
                    async: false,
                    url: "<?php echo base_url('tindakan/getPetugasRR'); ?>",
                    dataType: "JSON",
                    success: data => {
                        data.forEach(o => {
                            let operator = o.namapetugasMedis;
                            if (operator != "-") {
                                let selected_op = arr_op.indexOf(operator) != -1 ? "selected" : "";
                                dataOperator += `<option value="${operator}" ${selected_op}>${operator}</option>`;
                            }
                        });
                    },
                    error: response => {
                        console.log(response);
                    }
                });
                return /*html*/ `<select style="width:100%;" multiple="multiple" class="select select-2" data-placeholder="-- Pilih Petugas RR --" onchange="eventTableTindakanRR('petugasrr', this)">
                    ${dataOperator}
                </select>`;
            }

            _("btn_tambah_rr").addEventListener("click", () => {
                let tindakanrr = _("selecttindakanrr").value;
                if (tindakanrr != '-') {
                    let data = tindakanrr.split(";");
                    if (validasiTableTindakanRR(7, data[4]) == "") {
                        const tabel = _('tbl_tindakan_rr').getElementsByTagName('tbody')[0];
                        let tr = document.createElement('tr');
                        tr.innerHTML = /*html*/
                            `<td>${setPetugasRR()}</td>
                        <td>${data[1]}</td>
                        <td>${data[3]}</td>
                        <td style="text-align:center"><input type='number' onpaste='return false' onwheel="blur()" onchange="eventTableTindakanRR('jmltindakan',this)" class='form-control' min='1' step='1' value='1' style='text-align:center;' onkeydown='return false'></td>
                        <td>${tambahRP(data[2])}</td>
                        <td>${tambahRP(data[2])}</td>
                        <td style="text-align:center"><a data-popup='tooltip' title='Hapus Tindakan' type='button' onclick="eventTableTindakanRR('hapustindakanrr',this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a></td>
                        <td style="display:none">${data[4]}</td>
                        <td style="display:none">${data[0]}</td>
                        <td style="display:none">T</td>
                        <td style="display:none"></td>`;
                        tabel.appendChild(tr);
                        $('.select-2').select2({
                            width: "300px"
                        });
                        _("subtotal_rr").innerHTML = subTotalRR();
                        $("#selecttindakanrr").val("-").trigger('change');
                    } else {
                        swal({
                            title: "Gagal",
                            text: `Tindakan Sudah Diinput!`,
                            confirmButtonColor: "#EF5350",
                            type: "error"
                        });
                    }
                } else {
                    swal({
                        title: "Gagal",
                        text: "Pilih Tindakan RR Terlebih Dahulu!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selecttindakanrr").focus()
                    });
                }
            });

            function getTableValueTindakanRR() {
                const table = _("tbl_tindakan_rr");
                let row_count = table.tBodies[0].rows.length;
                let row = [];
                for (let brs = 0; brs < row_count; brs++) {
                    row.push({
                        "iddetail": table.tBodies[0].rows[brs].cells[10].innerText,
                        "petugas": $(table.tBodies[0].rows[brs].cells[0].children[0]).val(),
                        "tindakan": table.tBodies[0].rows[brs].cells[1].innerText,
                        "jmltindakan": table.tBodies[0].rows[brs].cells[3].children[0].value,
                        "tarif": hapusRP(table.tBodies[0].rows[brs].cells[4].innerText),
                        "subtotaltindakan": hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                        "kodetarif": table.tBodies[0].rows[brs].cells[8].innerText,
                        "kodetindakan": table.tBodies[0].rows[brs].cells[7].innerText,
                        "dataedit": table.tBodies[0].rows[brs].cells[9].innerText
                    });
                }
                return row;
            }

            function validasiTableTindakanRR(cell, input) {
                const table = _("tbl_tindakan_rr");
                let row_count = table.tBodies[0].rows.length;
                let row = "";
                for (let brs = 0; brs < row_count; brs++) {
                    let kolom = table.tBodies[0].rows[brs].cells[cell];
                    let data = typeof kolom.children[0] !== 'undefined' ? $(kolom.children[0]).val() : kolom.innerText;
                    if (data == input) {
                        row += brs;
                    }
                }
                return row;
            }

            _("btn_simpan_rr").addEventListener("click", () => {
                let tabelrr = _("tbl_tindakan_rr");
                let notindakanop = _("notindakanoperasi").value;
                let tglrr = _("tgltindakanrr").value;
                let jamrr = _("jamtindakanrr").value;
                let datahapus = _("tindakanhapusrr").value;
                let datatindakan = tabelrr.tBodies[0].rows.length;
                if (tglrr == "") {
                    swal({
                        title: "Tgl. Tindakan RR",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("tgltindakanrr").focus()
                    });
                } else if (jamrr == "") {
                    swal({
                        title: "Jam Tindakan RR",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("jamtindakanrr").focus()
                    });
                } else if (datatindakan == 0) {
                    swal({
                        title: "Tindakan RR",
                        text: "Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selecttindakanrr").focus()
                    });
                } else {
                    if (validasiTableTindakanRR(0, null) != "") {
                        swal({
                            title: "Petugas RR",
                            text: "Tidak Boleh Kosong!",
                            confirmButtonColor: "#EF5350",
                            type: "error"
                        });
                    } else {
                        swal({
                                title: "Tindakan RR",
                                text: "Apakah Yakin Simpan?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#EF5350",
                                confirmButtonText: "YA",
                                cancelButtonText: "TIDAK",
                                closeOnConfirm: false,
                                closeOnCancel: true
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    let arr_data = {
                                        notindakanop: notindakanop,
                                        tgltindakanrr: formatTanggal("tgltindakanrr", "jamtindakanrr"),
                                        datahapus: datahapus,
                                        datadetailtindakan: getTableValueTindakanRR()
                                    };
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url('tindakan/insupTindakanRR'); ?>",
                                        data: {
                                            arr_data: arr_data
                                        },
                                        dataType: "JSON",
                                        success: data => {
                                            console.log(data);
                                            swal({
                                                title: "Berhasil",
                                                text: "Data Disimpan",
                                                confirmButtonColor: "#66BB6A",
                                                type: "success"
                                            }, () => {
                                                getDetailTindakanRR(notindakanop);
                                                _("tindakanhapusrr").value = "";
                                            });
                                        },
                                        error: data => {
                                            console.log(data);
                                            swal({
                                                title: "Gagal",
                                                text: "Data Tidak Disimpan!",
                                                confirmButtonColor: "#EF5350",
                                                type: "error"
                                            }, () => {
                                                getDetailTindakanRR(notindakanop);
                                                _("tindakanhapusrr").value = "";
                                            });
                                        }
                                    });
                                }
                            });
                    }
                }
            });

            // function validasiTableTindakanRR(cell, input) {
            //     const table = _("tbl_tindakan");
            //     let row_count = table.tBodies[0].rows.length;
            //     let row = "";
            //     for (let brs = 0; brs < row_count; brs++) {
            //         let kolom = table.tBodies[0].rows[brs].cells[cell];
            //         let data = typeof kolom.children[0] !== 'undefined' ? $(kolom.children[0]).val() : kolom.innerText;
            //         if (data == input) {
            //             row += brs;
            //         }
            //     }
            //     return row;
            // }
            //TODO END TINDAKAN RR


            //TODO BEGIN RESEP
            function setFormResepEnabled() {
                _("selectdokterresep").disabled = false;
                _("selectobat").disabled = false;
                _("dibutuhkan").disabled = false;
                _("aturanpakai").disabled = false;
                _("keteranganresep").disabled = false;
                _("btn_tambah_resep").disabled = false;
                _("btn_simpan_resep").disabled = false;
                _("tglawalresep").disabled = false;
                _("tglakhirresep").disabled = false;
                _("btn_tampil_resep").disabled = false;
            }

            function setDetailObat(el) {
                if (_('norm').value != '') {
                    let data = _('selectobat').value;
                    if (data != '-') {
                        let data_array = data.split(';');
                        _('stokterserdia').value = data_array[2];
                        _('satuan').value = data_array[4].toUpperCase();
                        _('harga').value = tambahRP(data_array[3]);
                        _('dibutuhkan').value = "";
                        _("validasibutuh").innerHTML = "";
                        _('aturanpakai').value = "";
                        _('keteranganresep').value = "";
                        _('dibutuhkan').disabled = false;
                        _('aturanpakai').disabled = false;
                        _('keteranganresep').disabled = false;
                        setTimeout(function() {
                            _('dibutuhkan').focus();
                        }, 0);
                    } else {
                        _('stokterserdia').value = "";
                        _('satuan').value = "";
                        _('harga').value = "";
                        _('dibutuhkan').value = "";
                        _('aturanpakai').value = "";
                        _('keteranganresep').value = "";
                        _('dibutuhkan').disabled = true;
                        _('aturanpakai').disabled = true;
                        _('keteranganresep').disabled = true;
                        _("validasibutuh").innerHTML = "";
                    }
                }
            }

            function butuhberi(el) {
                let kode = event.which || event.keyCode;
                if (kode == 13) {
                    if ($(el).attr('id') == 'dibutuhkan') {
                        if ($(el).val() != "") {
                            _("aturanpakai").focus();
                        }
                    }
                    if ($(el).attr('id') == 'aturanpakai') {
                        if ($(el).val() != "") {
                            _("keteranganresep").focus();
                        }
                    }
                    if ($(el).attr('id') == 'keteranganresep') {
                        _("btn_tambah_resep").focus();
                    }
                } else {
                    if ($(el).attr('id') == 'dibutuhkan') {
                        let tersedia = parseInt(_("stokterserdia").value);
                        let butuh = parseInt(_("dibutuhkan").value);
                        if (butuh > tersedia) {
                            _("validasibutuh").innerHTML = "<font color='red'>JUMLAH BUTUH > STOK TERSEDIA</font>";
                        } else {
                            _("validasibutuh").innerHTML = "";
                        }
                        return $(el).val($(el).val().replace(/[^0-9]+/g, ''));

                    }
                }
            }

            function validasiInsertResep(table, input, cell) {
                let row_count = table.tBodies[0].rows.length;
                let row = "";
                for (let brs = 0; brs < row_count; brs++) {
                    let data = typeof table.tBodies[0].rows[brs].cells[cell].children[0] !== 'undefined' ? table.tBodies[0]
                        .rows[brs].cells[cell].children[0].value : table.tBodies[0].rows[brs].cells[cell].innerText;
                    if (data === input) {
                        row += brs;
                    }
                }
                return row;
            }

            function insertDataTableResep() {
                let table = _("tbl_resep");
                let row_count = table.tBodies[0].rows.length;
                let data = _("selectobat").value;
                let butuh = _('dibutuhkan').value;
                let aturanpakai = _('aturanpakai').value;
                let keteranganresep = _('keteranganresep').value;
                if (data !== '-') {
                    let data_array = data.split(';');
                    if (validasiInsertResep(table, data_array[0], 8) != "") {
                        swal({
                            title: "Gagal",
                            text: data_array[1] + " Sudah Dipilih!",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("selectobat").focus()
                        });
                    } else if (butuh == '') {
                        swal({
                            title: "Gagal",
                            text: "Dibutuhkan Tidak Boleh Kosong!",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _('dibutuhkan').focus()
                        });
                    } else if (aturanpakai == '') {
                        swal({
                            title: "Gagal",
                            text: "Aturan Pakai Tidak Boleh Kosong!",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _('aturanpakai').focus()
                        });
                    } else if (_("validasibutuh").innerText != "") {
                        swal({
                            title: "Gagal",
                            text: "Jumlah Dibutuhkan > Stok Tersedia!",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _('dibutuhkan').focus()
                        });
                    } else {
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let OBAT = row_insert.insertCell(0);
                        let BUTUH = row_insert.insertCell(1);
                        BUTUH.style.textAlign = "center";
                        let SATUAN = row_insert.insertCell(2);
                        SATUAN.style.textAlign = "center";
                        let ATURANPAKAI = row_insert.insertCell(3);
                        ATURANPAKAI.style.textAlign = "center";
                        let KETERANGAN = row_insert.insertCell(4);
                        let HARGA = row_insert.insertCell(5);
                        HARGA.style.textAlign = "right";
                        let SUBTOTAL = row_insert.insertCell(6);
                        SUBTOTAL.style.textAlign = "right";
                        let AKSI = row_insert.insertCell(7);
                        AKSI.style.textAlign = "CENTER";
                        let PLU = row_insert.insertCell(8);
                        PLU.style.display = "none";
                        let HIDDENJML = row_insert.insertCell(9);
                        HIDDENJML.style.display = "none";

                        OBAT.innerHTML = data_array[1];
                        HARGA.innerHTML = tambahRP(data_array[3]);
                        BUTUH.innerHTML = butuh;
                        SATUAN.innerHTML = data_array[4].toUpperCase();
                        ATURANPAKAI.innerHTML = aturanpakai;
                        KETERANGAN.innerHTML = keteranganresep.toUpperCase();
                        SUBTOTAL.innerHTML = tambahRP(butuh * data_array[3]);
                        AKSI.innerHTML = /*html*/ `<a data-popup='tooltip' title='Hapus Item' type='button' onclick="hapusResep(this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a>`;
                        PLU.innerHTML = data_array[0];
                        HIDDENJML.innerHTML = butuh;
                        $("#selectobat").val("-").trigger('change');
                        _("dibutuhkan").value = "";
                        _("aturanpakai").value = "";
                        _("keteranganresep").value = "";
                        _("subtotalresep").innerHTML = subTotalResep();
                        _("selectobat").focus();
                    }
                } else {
                    swal({
                        title: "Gagal",
                        text: "Obat/BHP/Alkes Tidak Boleh Kosong!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectobat").focus()
                    });
                }
            }

            function subTotalResep() {
                const table = _("tbl_resep");
                let row_count = table.tBodies[0].rows.length;
                let tempTotal = [];

                for (let brs = 0; brs < row_count; brs++) {
                    tempTotal.push(hapusRP(table.tBodies[0].rows[brs].cells[6].innerText));
                }
                let subtotal = 0;
                tempTotal.forEach(function(t) {
                    subtotal += t;
                });
                return tambahRP(subtotal);
            }

            function hapusResep(element) {
                const table = _("tbl_resep");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let obat = table.tBodies[0].rows[row].cells[0].innerText;
                swal({
                        title: "Hapus Resep " + obat,
                        text: "Apakah Yakin Dihapus?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#EF5350",
                        confirmButtonText: "YA",
                        cancelButtonText: "TIDAK",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            table.deleteRow(row + 1);
                            _("subtotalresep").innerHTML = subTotalResep();
                        }
                    });
            }

            function getDataTableResepValue(table) {
                let row_count = table.tBodies[0].rows.length;
                let row = [];
                for (let brs = 0; brs < row_count; brs++) {
                    row.push({
                        "plu": table.tBodies[0].rows[brs].cells[8].innerText,
                        "obat": table.tBodies[0].rows[brs].cells[0].innerText,
                        "jumlah": table.tBodies[0].rows[brs].cells[9].innerText,
                        "aturanpakai": table.tBodies[0].rows[brs].cells[3].innerText,
                        "satuan": table.tBodies[0].rows[brs].cells[2].innerText,
                        "harga": hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                        "subtotal": hapusRP(table.tBodies[0].rows[brs].cells[6].innerText),
                        "keterangan": table.tBodies[0].rows[brs].cells[4].innerText
                    });
                }
                return row;
            }

            function setNoResep() {
                let fulltoday = getDate("ddmmyyHHMMSS");
                let setNoResep = "";
                $.ajax({
                    async: false,
                    url: "<?php echo base_url('tindakan/getNoResepLast'); ?>",
                    dataType: "JSON",
                    success: function(data) {
                        if (data === null) {
                            setNoResep = 'RSPOK' + fulltoday + "-1";
                        } else {
                            let arrId = data.noresep.split('-');
                            let angka = arrId[1];
                            setNoResep = 'RSPOK' + fulltoday + '-' + (parseInt(angka) + 1);
                        }
                    }
                });
                return setNoResep;
            }

            function insertResepPasien() {
                console.log(setNoResep());
                let dokter = _("selectdokterresep").value;
                const table = _("tbl_resep");
                let row_count = table.tBodies[0].rows.length;
                if (dokter == "-") {
                    swal({
                        title: "Dokter Pemberi Resep\nTidak Boleh Kosong",
                        text: "Data Tidak Disimpan!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokterresep").focus()
                    });
                } else if (row_count == 0) {
                    swal({
                        title: "Obat/BHP/Alkes Tidak Boleh Kosong",
                        text: "Data Tidak Disimpan!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectobat").focus()
                    });
                } else {
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
                        function(isConfirm) {
                            if (isConfirm) {
                                let tglresep = getDate("yyyy-mm-dd HH:MM:SS");
                                let nodaftar = _("noregop").value;
                                let norm = _('norm').value;
                                let noresep = setNoResep();
                                let datatablevalue = getDataTableResepValue(table);
                                let response_value = "";
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('tindakan/insertResep'); ?>",
                                    data: {
                                        noresep: noresep,
                                        nodaftar: nodaftar,
                                        norm: norm,
                                        dokter: dokter,
                                        tglresep: tglresep,
                                        datatablevalue: datatablevalue
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        swal({
                                            title: "Berhasil",
                                            text: "Data Disimpan",
                                            confirmButtonColor: "#66BB6A",
                                            type: "success",
                                        }, () => clearPermintaanResep());

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

            function clearPermintaanResep() {
                $("#selectdokterresep").val("-").trigger('change');
                _('tbl_resep').getElementsByTagName('tbody')[0].innerHTML = "";
                _("subtotalresep").innerHTML = 'Rp 0,00';
            }


            function tampilRiwayatResep() {
                let norm = _("norm").value;
                let tglawal = _("tglawalresep").value;
                let tglakhir = _("tglakhirresep").value;
                if (norm != '') {
                    if (tglawal == '' && tglakhir == '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Awal dan Tgl. Akhir\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglawalresep").focus()
                        });
                    } else if (tglawal == '' && tglakhir != '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Awal\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglawalresep").focus()
                        });
                    } else if (tglawal != '' && tglakhir == '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Akhir\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglakhirresep").focus()
                        });
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('tindakan/getRiwayatResep'); ?>",
                            data: {
                                norm: norm,
                                tglawal: tglawal,
                                tglakhir: tglakhir
                            },
                            dataType: "JSON",
                            beforeSend: function() {
                                $("#i_btn_tampil_riwayat_resep").removeClass('icon-file-text2');
                                _("i_btn_tampil_riwayat_resep").className = 'icon-spinner2 spinner';
                            },
                            success: function(data) {
                                _("i_btn_tampil_riwayat_resep").className = 'icon-file-text2';
                                if (data.length > 0) {
                                    let html = "";
                                    for (let i = 0; i < data.length; i++) {
                                        let sbst_nopenj = data[i].nopenjualan.substring(0, 4);
                                        let data_instalasi = "";
                                        if (sbst_nopenj == "PIOK") {
                                            data_instalasi = "kamar operasi";
                                        } else if (sbst_nopenj == "PIGD") {
                                            data_instalasi = data[i].instalasi.toUpperCase();
                                        } else {
                                            data_instalasi = data[i].instalasi.toUpperCase() + " - " + data[i].unit;
                                        }

                                        let kolomtable = sbst_nopenj == "P1RJ" ? /*html*/ `<th style='text-align:center'>JML NON KRONIS</th><th style='text-align:center'>JML KRONIS</th>` : /*html*/ `<th style='text-align:center'>JML</th>`;
                                        html += /*html*/
                                            `<div class='panel panel-default'>
                                                <div class='panel-heading'>
                                                    <span class='panel-title heading-text text-semibold'><b> ${data_instalasi.toUpperCase()}</b>&nbsp;&nbsp;/&nbsp;&nbsp;${data[i].tglpenjualan}&nbsp;&nbsp;/&nbsp;&nbsp;${data[i].nopenjualan}</span>
                                                    <div class='heading-elements'>
                                                        <ul class='list-inline list-inline-separate heading-text'>
                                                            <li class='text-semibold'>${data[i].dokter}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <div class='table-responsive pre-scrollable tablekonten'>
                                                            <table class='table table-xs table-framed'>
                                                                <thead>
                                                                    <tr>
                                                                        <th style='text-align:center'>OBAT</th>
                                                                        ${kolomtable}
                                                                        <th style='text-align:center'>SATUAN</th>
                                                                        <th style='text-align:center'>HARGA</th>
                                                                        <th style='text-align:center'>SUBTOTAL</th>
                                                                    </tr>
                                                                </thead>
                                                                ${getDetailRiwayatResep(data[i].nopenjualan)}
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='panel-footer'>
                                                    <div class='heading-elements'>
                                                        <span class='heading-text text-semibold'>${data[i].carabayar.toUpperCase()} / ${data[i].penjamin.toUpperCase()}</span>
                                                        <ul class='list-inline heading-text pull-right text-semibold'>
                                                            <li>${data[i].statusbayar}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>`;
                                    }
                                    _("konten-riwayat-resep").innerHTML = html;
                                } else {
                                    console.log(data);
                                    swal({
                                        title: "Riwayat Obat/BHP/Alkes",
                                        text: "Tidak Tersedia",
                                        confirmButtonColor: "#FF7042",
                                        type: "warning"
                                    });
                                }
                            },
                            error: function(data) {
                                _("i_btn_tampil_riwayat_resep").className = 'icon-file-text2';
                                console.log(data);
                            }
                        });
                    }
                }
            }

            function getDetailRiwayatResep(notransaksi) {
                let totalakhir_resep = 0;
                let html = "";
                let colspan = 4;
                $.ajax({
                    async: false,
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getDetailRiwayatObat'); ?>",
                    dataType: "JSON",
                    data: {
                        notransaksi: notransaksi
                    },
                    success: function(data) {
                        for (let i = 0; i < data.length; i++) {
                            let kolomtable = notransaksi.substring(0, 4) == 'P1RJ' ? /*html*/ `<td style='text-align:center'>${data[i].berinonkronis}</td><td style='text-align:center'>${data[i].berikronis}</td>` : /*html*/ `<td style='text-align:center'>${data[i].berikronis}</td>`;
                            colspan = notransaksi.substring(0, 4) == 'P1RJ' ? 5 : colspan;
                            html += /*html*/
                                `<tr>
                                    <td>${data[i].obat}</td>
                                    ${kolomtable}
                                    <td style='text-align:center'>${data[i].satuan.toUpperCase()}</td>
                                    <td style='text-align:right'>${tambahRP(data[i].harga)}</td>
                                    <td style='text-align:right'>${tambahRP(data[i].subtotal)}</td>
                                </tr>`;
                            totalakhir_resep += parseFloat(data[i].subtotal);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });

                return /*html*/ `<tbody>${html}</tbody>
                <tfoot>
                    <tr>
                        <td colspan='${colspan}' style='text-align:center'><b>TOTAL AKHIR</b></td>
                        <td style='text-align:right' class='text-semibold'>${tambahRP(totalakhir_resep)}</td>
                    </tr>
                </tfoot>`;
            }
            //TODO END RESEP

            //TODO BEGIN LABORATORIUM
            function setFormLabEnabled() {
                _("selectdokterlab").disabled = false;
                _("ketklinis").disabled = false;
                _("selectkelastindakanlab").disabled = false;
                _("btn_tambah_lab").disabled = false;
                _("btn_simpan_lab").disabled = false;
                _("tglawallab").disabled = false;
                _("tglakhirlab").disabled = false;
                _("btn_tampil_lab").disabled = false;
            }

            function insertDataTableLab() {
                let table = _("tbl_tindakan_lab");
                let row_count = table.tBodies[0].rows.length;
                let data = _("selecttindakanlab").value;
                if (data !== '-' && data !== '') {
                    let data_array = data.split(';');
                    if (validasiInsertResep(table, data_array[4], 0) != "") {
                        swal({
                            title: "Gagal",
                            text: "Tindakan " + data_array[1] + " Sudah Dipilih!",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("selecttindakanlab").focus()
                        });
                    } else {
                        let row_insert = table.tBodies[0].insertRow(row_count);
                        let KODE = row_insert.insertCell(0);
                        KODE.style.display = "none";
                        let TINDAKAN = row_insert.insertCell(1);
                        let JMLTINDAKAN = row_insert.insertCell(2);
                        let KELOMPOKTINDAKAN = row_insert.insertCell(3);
                        KELOMPOKTINDAKAN.style.display = "none";
                        let KELAS = row_insert.insertCell(4);
                        KELAS.style.textAlign = "center";
                        let TARIF = row_insert.insertCell(5);
                        TARIF.style.textAlign = "right";
                        let SUBTOTAL = row_insert.insertCell(6);
                        SUBTOTAL.style.textAlign = "right";
                        let AKSI = row_insert.insertCell(7);
                        AKSI.style.textAlign = "CENTER";
                        let KODETARIF = row_insert.insertCell(8);
                        KODETARIF.style.display = "none";
                        let HIDDENJML = row_insert.insertCell(9);
                        HIDDENJML.style.display = "none";

                        KODE.innerHTML = data_array[4];
                        TINDAKAN.innerHTML = data_array[1];
                        JMLTINDAKAN.innerHTML = /*html*/ `<input type='number' onpaste='return false' onwheel="blur()" onchange="hitungSubtotalLab(this)" class='form-control' min='1' value='1' step='1' style='text-align:center;' onkeydown='return false'>`;
                        KELOMPOKTINDAKAN.innerHTML = data_array[5];
                        KELAS.innerHTML = data_array[3];
                        TARIF.innerHTML = tambahRP(data_array[2]);
                        SUBTOTAL.innerHTML = tambahRP(data_array[2]);
                        AKSI.innerHTML = /*html*/ `<a type='button' data-popup='tooltip' title='Hapus Tindakan' onclick="hapusTindakanLab(this)" class='btn btn-danger btn-icon'><i class='glyphicon glyphicon-trash'></i></a>`;
                        KODETARIF.innerHTML = data_array[0];
                        HIDDENJML.innerHTML = '1';
                        $("#selecttindakanlab").val("-").trigger('change');
                        _("subtotal_lab").innerHTML = subTotalLab();
                    }
                } else {
                    swal({
                        title: "Gagal",
                        text: "Silahkan Pilih Tindakan!",
                        confirmButtonColor: "#EF5350",
                        type: "error"
                    });
                }
            }

            function subTotalLab() {
                const table = _("tbl_tindakan_lab");
                let row_count = table.tBodies[0].rows.length;
                let tempTotal = [];

                for (let brs = 0; brs < row_count; brs++) {
                    tempTotal.push(hapusRP(table.tBodies[0].rows[brs].cells[6].innerText));
                }
                let subtotal = 0;
                tempTotal.forEach(function(t) {
                    subtotal += t;
                });
                return tambahRP(subtotal);
            }

            function hitungSubtotalLab(element) {
                const table = _("tbl_tindakan_lab");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let jml = $(element).val();
                let gettarif = table.tBodies[0].rows[row].cells[5].innerText;
                let tarif = hapusRP(gettarif);
                let subtotal = jml * tarif;
                table.tBodies[0].rows[row].cells[6].innerHTML = tambahRP(subtotal);
                table.tBodies[0].rows[row].cells[9].innerHTML = jml;
                _("subtotal_lab").innerHTML = subTotalLab();
            }

            function hapusTindakanLab(element) {
                const table = _("tbl_tindakan_lab");
                let row = $(element).closest('td').parent()[0].sectionRowIndex;
                let tindakan = table.tBodies[0].rows[row].cells[1].innerText;
                swal({
                        title: "Hapus Tindakan " + tindakan,
                        text: "Apakah Yakin Dihapus?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#EF5350",
                        confirmButtonText: "YA",
                        cancelButtonText: "TIDAK",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            table.deleteRow(row + 1);
                            _("subtotal_lab").innerHTML = subTotalLab();
                        }
                    });
            }

            function getDataTableValueLab(table) {
                let row_count = table.tBodies[0].rows.length;
                let row = [];
                for (let brs = 0; brs < row_count; brs++) {
                    row.push({
                        "kodetarif": table.tBodies[0].rows[brs].cells[8].innerText,
                        "tindakan": table.tBodies[0].rows[brs].cells[1].innerText,
                        "tarif": hapusRP(table.tBodies[0].rows[brs].cells[5].innerText),
                        "subtotaltindakan": hapusRP(table.tBodies[0].rows[brs].cells[6].innerText),
                        "jmltindakan": table.tBodies[0].rows[brs].cells[9].innerText
                    });
                }
                return row;
            }

            function setNoRegistrasiLab() {
                let fulltoday = getDate("ddmmyyHHMMSS");
                let setNoRegLab = "";
                let setNoTinLab = "";
                let setNo = "";
                let getkodenomor = _("noreg").value.substring(0, 2);
                let insta = "";
                if (getkodenomor.toLowerCase() == "ri") {
                    insta = "RILAB";
                } else {
                    insta = "RJLAB";
                }
                let tind = "TLAB";
                $.ajax({
                    type: "POST",
                    async: false,
                    url: "<?php echo base_url('tindakan/getLastNoLab'); ?>",
                    data: {
                        getkodenomor: getkodenomor
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data === null) {
                            setNoRegLab = insta + fulltoday + "-1";
                            setNoTinLab = tind + fulltoday + "-1";
                            setNo = setNoRegLab + ";" + setNoTinLab;
                        } else {
                            let arrId = data["noreg"].noreg.split('-');
                            let angka = arrId[1];
                            setNoRegLab = insta + fulltoday + '-' + (parseInt(angka) + 1);
                            let arrIdTin = data["notin"].notin.split('-');
                            let angkaTin = arrIdTin[1];
                            setNoTinLab = tind + fulltoday + '-' + (parseInt(angkaTin) + 1);
                            setNo = setNoRegLab + ";" + setNoTinLab;
                        }
                    }
                });
                return setNo;
            }

            function insertPermintaanLab() {
                // console.log(setNoRegistrasiLab());
                let getkodenomor = _("noreg").value.substring(0, 2);
                let ketklinis = _("ketklinis").value;
                let dokterlab = _("selectdokterlab").value;
                const table = _("tbl_tindakan_lab");
                let row_count = table.tBodies[0].rows.length;
                if (dokterlab == "-") {
                    swal({
                        title: "Dokter Pengirim Permintaan Laboratorium\nTidak Boleh Kosong",
                        text: "Data Tidak Disimpan!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("selectdokterlab").focus()
                    });
                } else if (ketklinis == "") {
                    swal({
                        title: "Keterangan Klinis Tidak Boleh Kosong",
                        text: "Data Tidak Disimpan!",
                        confirmButtonColor: "#EF5350",
                        type: "error",
                        onClose: _("ketklinis").focus()
                    });
                } else if (row_count == 0) {
                    swal({
                        title: "Tindakan Tidak Boleh Kosong",
                        text: "Data Tidak Disimpan!",
                        confirmButtonColor: "#EF5350",
                        type: "error"
                    });
                } else {
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
                        function(isConfirm) {
                            if (isConfirm) {
                                let tglmasuklab = getDate("yyyy-mm-dd HH:MM:SS");
                                let nodaftar = _("nodaftar").value;
                                let nomor = setNoRegistrasiLab();
                                let noregistrasilab = nomor.split(";")[0];
                                let notinlab = nomor.split(";")[1];
                                let totaltindakan = hapusRP(_("subtotal_lab").innerText);
                                let datatablevalue = getDataTableValueLab(table);
                                // console.log([tglmasuklab,nodaftar,noregistrasilab,notinlab,totaltindakan,datatablevalue]);
                                // let response_value="";
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('tindakan/insertPermintaanLab'); ?>",
                                    data: {
                                        getkodenomor: getkodenomor,
                                        noregistrasilab: noregistrasilab,
                                        nodaftar: nodaftar,
                                        tglmasuklab: tglmasuklab,
                                        dokterlab: dokterlab,
                                        ketklinis: ketklinis,
                                        notinlab: notinlab,
                                        totaltindakan: totaltindakan,
                                        datatablevalue: datatablevalue
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        swal({
                                            title: "Berhasil",
                                            text: "Data Disimpan",
                                            confirmButtonColor: "#66BB6A",
                                            type: "success",
                                        }, () => clearPermintaanLab());

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

            function clearPermintaanLab() {
                $("#selectdokterlab").val("-").trigger('change');
                _("ketklinis").value = "";
                $("#selectkelastindakanlab").val("-").trigger("change");
                _('tbl_tindakan_lab').getElementsByTagName('tbody')[0].innerHTML = "";
                _("subtotal_lab").innerHTML = "Rp 0,00";
                // getRiwayatLab(_("norm").value);
            }

            function tampilRiwayatLab() {
                let norm = _("norm").value;
                let tglawal = _("tglawallab").value;
                let tglakhir = _("tglakhirlab").value;
                if (norm != '') {
                    if (tglawal == '' && tglakhir == '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Awal dan Tgl. Akhir\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglawallab").focus()
                        });
                    } else if (tglawal == '' && tglakhir != '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Awal\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglawallab").focus()
                        });
                    } else if (tglawal != '' && tglakhir == '') {
                        swal({
                            title: "Gagal Ditampilkan",
                            text: "Tgl. Akhir\nTidak Boleh Kosong",
                            confirmButtonColor: "#EF5350",
                            type: "error",
                            onClose: _("tglakhirlab").focus()
                        });
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('tindakan/getRiwayatLab'); ?>",
                            data: {
                                norm: norm,
                                tglawal: tglawal,
                                tglakhir: tglakhir
                            },
                            dataType: "JSON",
                            beforeSend: function() {
                                $("#i_btn_tampil_riwayat_lab").removeClass('icon-file-text2');
                                _("i_btn_tampil_riwayat_lab").className = 'icon-spinner2 spinner';
                            },
                            success: function(data) {
                                _("i_btn_tampil_riwayat_lab").className = 'icon-file-text2';
                                if (data.length > 0) {
                                    let html = "";
                                    for (let i = 0; i < data.length; i++) {
                                        let unitasal = data[i].unitasal == "OK IBS" ? "kamar operasi" : data[i].unitasal;
                                        let klinis = data[i].ketklinis == null ? "-" : data[i].ketklinis.toUpperCase();

                                        html += /*html*/
                                            `<div class='panel panel-default'>
                                                <div class='panel-heading'>
                                                    <span class='panel-title heading-text text-semibold'><b>${unitasal.toUpperCase()}</b>&nbsp;&nbsp;/&nbsp;&nbsp;${formatTanggalData(data[i].tglreg)}&nbsp;&nbsp;/&nbsp;&nbsp;${data[i].noreg}</span>
                                                    <div class='heading-elements'>
                                                        <ul class='list-inline list-inline-separate heading-text'>
                                                            <li class='text-semibold'>PENGIRIM : ${data[i].dokter}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class='panel-body'>
                                                    <div class='form-group'>
                                                        <div class='table-responsive pre-scrollable tablekonten'>
                                                            <table class='table table-xs table-framed'>
                                                                <thead>
                                                                    <tr>
                                                                        <th style='text-align:center'>TINDAKAN</th>
                                                                        <th style='text-align:center'>JUMLAH</th>
                                                                        <th style='text-align:center'>KELAS</th>
                                                                        <th style='text-align:center'>PETUGAS LAB</th>
                                                                        <th style='text-align:center'>STATUS TINDAKAN</th>
                                                                        <th style='text-align:center'>TARIF</th>
                                                                        <th style='text-align:center'>SUBTOTAL</th>
                                                                    </tr>
                                                                </thead>
                                                                ${tampilDetailRiwayatLab(data[i].noreg, data[i].notind)}
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='panel-footer'>
                                                    <div class='heading-elements'>
                                                        <span class='heading-text text-semibold'> KLINIS : &nbsp;${klinis}</span>
                                                    </div>
                                                </div>
                                            </div>`;
                                    }
                                    _("konten-riwayat-lab").innerHTML = html;
                                } else {
                                    swal({
                                        title: "Riwayat Laboratorium",
                                        text: "Tidak Tersedia",
                                        confirmButtonColor: "#FF7042",
                                        type: "warning"
                                    });
                                }
                            },
                            error: function(data) {
                                _("i_btn_tampil_riwayat_lab").className = 'icon-file-text2';
                                console.log(data);
                            }
                        });
                    }
                }
            }

            function tampilDetailRiwayatLab(noreg, notin) {
                let totalakhir_lab = 0;
                let html = "";
                $.ajax({
                    async: false,
                    type: "POST",
                    url: "<?php echo base_url('tindakan/getDetailRiwayatLab'); ?>",
                    dataType: "JSON",
                    data: {
                        noreg: noreg,
                        notin: notin
                    },
                    success: function(data) {
                        for (let i = 0; i < data.length; i++) {
                            let petugasmedis = data[i].petugasmedis == null ? "-" : data[i].petugasmedis;
                            html += /*html*/
                                `<tr>
                                    <td>${data[i].tindakan}</td>
                                    <td style='text-align:center'>${data[i].jml}</td>
                                    <td style='text-align:center'>${data[i].kelas}</td>
                                    <td>${petugasmedis}</td>
                                    <td style='text-align:center'>${data[i].statustindakan}</td>
                                    <td style='text-align:right'>${tambahRP(data[i].tarif)}</td>
                                    <td style='text-align:right'>${tambahRP(data[i].subtotal)}</td>
                                </tr>`;
                            totalakhir_lab += parseFloat(data[i].subtotal);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });

                return /*html*/ `<tbody>${html}</tbody>
                <tfoot>
                    <tr>
                        <td colspan='6' style='text-align:center'><b>TOTAL AKHIR</b></td>
                        <td style='text-align:right' class='text-semibold'>${tambahRP(totalakhir_lab)}</td>
                    </tr>
                </tfoot>`;
            }
            //TODO END LABORATORIUM

            //TODO BEGIN GLOBAL
            function getTableValue(table, input, cell) {
                let row_count = table.tBodies[0].rows.length;
                let row = "";
                for (let brs = 0; brs < row_count; brs++) {
                    let data = typeof table.tBodies[0].rows[brs].cells[cell].children[0] !== 'undefined' ? table.tBodies[0]
                        .rows[brs].cells[cell].children[0].value : table.tBodies[0].rows[brs].cells[cell].innerText;
                    if (data === input) {
                        row += brs;
                    }
                }
                return row;
            }


            function konfirmasiSelesai() {
                swal({
                        title: "Selesai Tindakan",
                        text: "Apakah Yakin Selesai Melakukan Tindakan?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#EF5350",
                        confirmButtonText: "YA",
                        cancelButtonText: "TIDAK",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            let statusop = 4;
                            let noregop = _("noregop").value;
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('tindakan/konfirmasiSelesaiTindakan'); ?>",
                                data: {
                                    noregop: noregop,
                                    statusop: statusop
                                },
                                success: function(data) {
                                    console.log(data);
                                    swal({
                                        title: "Berhasil",
                                        text: "Data Disimpan",
                                        confirmButtonColor: "#66BB6A",
                                        type: "success",
                                    }, () => {
                                        clearForm();
                                        setCount();
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
                    }
                );
            }

            function clearForm() {
                //PASIEN
                _("nama").value = "";
                _("norm").value = "";
                _("tmptgllahir").value = "";
                _("umur").value = "";
                _("jk").value = "";
                _("alamat").value = "";
                _("nodaftar").value = "";
                _("tgldaftar").value = "";
                _("noreg").value = "";
                _("tglreg").value = "";
                _("instalasi").value = "";
                _("ruangpoli").value = "";
                _("kelas").value = "";
                _("carabayar").value = "";
                _("penjamin").value = "";
                _("jenisop").innerHTML = "";
                _("jenisop").className = 'label label-default';
                _("keterangan").value = "";
                _("noregop").value = "";
                _("tglregop").value = "";
                _("dokterpengirim").value = "";
                _("wktpesanop").value = "";
                _("wktpelaksanaan").value = "";
                _("btn_selesai").disabled = true;
                //DIAGNOSA
                _("iddiagnosa").value = "";
                _("iduserdiagnosa").value = "";
                _("tgluserdiagnosa").value = "";
                $('#selectsarscovid').val("-").trigger('change');
                _("selectsarscovid").disabled = true;
                $('#selectdokterdiagnosapra').val("-").trigger('change');
                _("selectdokterdiagnosapra").disabled = true;
                $('#diagnosapre').val("").trigger('change');
                _("diagnosapre").disabled = true;
                $('#selectdokterdiagnosapost').val("-").trigger('change');
                _("selectdokterdiagnosapost").disabled = true;
                $('#diagnosapost').val("-").trigger('change');
                _("diagnosapost").disabled = true;
                _('tbl_diagnosa').getElementsByTagName('tbody')[0].innerHTML = '';
                _("btn_simpan_diagnosaprapost").disabled = true;

                //ANESTESI
                _("notindakananestesi").value = "";
                _("iduseranestesi").value = "";
                _("tgluseranestesi").value = "";
                $('#selectdokteranestesi').val("").trigger('change');
                _("selectdokteranestesi").disabled = true;
                $('#selectasistenanestesi').val("").trigger('change');
                _("selectasistenanestesi").disabled = true;
                _("tglanestesi").value = "";
                _("tglanestesi").disabled = true;
                _("jamanestesi").value = "";
                _("jamanestesi").disabled = true;
                $('#selectanestesi').val("").trigger('change');
                _("selectanestesi").disabled = true;
                $('#selecttindakananestesi').val("").trigger('change');
                _("selecttindakananestesi").disabled = true;
                _("keterangananestesi").value = "";
                _("keterangananestesi").disabled = true;
                _("btn_simpan_anestesi").disabled = true;

                //TINDAKAN OPERASI
                _("notindakanoperasi").value = "";
                _("iduserop").value = "";
                _("tgluserop").value = "";
                $('#selectdokter').val("").trigger('change');
                _("selectdokter").disabled = true;
                $('#selectperawat').val("").trigger('change');
                _("selectperawat").disabled = true;
                $('#selectperawatinstrument').val("").trigger('change');
                _("selectperawatinstrument").disabled = true;
                $('#selectperawatsirkuler').val("").trigger('change');
                _("selectperawatsirkuler").disabled = true;
                $('#selectradiografer').val("").trigger('change');
                _("selectradiografer").disabled = true;
                $('#selectkamarop').val("-").trigger('change');
                _("selectkamarop").disabled = true;
                _("tgltindakanop").value = "";
                _("tgltindakanop").disabled = true;
                _("jamtindakanop").value = "";
                _("jamtindakanop").disabled = true;
                _("jamincisi").value = "";
                _("jamincisi").disabled = true;
                _("jaminduksi").value = "";
                _("jaminduksi").disabled = true;
                $('#selectpakaiimplan').val("-").trigger('change');
                _("selectpakaiimplan").disabled = true;
                $('#selectkelastindakan').val("-").trigger('change');
                _("selectkelastindakan").disabled = true;
                _("btn_tambah").disabled = true;
                _("tindakanhapus").value = "";
                _('tbl_tindakan').getElementsByTagName('tbody')[0].innerHTML = '';
                _("subtotal").innerHTML = "Rp 0,00";
                _("btn_simpan_tindakan").disabled = true;

                //TINDAKAN RR
                _("tgltindakanrr").value = "";
                _("tgltindakanrr").disabled = true;
                _("jamtindakanrr").value = "";
                _("jamtindakanrr").disabled = true;
                $('#selectkelastindakanrr').val("-").trigger('change');
                _("selectkelastindakanrr").disabled = true;
                _("btn_tambah_rr").disabled = true;
                _('tbl_tindakan_rr').getElementsByTagName('tbody')[0].innerHTML = '';
                _("subtotal_rr").innerHTML = "Rp 0,00";
                _("btn_simpan_rr").disabled = true;

                //RESEP
                $('#selectdokterresep').val("-").trigger('change');
                _("selectdokterresep").disabled = true;
                $('#selectobat').val("-").trigger('change');
                _("selectobat").disabled = true;
                _("stokterserdia").value = "";
                _("satuan").value = "";
                _("harga").value = "";
                _("dibutuhkan").value = "";
                _("dibutuhkan").disabled = true;
                _("aturanpakai").value = "";
                _("aturanpakai").disabled = true;
                _("keteranganresep").value = "";
                _("keteranganresep").disabled = true;
                _("btn_tambah_resep").disabled = true;
                _('tbl_resep').getElementsByTagName('tbody')[0].innerHTML = '';
                _("subtotalresep").innerHTML = "Rp 0,00";
                _("btn_simpan_resep").disabled = true;
                _("tglawalresep").value = "";
                _("tglawalresep").disabled = true;
                _("tglakhirresep").value = "";
                _("tglakhirresep").disabled = true;
                _("btn_tampil_resep").disabled = true;
                _("konten-riwayat-resep").innerHTML = "";

                //LABORATORIUM
                $('#selectdokterlab').val("-").trigger('change');
                _("selectdokterlab").disabled = true;
                _("ketklinis").value = "";
                _("ketklinis").disabled = true;
                $('#selectkelastindakanlab').val("-").trigger('change');
                _("selectkelastindakanlab").disabled = true;
                _("btn_tambah_lab").disabled = true;
                _('tbl_tindakan_lab').getElementsByTagName('tbody')[0].innerHTML = '';
                _("subtotal_lab").innerHTML = "Rp 0,00";
                _("btn_simpan_lab").disabled = true;
                _("tglawallab").value = "";
                _("tglawallab").disabled = true;
                _("tglakhirlab").value = "";
                _("tglakhirlab").disabled = true;
                _("btn_tampil_lab").disabled = true;
                _('konten-riwayat-lab').innerHTML = "";
            }
            //TODO END GLOBAL
        </script>