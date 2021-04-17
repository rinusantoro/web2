<?php
// inisiasi variable yang digunakan
// nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";
// harga per unit peralatan
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;
// jumlah peralatan yang ada
$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;
// total harga per jenis peralatan
$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;
// hitung grand total nilai peralatan
$tharga = $th1 + $th2+ $th3 + $th4;
// besar diskon
$diskon = 5;
// jumlah total diskon yang diberikan
$tdiskon = ($diskon * $tharga)/100;
// jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;
?>
<html>
<head>
<title>Daftar Peralatan Yang Dibeli</title>
</head>
<style TYPE="text/css">
body {
font-size: 14pt;
}
table {
font-size: 25pt;
}
</style>
<body>
<center>
<font face="comic sans serif" size=5 color= "blue">Contoh Perhitungan dengan PHP</font>
<table border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4" align="center" valign="middle">
<b>Daftar Pemesanan Peralatan Kantor</b>
</td>
</tr>
<tr>
<td><b>Nama Peralatan</b></td>
<td><b>Jumlah</b></td>
<td><b>Harga Satuan</b></td>
<td><b>Jumlah Harga</b></td>
</tr>
<?php
// Mulai untuk mengisi tabel daftar dengan data yang ada
?>
<tr>
<td align="left"><?php echo $brg1; ?></td>
<td align="right"><?php echo $jmlbrg1; ?></td>
<td align="right"><?php echo $harga1; ?></td>
<td align="right"><?php echo $th1; ?></td>
</tr>
<tr>
<td align="left"><?php echo $brg2; ?></td>
<td align="right"><?php echo $jmlbrg2; ?></td>
<td align="right"><?php echo $harga2; ?></td>
<td align="right"><?php echo $th2; ?></td>
</tr>
<tr>
<td align="left"><?php echo $brg3; ?></td>
<td align="right"><?php echo $jmlbrg3; ?></td>
<td align="right"><?php echo $harga3; ?></td>
<td align="right"><?php echo $th3; ?></td>
</tr>
<tr>
<td align="left"><?php echo $brg4; ?></td>
<td align="right"><?php echo $jmlbrg4; ?></td>
<td align="right"><?php echo $harga4; ?></td>
<td align="right"><?php echo $th4; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Total Harga</td>
<td align="right"><?php echo $tharga; ?></td>
</tr>
<tr>
<td colspan="3" align="right">
Diskon <?php echo "( $diskon % )"; ?></td>
<td align="right"><?php echo $tdiskon; ?></td>
</tr>
<tr>
<td colspan="3" align="right">Jumlah harus dibayar</td>
<td align="right"><?php echo $tdibayar; ?></td>
</tr>
</table>
</center>
</body>
</html>