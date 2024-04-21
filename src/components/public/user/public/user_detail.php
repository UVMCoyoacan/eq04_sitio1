<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../../../../../public/img/header_logo.jpg" type="image/jpg">
</head>
</head>
<body>

    <header>
        <div class="header-container">
           <div class="logo">
              <img src="../../../../../public/img/header_logo.jpg" alt="Logo de Tienda K-pop">
           </div>
           <div class="title-container">
              <div class="title">Oki Dokey Store</div>
              <div class="subtitle">Tienda K-pop</div>
           </div>
           <div class="nav-container">
              <nav>
                 <ul>
                    <li><a href="../../../../../public/index.html" >Inicio</a></li>
                    <li><a href="../../productos.html">Productos</a></li>
                    <li><a href="../../eventos.html" >Eventos</a></li>
                    <li><a href="../../nosotros.html" >Nosotros</a></li>
                    <li><a href="../../contacto.html" >Contacto</a></li>
                 </ul>
              </nav>
           </div>
        </div>
     </header>
     <!-- !PAGE CONTENT! -->
     <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:30px">
     <h1 class="w3-text-teal">Mi Perfil</h1>
     <hr>

     <h2 class="w3-text-teal" style="text-align: center; margin-top: 40px; margin-bottom: 34px;">Nombre de usuario</h2>
     <hr>

     <div class="nav-profile">
        <nav>
            <ul>
              <li><a href="#" class="type" data-categoria="Mi Cuenta">Mi Cuenta</a></li>
              <li><a href="#" class="type" data-categoria="Editar Perfil">Editar Perfil</a></li>
              <li><a href="#" class="active" data-categoria="Adiministrar Cuentas">Adiministrar Cuentas</a></li>
           </ul>
        </nav>
     </div>
     <hr>

     <div class="container mt-5">
        <div class="mb-4">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal">
                <i class="bi bi-plus"></i> Agregar Nuevo Usuario
            </a>
        </div>

        <!-- Tabla para mostrar datos -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php include '../src/conecction_db.php'; mostrarDatos(); ?>
            </tbody>
        </table>

        <!-- Modal para agregar nuevo usuario -->
        <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="agregarModalLabel">Agregar Nuevo Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="conection_db.php" method="post">
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal para editar usuario -->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarModalLabel">Editar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="conection_db.php" method="post">
                            <div class="mb-3">
                                <label for="nueva_contrasena" class="form-label">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="nueva_contrasena" name="nueva_contrasena" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

    </div>

    <hr>

     </div>

     <!-- End Page Content -->


     <footer class="footer-container">
        <div class="logo">
           <img src="../../../../../public/img/header_logo.jpg" alt="Logo de Tienda K-pop">
        </div>
        <div class="title-container">
           <div class="title">Oki Dokey Store</div>
           <div class="subtitle">Tienda K-pop</div>
        </div>
        <div class="privacy-container">
           <ul>
               <li><a href="../../../../../public/docs/POLÍTICA DE LA TIENDA_Oki.pdf" onclick="showPdfModal(event, this)">Aviso de privacidad</a></li>
               <li><a href="../../../../../public/docs/ENVIO Y DEVOLUCIONES_Oki.pdf" onclick="showPdfModal(event, this)">Política de envío y devoluciones</a></li>
           </ul>
       </div>
       <div id="pdfModal" class="modal">
           <div class="modal-content">
               <span class="close" onclick="closePdfModal()">&times;</span>
               <iframe id="pdfViewer" width="100%" height="100%" frameborder="0"></iframe>
           </div>
       </div>        
        <div class="social-media">
           <ul>
              <a href="#" class="fa fa-facebook-square"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
           </ul>
        </div>
     </footer>
   <script src="../../../../app.js"></script>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
    
</body>
</html>