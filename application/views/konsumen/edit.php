<div class="container">
	<?php if(!$konsumen['no']) :
		redirect('konsumen');
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
							<input type="hidden" name="no" value="<?= $konsumen["no"]; ?>" /> 
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $konsumen['nama']; ?>"/>
						</div>
						<div class="form-group">
							<label for="no_hp">No. HP</label>
							<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $konsumen['no_hp'];?>"/>
						</div>
						<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
</div>