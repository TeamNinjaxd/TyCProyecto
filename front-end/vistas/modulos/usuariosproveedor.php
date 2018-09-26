<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Proveedores
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Proveedores</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProveedores">

          Agregar Proveedores
        
        </button>       

      </div>

      <div class="box-body">
        
        <table class="table table-bordered table-striped dt-responsive tablas">
          
          <thead>
            
            <tr>

              <th style="width:10px">#</th>
              <th>Nombre</th>
              <th>DNI</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Estado</th>

            </tr>

          </thead>

          <tbody>

            <tr>
              
              <td>1</td>
              <td>Jesus Villa</td>
              <td>78945612</td>
              <td>jesus.villa@unmsm.edu.pe</td>
              <td>5820221</td>
              <td>Rio Amazonas 196 - Las Moras</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>

            </tr>

            <tr>
              
              <td>2</td>
              <td>Paolo Ramirez</td>
              <td>78945612</td>
              <td>paolo.ramirez@unmsm.edu.pe</td>
              <td>5820221</td>
              <td>Su casa</td>
              <td><button class="btn btn-danger btn-xs">Desactivado</button></td>

            </tr>
          
          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE INDIVIDUAL
======================================-->


<div id="modalAgregarProveedores" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" >
     
      <div class="modal-header" style="background: #3c8dbc; color: white">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Agregar Proveedores</h4>
      
      </div>
      
      <div class="modal-body">
                  
          <div class="box-body">
            
            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombreProveedor" placeholder="Ingresar Nombre" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoRUCProveedor" placeholder="Ingresar DNI" required>

              </div>

            </div>  


            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoCorreoProveedor" placeholder="Ingresar correo" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefonoProveedor" placeholder="Ingresar telefono" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDireccionProveedor" placeholder="Ingresar direccion" required>

              </div>

            </div>

          </div>
      
      </div>
      
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
      
      </div>

      <?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearProveedor();

      ?>

    </form>
    
    </div>

  </div>

</div>
