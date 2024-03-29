
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/burengo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Correo de Soporte: </p>
              <a href="mailto:info@example.com">info@example.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Servicio Telefónico: </p>
              <a href="tel:829-463-2930">(829)463-2930 & (829)-268-0964</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Registro</a> </div>
<?php }
else{ 

echo "Bienvenido a Burengo Burengo Car Rental";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Palanca de Navegación</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Ajustes del Perfil</a></li>
              <li><a href="update-password.php">Actualizar Contraseña</a></li>
            <li><a href="my-booking.php">Mi Reserva</a></li>
            <li><a href="post-testimonial.php">Publicaciones de Testimonio</a></li>
          <li><a href="my-testimonials.php">Mi Testimonio</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Ajustes del Perfil</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Actualizar Contraseña</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mi Reserva</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Publicaciones de Testimonio</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mi Testimonio</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Cerrar Sesión</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
<!--Buscardor General-->
<!--        <div class="header_search">-->
<!--          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>-->
<!--          <form action="#" method="get" id="header-search-form">-->
<!--            <input type="text" placeholder="Buscar..." class="form-control">-->
<!--            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
<!--          </form>-->
<!--        </div>-->
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Inicio</a>    </li>
          	 
          <li><a href="page.php?type=aboutus">Sobre Nosotros / Políticas</a></li>
          <li><a href="car-listing.php">Lista de Autos</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contáctanos</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>