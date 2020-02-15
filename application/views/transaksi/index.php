<div class="container mx-auto">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
			<div class="col-md-12 mx-auto">
				<div class="row mt-5 offset-md-8">
					<div class="col-md-10 mx-auto">
						<a href="<?= base_url(); ?>transaksi/tambah" class="btn btn-primary">Tambah <?= $judul; ?></a>
					</div>
				</div>
				<div class="row mt-5 mb-3">
					<div class="col-md-10 mx-auto">
						<?php if($this->session->flashdata('flash')) { ?>
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<?= $judul." berhasil ".$this->session->flashdata('flash'); ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php } ?>
					</div>
				</div>
			<table class="table">
				 <thead>
				 <tr>
					 <th scope="col">#</th>
					 <th scope="col">Nama Konsumen</th>
					 <th scope="col">Nama Barang</th>
					 <th scope="col">Tanggal Ambil</th>
					 <th scope="col">Aksi</th>
				 </tr>
			</thead>
			<tbody>
				<?php $i=1; foreach( $transaksi as $tsk ) : ?>
				 <tr>
					 <th scope="row"><?= $i ?></th>
					 <td><?= $tsk["konsumen"] ?></td>
					 <td><?= $tsk["nama_brg"] ?></td>
					 <td><?= $tsk["tgl_ambil"] ?></td>
					 <td>
						<a href="<?= base_url(); ?>transaksi/edit/<?= $tsk["no"]; ?>" class="btn btn-success">Edit</a>
						<a href="<?= base_url(); ?>transaksi/hapus/<?= $tsk["no"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a>
					</td>
				 </tr>
				<?php $i+=1; endforeach ?>
			 </tbody>
			</table>
		</div>
		</div>
	</div>
</div>