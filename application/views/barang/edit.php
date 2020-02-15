<div class="container">
	<?php if(!$barang['no']) :
		redirect('barang');
	else:
		?>
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
						<input type="hidden" name="no" value="<?= $barang["no"]; ?>" /> 
						<div class="form-group">
							<label for="nama_brg">Nama</label>
							<input type="text" class="form-control" id="nama_brg" name="nama_brg" value="<?= $barang['nama_brg']; ?>"/>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
</div>