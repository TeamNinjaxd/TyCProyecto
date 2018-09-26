<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProductos">

          Agregar Productos
        
        </button>       

      </div>

      <div class="box-body">
        
        <table class="table table-bordered table-striped dt-responsive tablas">
          
          <thead>
            
            <tr>

              <th style="width:10px">#</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Foto</th>
              <th>Marca</th>
              <th>Proveedor</th>
              <th>Categoria</th>
              <th>Cantidad</th>
              <th>Precio de Compra</th>

            </tr>

          </thead>

          <tbody>

            <tr>
              
              <td>1</td>
              <td>AAA000</td>
              <td>CRL 1000</td>
              <td>Control remoto con rayos laser</td>
              <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px" ></td>
              <td>KROHNE</td>
              <td>EJM Proveedor</td>
              <td>EJM Categoria</td>
              <td>10</td>
              <td>100</td>

            </tr>
          
          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR Productos
======================================-->


<div id="modalAgregarProductos" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data" >
     
      <div class="modal-header" style="background: #3c8dbc; color: white">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Agregar Producto</h4>
      
      </div>
      
      <div class="modal-body">
                  
          <div class="box-body">
            
            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoProducto" placeholder="Ingresar Nombre del producto" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar Codigo" required>

              </div>

            </div>


            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDescripcion" placeholder="Ingresar Descripcion" required>

              </div>

            </div>  


            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-star"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoMarca" placeholder="Ingresar Marca" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoProveedor" placeholder="Ingresar Proveedor" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-star"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCategoria" placeholder="Ingresar Categoria" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-truck"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCantidad" placeholder="Ingresar Cantidad" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoPrecioCompra" placeholder="Ingresar Precio de Compra" required>

              </div>

            </div>

            <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFotoProducto">

              <p class="help-block">Peso maximo de la foto 200 MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>

          </div>
      
      </div>
      
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Agregar Producto</button>
      
      </div>

      <?php

        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearProducto();

      ?>

    </form>
    
    </div>

  </div>

</div>
