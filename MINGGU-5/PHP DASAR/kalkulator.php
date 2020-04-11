<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $angka1+$angka2;
			break;
			case 'kurang':
				$hasil = $angka1-$angka2;
			break;
			case 'kali':
				$hasil = $angka1*$angka2;
			break;
			case 'bagi':
				$hasil = $angka1/$angka2;
			break;			
		}
	}
	?>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Angka Pertama"><br>
			<input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Angka Kedua"><br>
			<select class="opt" name="operasi">
				<option value="tambah">+ (Tambah)</option>
				<option value="kurang">- (Kurang)</option>
				<option value="kali">x (Kali)</option>
				<option value="bagi">/ (Bagi)</option>
			</select>
			<input type="submit" name="hitung" value="Hasil" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="angka">
		<?php }else{ ?>
			<input type="text" value="0" class="angka ">
		<?php } ?>			
	</div>
</body>
</html>