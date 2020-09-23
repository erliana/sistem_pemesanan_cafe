<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="image/bg.png">
<?php
include("koneksi.php");
?>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index_admin.php">
    <img src="image/logo.jpg" width="100" height="50" alt="">
  </a>
  <ul class="nav nav-tabs">
	<li class="nav-item">
    <a class="nav-link" href="index_admin.php">Take Away</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tambah_siswa.php">Order</a>
  </li>
  <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Makanan </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Tambah Makanan</a>
  </div>
  </li>
  <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minuman</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Tambah Minuman</a>
  </div>
  </li>
</ul>
</nav>

<center><h1>Tambah Pesanan</h1></center>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
		<form action="pinjam2.php" method="post">
			
			<?php

				$data = mysqli_query($conn, "SELECT nama from siswa ");
				
			?>

			<table width="319" border="0" class="table table-dark">

				<?php

				//lakukan query SELECT
				$data_barang = mysqli_query($conn, "SELECT nama_barang from barang ");
				
			   ?>
				<tr>
					<td>Nomer Meja</td>
					<td>
						<select name='nomer_meja' value="<?php echo $d['nomer_meja']; ?>"><?php echo $d['nomer_meja']; ?>
						<?php while ($d = mysqli_fetch_array($data_barang)){; ?>
						<option value='<?php echo $d['nomer_meja']; ?>'><?php echo $d['nomer_meja']; ?></option>
						<?php 
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pesanan</td>
					<td>
						<select name='pesanan' value="<?php echo $d['pesanan']; ?>"><?php echo $d['pesanan']; ?>
						<?php while ($d = mysqli_fetch_array($data_barang)){; ?>
						<option value='<?php echo $d['pesanan']; ?>'><?php echo $d['pesanan']; ?></option>
						<?php 
						}
						?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Tanggal Pesan</td>
					<?php $date = date('Y-m-d\TH:i'); ?>
					<td><input type="datetime-local" name="tanggal_pesan" value="<?= $date ?>"></td>
				</tr>

				<tr>
					<td width="92"><button class="btn btn-warning" type="submit">Simpan</a></button></td>
					<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
				</tr>
			</table>

<br>


		</form>
			

		</div>
	</div>
</div>


</body>
</html>