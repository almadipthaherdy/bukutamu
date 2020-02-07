<!DOCTYPE html>
<html>
<head>
	<title>CRUD | Edit Data</title>
</head>
<body>
	<?php foreach ($user as $u) { ?>
		# code...
	}r
	<form method="POST" action="<?php echo site_url('Main/proses_editdata'); ?>">
	<table border="1">
		<tr>
			<input type="hidden" name="id_bukutamu" value="<?php echo $u->id_bukutamu; ?> "> 
			<td> Nama : <input type="text" name="nama" value="<?php echo $u->nama; ?>"></td>
			<td> Email : <input type="text" name="email" value="<?php echo $u->email; ?>"></td>
			<td> Aktifitas : <input type="text" name="aktifitas" value="<?php echo $u->aktifitas; ?>"></td>
			<td><input type="submit" name="proses_editdata" value="Check In"></td>
			s</tr>
	</table>
</form>
</body>
</html>