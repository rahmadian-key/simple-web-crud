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
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" />
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" id="harga" name="harga" />
						</div>
						<div class="form-group">
							<label for="stok">Stok</label>
							<input type="stok" class="form-control" id="stok" name="stok" />
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>