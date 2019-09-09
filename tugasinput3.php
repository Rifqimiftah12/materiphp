<html>
<head><title><Rifqi Mifthudin</title></head>
<body>
<FORM ACTION="prosess.php" METHOD="POST" NAME="input">
<center><h1>TUGAS</h1></center>
<table>
<tr>
<td>Nama </td> <td><input type="text" name="nama" requid><br></td>
</tr>
<tr><td>Nis  </td> <td><input type="number"  name="nis"requid><br></td></tr>
<tr><td>Alamat </td> <td><textarea name="alamat" cols="40" rows="5" requid></textarea><br></td></tr>
<tr><td>Jenis Kelamin </td> <td><input type="radio" name="jk" value="laki-laki" checked>Laki-laki
<input type="radio" name="jk" value="Perempuan"> Perempuan<br></td></tr>
<tr><td>Agama </td>
<td><select name="agama">
<option value="islam">islam</option>
<option value="konghucu">konghucu</option>
<option value="kristen">kristen</option>
</select></tr></td>
<br>
<tr><td>Asal Sekolah </td> <td><input type="text" name="asal" requid><br></tr></td>
<tr><td>Nama Orang Tua/Wali </td><td> <input type="text" name="or" requid><br></tr></td>
<tr><td>Mata Pelajaran Yang Disukai </td>
<td><input type="checkbox" name="band01" value="Matematika"
checked> Matematika
<input type="checkbox" name="band02" value="Ilmu Pengetahuan Alam"> Ilmu Pengetahuan Alam
<input type="checkbox" name="band03" value="Ilmu Pengetahuan Sosial">
Ilmu Pengetahuan Sosial<br>
<input type="checkbox" name="band04" value="Pendidikan Agama Islam">
Pendidikan Agama Islam
<input type="checkbox" name="band05" value="PeB Indonesia">
B Indonesia<br>
<tr><td>Total Nilai Ijasah Smk</td><td><input type="number"  name="tn"requid><br></td></tr>
<tr><td>Email</td><td><input type="email"  name="email"requid><br></td></tr>
<tr><td>    <input type="submit" name="input" value="Imput Data"></tr></td>
</table>
</FORM>
</body>
</html>