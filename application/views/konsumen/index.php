<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
			<div class="col-md-12 mx-auto">
				<div class="row mt-5 offset-md-8">
					<div class="col-md-10 mx-auto">
						<a href="<?= base_url(); ?>konsumen/tambah" class="btn btn-primary">Tambah <?= $judul; ?></a>
					</div>
				</div>
				<div class="row mt-5 mb-3">
					<div class="col-md-10 mx-auto">
						<?php if($this->session->flashdata('flash')) { ?>
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<?= $judul." ".$this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php } ?>
					</div>
				</div>
			<div class="col-md-10 mx-auto">
			<table class="table">
				 <thead>
				 <tr>
					 <th scope="col">#</th>
					 <th scope="col">Nama</th>
					 <th scope="col">No. HP</th>
					 <th scope="col">Saldo</th>
					 <th scope="col">Aksi</th>
				 </tr>
			</thead>
			<tbody>
				<?php $i = 1; foreach( $konsumen as $kns ) : ?>
				 <tr>
					 <th scope="row"><?= $i ?></th>
					 <td><?= $kns["nama"] ?></td>
					 <td><?= $kns["no_hp"] ?></td>
					 <td><?= $kns["saldo"] ?></td>
					 <td>
						<button type="button" class="btn btn-success">Edit</button>
						<a href="<?= base_url(); ?>konsumen/hapus/<?= $kns["no"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
					</td>
				 </tr>
				<?php $i+=1; endforeach ?>
			 </tbody>
			</table>
			</div>
		</div>
		</div>
	</div>
</div>