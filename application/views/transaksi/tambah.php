<div class="container">

	<div class="row mt-5">
		<div class="col-md-6 mx-auto">
			<div class="card">
				<div class="card-header">
				    <?= $judul; ?>
				</div>
				<div class="card-body">
					<?php if(validation_errors() ) { ?>
					<div class="alert alert-danger" role="alert">
  						<?= validation_errors(); ?>
					</div>
				<?php } ?>
					<form action="" method="post">
						<div class="form-group" >
							<label for="nama">Nama Konsumen: </label>
							<select class="form-control" name="nama" id="nama">
								<?php foreach($konsumen as $kns) : ?>
									<option value="<?= $kns['no']; ?>"><?= $kns['nama']; ?></option>
								<?php endforeach ?>
							</select> 
						</div>
						<div class="form-group">
							<label for="no_hp">Nama Barang: </label>
							<select class="form-control" name="nama_brg" id="nama_brg">
								<?php foreach($barang as $brg) : ?>
									<option value="<?= $brg['no']; ?>"><?= $brg['nama_brg']; ?></option>
								<?php endforeach ?>
							</select> 
						</div>
						<div class="form-group">
							<label for="jumlah">Tanggal Beli: </label>
							<input type="date" class="form-control" id="tgl_ambil" name="tgl_ambil" min="1990-01-01" max="2090-12-12">
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>