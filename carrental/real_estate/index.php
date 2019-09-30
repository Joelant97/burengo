<?php 
session_start();
include('config.php');
error_reporting(0);

?>

<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Inicio</a> / Compra, Venta & Renta</span>
    <h2>Compra, Venta & Renta</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span>Busca de Propiedades</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address">
            <button class="btn btn-primary">Buscar ahora</button>
		</form>
  </div>



<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Mostrando: 10 de 10</div>

</div>
<div class="row">

    // Comienza el bloque de código Php 1 de 1


</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>