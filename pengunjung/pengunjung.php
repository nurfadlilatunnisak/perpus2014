<form method="post" action="pengunjung/aksi_pengunjung.php" name="pengunjung">
	<center><h3>.:: Silahkan Mengisi Buku Tamu ::.</h3><hr></center>
	<table border="0" width="100%" cellpadding="2" id="table1">
		<tr>
			<td width="35%">Nama (*)</td>
			<td><input type="text" name="nama" required size="20"></td>
		</tr>
		<tr>
			<td width="35%">Jenis Kelamin (*)</td>
			<td><input type="radio" value="L" required name="jk"> Laki-Laki &nbsp;&nbsp;
			<input type="radio" value="P" required name="jk"> Perempuan</td>
		</tr>
		<tr>
			<td width="35%">Kelas (*)</td>
			<td><select size="1" name="kelas" required>
			<option selected value="">- Pilih Kelas -</option>
			<option value="VII a">VII a</option>
			<option value="VII b">VII b</option>
			<option value="VII c">VII c</option>
			<option value="VIII a">VIII a</option>
			<option value="VIII b">VIII b</option>
			<option value="VIII c">VIII c</option>
			<option value="IX a">IX a</option>
			<option value="IX b">IX b</option>
			<option value="IX c">IX c</option>
			<option value="Guru">Guru</option>
			<option value="Karyawan">Karyawan</option>
			<option value="Lain">Lainnya</option>
			</select>
			</td>
		</tr>
		<tr>
			<td width="35%" valign="top">Keperluan (*)</td>
			<td>
			<input type="checkbox" name="perlu1" value="Pinjam Buku"> Pinjam Buku<br>
			<input type="checkbox" name="perlu2" value="Baca Buku"> Baca Buku<br>
			<input type="checkbox" name="perlu3" value="Baca Koran"> Baca Koran<br>
			<input type="checkbox" name="perlu4" value="Lainnya"> Lainnya</td>
		</tr>
		<tr>
			<td width="35%">Informasi yang dicari (*)</td>
			<td><textarea rows="5" name="cari" required cols="25"></textarea></td>
		</tr>
		<tr>
			<td width="35%">Saran-saran</td>
			<td><textarea rows="4" name="saran" cols="25"></textarea></td>
		</tr>
		<tr>
			<td width="35%">&nbsp;</td>
			<td><input type="submit" value="Submit" name="B1">&nbsp;&nbsp;&nbsp;
			<input type="reset" value="Reset" name="B2"></td>
		</tr>
		<tr>
			<td colspan="2"><b>Keterangan : (*) Harus diisi</b></td>
		</tr>
	</table>
</form>