<!DOCTYPE html>
<html>
<head>
	<!--  -->
	<title>Code Igniter Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> <!-- css for data tables -->
	
	<!-- js for datatables -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
	<!-- end js for datatables -->
</head>
<body>
	<div class="container">
		<div class="jumbotron mt-4">
		  <h1 class="display-4"><?php echo $title; ?></h1>
		  <!-- <hr class="my-4"> -->
		</div>
	</div>