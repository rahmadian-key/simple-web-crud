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
							<input type="hidden" name="no" value="<?= $transaksi["no"]; ?>" /> 
						<div class="form-group" >
							<label for="nama">Nama Konsumen: </label>
							<select class="form-control" name="nama" id="nama">
								<?php foreach($konsumen as $kns) : ?>
								<?php if($kns['no']==$transaksi['nama_brg']): ?>
									<option value="<?= $kns['no']; ?>" selected><?= $kns['nama']; ?></option>
								<?php else: ?>
									<option value="<?= $kns['no']; ?>" ><?= $kns['nama']; ?></option>
								<?php endif; endforeach ?>
							</select> 
						</div>
						<div class="form-group">
							<label for="no_hp">Nama Barang: </label>
							<select class="form-control" name="nama_brg" id="nama_brg">
								<?php foreach($barang as $brg) : ?>
								<?php if($brg['no']==$transaksi['nama_brg']): ?>
									<option value="<?= $brg['no']; ?>" selected><?= $brg['nama_brg']; ?></option>
								<?php else: ?>
									<option value="<?= $brg['no']; ?>" ><?= $brg['nama_brg']; ?></option>
								<?php endif; endforeach ?>
							</select> 
						</div>
						<div class="form-group">
							<label for="jumlah">Tanggal Beli: </label>
							<input type="datetime-local" class="form-control" id="tgl_ambil" name="tgl_ambil">
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>