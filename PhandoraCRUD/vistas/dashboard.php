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
            <h1 class="m-0">Tablero Principal</h1>
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
      
        <div class="row">
            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalProductos">0</h4>

                    <p>Productos registrados</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-clipboard"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalCompras">0</h4>

                    <p>Total Compras</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-cash"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalVentas">0</h4>

                    <p>Total Ventas</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-cart"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalGanancias">0</h4>

                    <p>Total Ganancias</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-pie"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalProductosMinStock">0</h4>

                    <p>Productos poco stock</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-remove-circle"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
              <!-- small box -->
              <div class="small-box bg-dark">
                  <div class="inner">
                    <h4 id="totalVentasHoy">0</h4>

                    <p>Ventas del día</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-calendar"></i>
                  </div>
                  <a style="cursor:pointer;" class="small-box-footer">Más Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="row">
          <div class="col-12">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Ventas del Mes: </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 300px; max-height: 350px; width: 100%">

                  </canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content -->
</body>
</html>