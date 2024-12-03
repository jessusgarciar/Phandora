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
        <div class="row">
          <div class="col-md-6">
            <h1 class="m-0">Administar Categorías</h1>
          </div><!-- /.col -->
          <div class="col-md-6">
            <ol class="breadcrumb float-md-right">
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
        <div class="content pb-2">
          <div class="row p-0 m-0">
            <div class="col-md-8">
              <div class="card bg-dark card outline shadow">
                <div class="card-header">
                  <h6 class="card-tittle"><i class="fas fa-list"> Listado de Categorías</i></h6>
                </div>
                <div class="card-body">
                  <table id="lstCategorias" class="display nowrap table-striped w-100 shadow rounded">
                    <thead class="text-left">
                      <th>Id</th>
                      <th>Categoria</th>
                      <th>F. Creación</th>
                      <th>F. Actualización</th>
                      <th class="text-center">Opciones</th>
                    </thead>
                    <tbody class="small text left"></tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-dark card-outline shadow">
                <div class="card-header">
                  <h6 class="card-tittle"><i class="fas fa-edit"> Registro de Categorías</i></h6>
                </div>
                <div class="card-body">
                  <form action="" class="needs-validation">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-2">
                          <label class="col-form-label" for="iptCategoria">
                            <i class="fas fa-dumpster fs-6"></i>
                            <span class="small">Categoría</span><span class="text-danger">*</span>
                          </label>
                          <input type="text" class="form-control form-control-sm" id="iptCategoria" name="iptCategoria" placeholder="Ingrese la Categoría" required>
                          <div class="invalid-feedback">Debe ingresar la categoria</div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-2">
                          <label class="col-form-label" for="selMedida">
                            <i class="fas fa-file-alt fs-6"></i>
                            <span class="small">Medida</span><span class="text-danger">*</span>
                          </label>
                          <select name="" id="" class="form-select form-select-sm" aria-label="form-select-sm example" id="selMedida" required>
                            <option value="">--Selecciona una categoria--</option>
                            <option value="0">Unidades</option>
                            <option value="1">Kilogramos</option>
                          </select>
                          <div class="invalid-feedback">Seleccione una medida</div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-2">
                            <a style="cursor:pointer;" class="btn btn-primary btn-sm w-100" id="btnRegistrarCategoria">Registrar Categoría</a>
                        </div>
                      </div>
                    </div>
                  </form>
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
    var tableCategorias = $('#lstCategorias').DataTable({});
  })
</script>
</body>
</html>