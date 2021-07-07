<div class="container mt-3">
	<div class="card text-center" style="width: 18rem;">
		<img class="card-img-top rounded-circle" height="250px" alt="Card image">
		<div class="card-body">
			<h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
			<p class="card-text"><?= $data['mhs']['alamat']; ?></p>
			<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
		</div>
	</div>
</div>