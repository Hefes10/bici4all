<!-- Header -->
<?php $session_data = $this->session->userdata('logged_in'); ?>

<header id="header">
  <nav id="navBar" class="navbar navbar-expand-lg navbar-light navbar-static-top fixed-top" style="background: rgba(0,61,155,.85);">
    <div class="container">
      <a class="navbar-brand">
        <span class="navbar-logo">
          <a href="<?php echo base_url('principal');?>">
            <img id="logo" src="<?php echo base_url('assets/img/logo.png');?>" alt="Bici4all" title="" style="height: 2.8rem;">
          </a>
        </span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <!--            MENU PARA ADMINISTRADOR-->
      <?php if( ($this->session->userdata('logged_in')) and ($session_data['id_perfil'] == '1')){?>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('principal/1');?>">Bicicletas</a>
            <a class="dropdown-item" href="<?php echo base_url('principal/2');?>">Scooters</a>
            <a class="dropdown-item" href="<?php echo base_url('principal');?>">Ver Todos</a>
          </div> 
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('admin');?>">Menú admin</a>
            <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
          </div> 
        </li>
        <li>
          <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="¿Qué estás buscando?">
            <a href="#" class="search-btn">
              <i class="fa fa-search"></i>
            </a>
          </div>            
        </li>
      </ul>
                          
     <!--            MENU PARA CLIENTES-->
      <?php } else if( ($this->session->userdata('logged_in')) and ($session_data['id_perfil'] == '2')){?>           
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('principal/1');?>">Bicicletas</a>
            <a class="dropdown-item" href="<?php echo base_url('principal/2');?>">Scooters</a>
            <a class="dropdown-item" href="<?php echo base_url('principal');?>">Ver Todos</a>
          </div> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('mi_carrito');?>">
            <i class="fa fa-shopping-cart"></i> Mi Carrito
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('comprar');?>">Mis Compras</a>
            <a class="dropdown-item" href="<?php echo base_url('misdatos');?>">Mis datos</a>
            <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
          </div> 
        </li>
        <li>
          <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="¿Qué estás buscando?">
            <a href="#" class="search-btn">
              <i class="fa fa-search"></i>
            </a>
          </div>            
        </li>
      </ul>
      </form>
            
     <!--            MENU PARA PUBLICO EN GENERAL-->
      <?php } else {?> 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url("principal/1");?>">Bicicletas</a>
            <a class="dropdown-item" href="<?php echo base_url('principal/2');?>">Scooter</a>
            <a class="dropdown-item" href="<?php echo base_url('principal');?>">Ver todos</a>
          </div> 
        </li>
        <li class="nav-item" data-toggle="modal" data-target="#modalLogin">
          <a class="nav-link" href="#">
            <i class="fa fa-user"></i> Login
          </a>
        </li>
        <li class="nav-item" data-toggle="modal" data-target="#modalLogin">
          <a class="nav-link" href="#">
            <i class="fa fa-shopping-cart"></i> Mi Carrito
          </a>
        </li>
        <li>
          <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="¿Qué estás buscando?">
            <a href="#" class="search-btn">
              <i class="fa fa-search"></i>
            </a>
          </div>            
        </li>
      </ul>
    <?php }?> 

      </div>
    </div>
  </nav>
</header>
<!-- /header -->
