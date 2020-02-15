<div class="container mx-auto">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
			<div class="col-md-10 mx-auto">
			<table class="table">
				 <thead>
				 <tr>
					 <th scope="col">#</th>
					 <th scope="col">Nama Konsumen</th>
					 <th scope="col">Nama Barang</th>
					 <th scope="col">Jumlah Beli</th>
					 <th scope="col">Tanggal Beli</th>
					 <th scope="col">Aksi</th>
				 </tr>
			</thead>
			<tbody>
				<?php $i=1; foreach( $transaksi as $tsk ) : ?>
				 <tr>
					 <th scope="row"><?= $i ?></th>
					 <td><?= $tsk["konsumen"] ?></td>
					 <td><?= $tsk["nama_brg"] ?></td>
					 <td><?= $tsk["jumlah"] ?></td>
					 <td><?= $tsk["tgl_beli"] ?></td>
					 <td>
						<button type="button" class="btn btn-success">Edit</button>
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