<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
			<div class="col-md-12 mx-auto">
				<div class="row mt-5 mb-3 offset-md-8">
					<div class="col-md-12">
						<a href="<?= base_url(); ?>konsumen/tambah" class="btn btn-primary">Tambah <?= $judul; ?></a>
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
				<?php foreach( $konsumen as $kns ) : ?>
				 <tr>
					 <th scope="row"><?= $kns["no"] ?></th>
					 <td><?= $kns["nama"] ?></td>
					 <td><?= $kns["no_hp"] ?></td>
					 <td><?= $kns["saldo"] ?></td>
					 <td>
						<button type="button" class="btn btn-success">Edit</button>
						<button type="button" class="btn btn-danger">Hapus</button>
					</td>
				 </tr>
				<?php endforeach ?>
			 </tbody>
			</table>
			</div>
		</div>
		</div>
		</div>
	</div>

</div>