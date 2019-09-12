<html>
<head><title><Rifqi Mifthudin</title></head>
<body>
<fieldset>
<FORM ACTION="prosess1.php" METHOD="POST" NAME="input">
<center><h1>PENGGAJIHAN KARYAWAN</h1></center>
<table>
<tr>
<td>Nama </td> <td><input type="text" name="nama" requid><br></td></tr>
<tr><td>Nip  </td> <td><input type="number"  name="nip"requid><br></td></tr>
<tr><td>Jenis Kelamin </td> <td><input type="radio" name="jk" value="laki-laki" checked>Laki-laki
<input type="radio" name="jk" value="Perempuan"> Perempuan<br></td></tr>
<tr><td>Alamat </td> <td><textarea name="alamat" cols="40" rows="5" requid></textarea><br></td></tr>
<tr><td>status </td>
<td><select name="status">
<option value="Menikah">Menikah</option>
<option value="Belum Menikah">Belum Menikah</option>
</select></tr></td>
<tr><td>Jabatan </td>
<td><select name="jabatan">
<option value="Hrd">Hrd</option>
<option value="Maneger">Maneger</option>
<option value="Staff">Staff</option>
<option value="Karyawan">Karyawan</option>
</select></tr></td>
<tr><td>Potongan</td>
<td><input type="checkbox" name="band01" value="Bpjs"checked> Bpjs
<input type="checkbox" name="band02" value="Koperasi"> Koperasi
<input type="checkbox" name="band03" value="Jamsostek">Jamsostek<br></tr>
<tr><td>Golongan </td>
<td><select name="golongan">
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="A3">A3</option>
</select></tr></td>
<tr><br><td><input type="submit" name="input" value="Imput Data"></tr></td>
</table>
</fieldset>
</FORM>
</body>
</html>