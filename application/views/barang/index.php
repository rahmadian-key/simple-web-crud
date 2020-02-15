<div class="container mx-auto">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
				<div class="row mt-5 offset-md-8">
					<div class="col-md-10 mx-auto">
						<a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah <?= $judul; ?></a>
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
					 <th scope="col">Harga</th>
					 <th scope="col">Stok</th>
					 <th scope="col">Aksi</th>
				 </tr>
			</thead>
			<tbody>
				<?php $i=1;foreach( $barang as $brg ) : ?>
				 <tr>
					 <th scope="row"><?= $i ?></th>
					 <td><?= $brg["nama_brg"] ?></td>
					 <td><?= $brg["harga"] ?></td>
					 <td><?= $brg["stok"] ?></td>
					 <td>
						<button type="button" class="btn btn-success">Edit</button>
						<a href="<?= base_url(); ?>barang/hapus/<?= $brg["no"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
					</td>
				 </tr>
				<?php $i+=1;endforeach ?>
			 </tbody>
			</table>
		</div>
		</div>
	</div>

</div>