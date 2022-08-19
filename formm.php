<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #B9005B;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #F65A83;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<form action="tampil.php" method="post">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
    <div class="row">
		<label>Umur</label>
		<input type="text" name="umur" value="<?=isset($_POST['umur']) ? $_POST['umur'] : ''?>"/>
	</div>
    <div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
    <div class="row">
		<label>Agama</label>
		<select name="agama">
			<?php $options = array('Islam', 'Kristen', 'Buddha', 'Konghucu', 'hindu');
			foreach ($options as $agama) {
				$selected = @$_POST['agama'] == $agama ? ' selected="selected"' : '';
				echo '<option value="' . $agama . '"' . $selected . '>' . $agama . '</option>';
			}?>
		</select>
	</div>
	
	<div class="row">
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/>
	</div>
    <div class="row">
		<label>Tempat lahir</label>
		<input type="text" name="tempat_lahir" value="<?=isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : ''?>"/>
	</div>
    <form action="/action_page.php">
  <label for="TTL">Tanggal lahir:</label>
  <input type="date" name="tanggal_lahir" value="<?=isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : ''?>"/>
	<div class="row">
	<div class="row">
		<label>Hobby</label>
		<input type="text" name="hobby" value="<?=isset($_POST['hobby']) ? $_POST['hobby'] : ''?>"/>
	</div>
    <div class="row">
		<label>Cita-cita</label>
		<input type="text" name="cita-cita" value="<?=isset($_POST['cita-cita']) ? $_POST['cita-cita'] : ''?>"/>
	</div>
    <div class="row">
		<label>Asal sekolah</label>
		<input type="text" name="asal_sekolah" value="<?=isset($_POST['asal_sekolah']) ? $_POST['asal_sekolah'] : ''?>"/>
	</div>
    
		
			
		
	
		<div class="row">
	<input type="submit" name="submit" value="Simpan"/>
	</div> 

</form>


</html>