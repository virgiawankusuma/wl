<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Datatables -->
<!--     <link rel="stylesheet" type="text/css" href="<?= base_url() ;?>assets/datatables/datatables.min.css"/>
    <script type="text/javascript" src="<?= base_url() ;?>assets/datatables/datatables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


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
	          </div>
	        </div>
	    </div>
	</nav>
    <h3 class="text-center m-3"><?= $judul ;?></h3>

   