<div class="container mx-auto">
	<div class="row mt-3">
		<div class="col-md-12">
			<h3><?= $judul; ?></h3>
			<div class="col-md-10 mx-auto">
			<table class="table">
				 <thead>
				 <tr>
					 <th scope="col">#</th>
					 <th scope="col">Nama</th>
					 <th scope="col">Harga</th>
					 <th scope="col">Aksi</th>
				 </tr>
			</thead>
			<tbody>
				<?php foreach( $barang as $brg ) : ?>
				 <tr>
					 <th scope="row"><?= $brg["no"] ?></th>
					 <td><?= $brg["nama_brg"] ?></td>
					 <td><?= $brg["harga"] ?></td>
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