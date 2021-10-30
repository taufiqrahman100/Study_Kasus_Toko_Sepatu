<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pembelian</title>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->

	<center>
        <h1> STRUK PEMBAYARAN</h1>
        <h2>TOKO SEPATU TONG MEULI</h2>
	</center>
	<center>
         <table style="margin:30px auto;" width="250px" bgcolor="Red">
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
				<td>	<?= $nama; ?></td>
            </tr>

            <tr>
                <td>NOMOR TELPON</td>
                <td>:</td>
                <td>   <?= $nhp; ?></td>
             </tr>

            <tr>
				<td>MERK SEPATU</td>
                <td>:</td>
                <td>    <?= $merk; ?></td>
            </tr>

            <tr>
                <td>SIZE</td>
                <td>:</td>
                 <td>  <?= $ukuran; ?></td>
            </tr>

            <tr>
				<td>HARGA </td>
				<td>:</td>
                 <td>Rp. <?= $harga; ?></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
					<hr>
					<p><button><a href="<?php base_url('tokosepatu'); ?>">Kembali</a></button></p>
                </td>
            </tr>
         </table>
	</center>
	<center>
		<h4> Terimakasih Sudah Berkunjung Dan Berbelanja Di Toko Kami! </h4>
        <h4> Semoga Anda Puas Dengan Pelayanan Dan Barang Yang Tersedia Di Toko Kami </h4>

	</center>
</body>
</html>