<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <div class="mx-auto">
  	<div class="container">
  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="#">Simple Web
  			</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon">
    			</span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav">
     				<a class="nav-item nav-link" href="<?= base_url(); ?>">Home 
     				</a>
     				<a class="nav-item nav-link" href="#">Data Barang
     				</a>
     				<a class="nav-item nav-link" href="<?= base_url(); ?>konsumen">Data Konsumen
     				</a>
 					<a class="nav-item nav-link" href="#">Data Transaksi
 					</a>
    			</div>
 			 </div>
		</nav>
	</div>