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
            <h1 class="m-0">Ventas</h1>
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
        <div class="row mb-3">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="form-group mb-2">
                  <label class="col-form-label" for="iptCodigoVenta">
                    <i class="fas fa-barcode fs-6" style="color: white;"></i>
                    <span class="small" style="color: white;">Producto(s)</span>
                  </label>

                  <input type="text" class="form-control form-control-sm" id="iptCodigoVenta" placeholder="Codigo de barras o nombre del proucto">
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <h4>Total Venta: $<span id="totalVenta">0.00</span></h4>
              </div>

              <div class="col-md-6 text-right">
                <button class="btn btn-primary" id="btnIniciarVenta">
                  <i class="fas fa-shopping-cart"></i> Realizar Venta
                </button>
                <button class="btn btn-danger" id="btnVaciarListado">
                  <i class="fas fa-trash-alt"></i> Vaciar Listado
                </button>
              </div>

              <div class="col-md-12">
                <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow">
                  <thead class="bg-dark text-left fs-6">
                    <tr>
                      <th>Item</th>
                      <th>Código</th>
                      <th>Id Categoria</th>
                      <th>Categoria</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Total</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody class="small text-left fs-6"></tbody>
                </table>
              </div>
            </div>
            
           

          </div>

          <div class="col-md-3">
              <div class="card shadow">
                <h5 class="card-header py-1 bg-dark text-white text-center">
                  Total Venta: $ <span id="totalVentaRegistrar">0.00</span>
                </h5>

                <div class="card-body p-2">
                  <div class="form-group mb-2">
                    <label class="col-form-label" for="selCategoriaReg"><i class="fas fa-file-alt fs-6"></i>
                      <span class="small">Comprobante</span><span class="text-danger">*</span>
                    </label>

                  <select class="form-select form-select-sm" aria-label=".form-select-sm-example" id="selDocumentoVenta">
                    <option value="0">Seleccione un comprobante de pago</option>
                    <option value="1">Factura</option>
                    <option value="2">Ticket</option>
                  </select>

                  <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">Debe seleccionar un Documento</span>
                  </div>

                  <div class="form-group mb-2">
                    <label class="col-form-label" for="selCategoriaReg">
                      <i class="fas fa-money-bill-alt fs-6"></i>
                      <span class="small">Tipo de Pago</span><span class="text-danger">*</span>
                    </label>

                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="setTipoPago">
                      <option value="0">Seleccione el tipo de pago</option>
                      <option value="1">Efectivo</option>
                      <option value="2">Tarjeta</option>
                      <option value="3">PayPal</option>
                      <option value="4">Tranferencia Bancaria</option>
                    </select>
                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">Ingrese un tipo de pago</span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="iptNroSerie">No. de Serie</label>
                        <input type="text" min="0" name="iptEfectivo" id="itpNroSerie" class="form-control form-control-sm" placeholder="No. Serie">
                      </div>
                      <div class="col-md-8">
                        <label for="iptNroSerie">No. de Venta</label>
                        <input type="text" min="0" name="iptEfectivo" id="itpNroSerie" class="form-control form-control-sm" placeholder="No. Venta">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="iptEfectivoRecibido">Total de Efectivo</label>
                    <input type="number" min="0" name="iptEfectivoRecibido" id="iptEfectivoRecibido" class="form-control form-control-sm" placeholder="Cantidad de efectivo recibido">
                  </div>

                  <div class="form-check">
                    <input class="form-chek-input" type="checkbox" value="" id="checkEfectivoExacto">
                    <label class="form-check-label" for="checkEfectivoExacto">Efectivo Exacto</label>
                  </div>

                  <div class="row mt-2">
                    <div class="col-12">
                      <h6 class="text-start fw-bold" style="color: black;">Efectivo Recibido: $<span id="EfectivoEntregado">0.00</span></h6>
                    </div>
                    <div class="col-12">
                      <h6 class="text-start text-danger fw-bold">Cambio: $ <span id="Cambio">0.00</span></h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-7">
                      <span>Subtotal</span>
                    </div>
                    <div class="col-md-5 text-right">$ <span class="" id="ticket_subtotal">0.00
                      </span>
                    </div>
                    <div class="col-md-7">
                      <span>IVA (16%)</span>
                    </div>
                    <div class="col-md-5 text-right">
                      $ <span class="" id="ticket_iva">0.00</span>
                    </div>
                    <div class="col-md-7">
                      <span>Total</span>
                    </div>
                    <div class="col-md-5 text-right">
                      $ <span class="" id="ticket_total">0.00</span>
                    </div>
                  </div>
                </div>
              </div>
           </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
  $(document).ready(function(){
    var tableProductosVenta = $('#lstProductosVenta').DataTable({
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