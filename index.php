<?php include 'koneksi.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
	<table>
		<tr>
			<tr>
				<td>
					Nim
				</td>
				<td>
					<select onclick="autofill()" onkeyup="autofill()" id="nim">
						<option>-------------------------------------</option>
					<?php 
					$data = $conn->query("SELECT * FROM t_ajax")->fetchAll();	

					foreach ($data as $row) {?>
						<option value="<?= $row['nim'] ?>"><?= $row['nama'] ?></option>
					<?php }
					?>
					</select>
				</td>
			</tr>

			<td>
				Nama
			</td>
			<td>
				<input type="text" name="nama"  id="nama">
			</td>
		</tr>
		<tr>
			<td>
				Jurusan
			</td>
			<td>
				<input type="text" name="jurusan" id="jurusan">
			</td>
		</tr>
	</table>
	<br>
</body>
</html>

<script type="text/javascript">
	function autofill() {
		var nim = $('#nim').val();

		$.ajax({
			url : 'ajax.php',
			data : 'nim='+nim, 
			success : function (data) {
				var json = data;
				obj = JSON.parse(json);

				$('#nama').val(obj.nama);
				$('#jurusan').val(obj.jurusan);
			}
		});
	}
</script>