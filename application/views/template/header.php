<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- cdn datatables bootstrap-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- cdn datatables biasa -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></link>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->

    <title><?= $judul ;?></title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="container">
	  		<a class="navbar-brand" href="#">Web Lanjut</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav">
	            <a class="nav-item nav-link" href="<?= base_url() ;?>">Tampil Data <span class="sr-only">(current)</span></a>
	            <a class="nav-item nav-link" href="<?= base_url('crud/tambah') ;?>">Tambah Data</a>
              <a class="nav-item nav-link" href="<?= base_url('datatablesclient') ;?>">Datatables Client Side</a>
              <a class="nav-item nav-link" href="<?= base_url('datatablesserver') ;?>">Datatables Server Side</a>
	          </div>
	        </div>
	    </div>
	</nav>
    <h3 class="text-center m-3"><?= $judul ;?></h3>

   