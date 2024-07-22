<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('id_perfiles');
?>

<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary px-1 px-md-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal">
      <img class="logo" src="<?php echo base_url ('assets/img/logo.png');?>">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url ('usuarios');?>">Usuarios</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url ('logout');?>">Cerrar sesión</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form> 
        <span class="ms-md-5 mt-3 mt-md-0 mb-3 mb-md-0 badge text-bg-warning">Admin: <?php echo session('nombre');?></span>
      </div>
    <?php elseif(session()->perfil_id == 2): ?> 
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catálogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url ('logout');?>">Cerrar sesión</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form> 
        <span class="ms-md-5 mt-3 mt-md-0 mb-3 mb-md-0 badge text-bg-warning">Cliente: <?php echo session('nombre');?></span>
      </div>
      <?php else:?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="quienes_somos">Quiénes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca de</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form> 
        <?php endif;?>
      </div>
  </div>
</nav>