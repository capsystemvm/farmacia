

<main>
<?php 
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='bienvenido'){
                  
                 $nombre=$_GET['nombre'];
                 
            ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Bienvenido</strong> Usuario <?php echo $nombre ?>!!
              </div>
            <?php 
                }
                if(isset($_GET['us'])){
                  $codUsAccess=$_GET['us'];
               }
            ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php">Iniciar Sesión</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        

          <a class="nav-link active" aria-current="page" href='indexAdmin.php?us=<?php echo $GLOBALS['codUsAccess'] ?>'>Home</a>
       </li>
        <li class="nav-item">
          <a class="nav-link" href='4crudUsuario.php?us=<?php echo $GLOBALS['codUsAccess'] ?>'>Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='10crudCompra.php?us=<?php echo $GLOBALS['codUsAccess'] ?>'>Compras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='12crudVenta.php?us=<?php echo $GLOBALS['codUsAccess'] ?>'>Ventas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Búsquedas
          </a>
          <ul class="dropdown-menu">
          
            <li><form method="POST" action="11BusquedaPersonas.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="BUSQUEDA DE PERSONAS" type="submit">
              </form>
            </li>
            <li><form method="POST" action="11BusquedaPersonasUser.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="BUSQUEDA DE USUARIOS" type="submit">
              </form>
            </li>
            <li><form method="POST" action="11BusquedaInventario.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="BUSQUEDA EN INVENTARIO" type="submit">
              </form>
            </li>
              </ul>
              </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opciones
          </a>
          <ul class="dropdown-menu">
          
            <li><form method="POST" action="crudPersona.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="CRUD PERSONA" type="submit">
              </form>
            </li>
            <li><form method="POST" action="2crudEmpleado.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="CRUD EMPLEADO" type="submit">
              </form>
            </li>
            <li><form method="POST" action="3crudCliente.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="CRUD CLIENTE" type="submit">
              </form>
            </li>
            <li><form method="POST" action="7crudProveedor.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                
                <input class="dropdown-item" value="CRUD PROVEEDOR" type="submit">
              </form>
            </li>
            
            <li><hr class="dropdown-divider"></li>
            <li><form method="POST" action="5crudProducto.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="CRUD MEDICAMENTO" type="submit">
              </form>
            </li>
            
            <li><form method="POST" action="8crudMaterial.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="CRUD MATERIAL" type="submit">
              </form>
            </li>
            <li><form method="POST" action="9empaque.php">
                <input type="hidden" name="codUsAccess" id="codUsAccess" value="<?php echo $GLOBALS['codUsAccess'] ?>">
                <input class="dropdown-item" value="EMPAQUE" type="submit">
              </form>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <!--form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form-->
    </div>
  </div>
</nav>

