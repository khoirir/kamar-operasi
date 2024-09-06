<?php
    $pdf = new Pdf('P', 'mm', array(22, 33), true, 'UTF-8', false);
    $pdf->SetTitle('Contoh');
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
    $html='<html>
<head>
	<title>PDF</title>
</head>
<body>
	<table style="width:100%;border-collapse: collapse;">
		<tr>
			<td style="width: 25%">
				<img style="width: 75px; float: right;" src="logo_pemprov1.png">
			</td>
			<td style="text-align: center; width: 50%">
				<font face="Bookman Old Style, serif" style="font-size:12px"><b>PEMERINTAH PROVINSI JAWA TIMUR<br/>DINAS KESEHATAN<br/>RSU KARSA HUSADA BATU</b></font><br/><font face="Bookman Old Style, serif" style="font-size:10px">JL. A. YANI 10 – 13 BATU<br/>Telp. (0341) 596898 – 591076 Fax. (0341) 596901</font>
			</td>
			<td style="width: 25%">
				<img style="width: 100px; float: left;" src="logorskh2.png"><font face="Bookman Old Style, serif" style="font-size:10px"><b>RM. 007H/1-2/Rev I</b></font>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				&nbsp;
			</td>
		</tr>
	</table>
	<table style="width:100%; border: 1px solid black; border-collapse: collapse;">
		<tr>
			<td colspan="5" style="text-align: center;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:14px"><b>LAPORAN OPERASI</b></font>
			</td>
			<td style="padding-left: 5px;">
				<font face="Bookman Old Style, serif" style="font-size:10px">No. RM <br/>Nama Pasien<br/>Tgl. Lahir<br/>Alamat</font>
			</td>
			<td>
				<font face="Bookman Old Style, serif" style="font-size:10px">:<br/>:<br/>:<br/>:</font>
			</td>
			<td colspan="3">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Operator</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">:</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Asisten Bedah</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">:</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
			<td colspan="2" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Instrumentir</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">:</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Diagnosa Pra Bedah</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">:</font>
			</td>
			<td colspan="7" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Diagnosa Pasca Bedah</font>
			</td>
			<td style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">:</font>
			</td>
			<td colspan="7" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px;">Jaringan yang di-eksisi / -insisi :</font>
			</td>
			<td colspan="6" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">&nbsp;</font>
			</td>
			<td colspan="2" style="padding: 5px;border: 1px solid black;">
				<font face="Bookman Old Style, serif" style="font-size:11px">Dikirim untuk Pemeriksaan <b>PA :</b></font><br/><div class="square"></div><font face="Bookman Old Style, serif" style="font-size:11px; padding-left: 5px;">YA</font><br/><div style="height: 10px;width: 10px;background-color: #fff;border: 1px solid black;display: inline-block;"></div><font face="Bookman Old Style, serif" style="font-size:11px; padding-left: 5px;">TIDAK</font>
			</td>
		</tr>
	</table>
</body>
<style type="text/css">
	.square {
  		height: 5px;
  		width: 5px;
  		background-color: #fff;
  		border: 1px solid black;
  		display: inline-block;
	}
</style>
</html>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('contoh1.pdf', 'I');
?>