<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
</head>
<body>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inventario / Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- row para criterios de busqueda-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-tittle">CRITERIOS DE BÚSQUEDA</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                      <i class="fas fa-times"></i>
                    </button>
                  </div><!-- end card-tools-->
              </div><!-- end card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 d-lg-flex">
                  <div style="width: 20%" class="form-floating mx-1">
                    <label for="iptCodigoBarras">Código de Barras</label>
                    <input type="text" id="iptCodigoBarras" class="form-control" data-index="">
                  </div>

                  <div style="width: 20%;" class="form-floating mx-1">
                    <label for="iptCategoria">Categoría</label>
                    <input type="text" id="iptCategoria" class="form-control" data-index="">
                  </div>

                  <div style="width: 20%" class="form-floating mx-1">
                    <label for="iptProducto">Producto</label>
                    <input type="text" id="iptProducto" class="form-control" data-index="">
                  </div>

                  <div style="width: 20%" class="form-floating mx-1">
                    <label for="iptVentaDesde">P. Ventas Desde</label>
                    <input type="text" id="iptVentaDesde" class="form-control" data-index="">
                  </div>

                  <div style="width: 20%" class="form-floating mx-1">
                    <label for="iptVentaDesde">P. Venta Hasta</label>
                    <input type="text" id="iptVentaHasta" class="form-control" data-index="">
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end card-body -->
        </div>
      </div>
    </div>
    <button style="background-color: green; color: white;" data-toggle="modal" data-target="#mdlGestionarProducto">Agregar Producto</button>
      <br>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <table id="tbl_productos" class="table table-striped w-100 shadow">
            <thead>
              <tr class="bg-dark">
                <th>Id</th>
                <th>Codigo</th>
                <th>Id Categoria</th>
                <th>Categoria</th>
                <th>Producto</th>
                <th>P.compra</th>
                <th>P.Venta</th>
                <th>Stock</th>
                <th>Min. Stock</th>
                <th>Ventas</th>
                <th>Fecha Creación</th>
                <th>Fecha Actualización</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody style="color: white">
              <td>1</td>
              <td>12345678</td>
              <td>098</td>
              <td>Dulces</td>
              <td>Chocolate</td>
              <td>$30</td>
              <td>$60</td>
              <td>1</td>
              <td>0</td>
              <td>40</td>
              <td>10-10-2024</td>
              <td>11-10-2024</td>
              <td>
                <span class="text-primary px-1">
                <i class="fas fa-pencil-alt fs-5"></i>
                </span>
                <span class="text-success px-1">
                <i class="fas fa-plus-circle fs-5"></i>
                </span>
                <span class="text-warning">
                <i class="fas fa-minus-circle fs-5"></i>
                </span>
                <span>
                <i class="fas fa-trash fs-5"></i>
                </span>
              </td>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
</div>
<!-- /.content -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

  <div class="modal-dialog modal-lg">


    <div class="modal-content">
      <div class="modal-header bg-dark py-1 align-items-center">
        <h5 class="modal-tittle">Agregar Producto</h5>
        <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
          <i class="far fa-times-circle"></i>
        </button>
      </div>

    <div class="modal-body">
      <div class="row">

        <div class="col-lg-6">
          <div class="form-group mb-2">
            <label for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
              <span class="small">Código de Barras</span><span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control form-control-sm" id="iptCodigoReg" name="iptCodigoReg" placeholder="Código de Barras" required>
            <span id="validate_codigo" class="text-danger small fst-italic" style="display:none">Ingrese un codigo de barras</span>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group mb-2">
            <label for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
              <span class="small">Categoria</span><span class="text-danger">*</span>
            </label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCategoriaReg">
            </select>
            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">Ingrese una categoria</span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group mb-2">
            <label for="iptDescripcionReg"><i class="fas fa-file-signature fs-6"></i>
              <span class="small">Descripción</span><span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control form-control-sm" id="iptDescripciónReg" placeholder="Descripción" required>
            <span id="validate_descripcion" class="text-danger small fst-italic" style="display:none">Ingrese una descripción</span>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="form-group mb-2">
            <label for="iptPrecioCompraReg"><i class="fas fa-dollar-sign fs-6"></i>
              <span class="small">Precio Compra</span><span class="text-danger">*</span>
            </label>
            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioCompraReg" placeholder="Precio de Compra" required>
            <span id="validate_precio_compra" class="text-danger small fst-italic" style="display:none">Ingrese un precio de compra</span>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group mb-2">
            <label for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
              <span class="small">Stock</span><span class="text-danger">*</span>
            </label>
            <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg" placeholder="Stock">
            <span id="validate_stock" class="text-danger small fst-italic" style="display:none">Ingrese el stock del producto</span>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group mb-2">
            <label for="iptMinimoStockReg"><i class="fas fa-minus-circle fs-6"></i>
              <span class="small">Minimo Stock</span><span class="text-danger">*</span>
            </label>
            <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg" placeholder="Minimo Stock">
            <span id="validate_minimo_stock" class="text-danger small fst-italic" style="display:none">Ingrese el stock del producto</span>
          </div>
          <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" id="btnCancelarRegistro">Cancelar</button>
          <button type="button" class="btn btn-primary mt-3 mx-2" style="width:170px;" id="btnGuardarProducto" onclick="formSubmitClick()">Guardar Producto</button>
        </div>

          


      </div>
    </div>
    </div>

  </div>

</div>
<script>
  $(document).ready(function(){
    var tableProductos = $('#tbl_productos').DataTable({
      dom:'Bftrip',
      buttons: [
        'excel', 'print','pageLength',
      ],
      "order": [[0,'desc']],
      lengthMenu:[0,5,10,15,20,50],
      "pageLength":15,
      "language":{
        "url": "//cdn.datatables.net.plug-ins/1.10.20/i18n/Spanish.json"
      }
    });
  })
</script>
</body>
</html>