
@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1113.69px;">

<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tramites</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Tramites</li>
            </ol>
        </div>
    </div>
</div>
</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Tramites del sistema</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Asunto</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                    <th>Fecha Alta</th>
                    <th>Fecha Fin</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                   <tr>
                    <td>Cambio titularidad</td>
                    <td>Media
                    </td>
                    <td>En proceso</td>
                    <td>31/03/22 </td>
                    <td>---- </td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-success btn-sm">
                            <i class="nav-icon fas fa-check"></i>
                        </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Cambio Apellidos</td>
                    <td>Alta
                    </td>
                    <td>En proceso</td>
                    <td>02/04/22 </td>
                    <td>---- </td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-success btn-sm">
                            <i class="nav-icon fas fa-check"></i>
                        </button>
                    </td>
                  </tr><tr>
                    <td>Tramite Catastro</td>
                    <td>Media
                    </td>
                    <td>finalizado</td>
                    <td>08/05/21 </td>
                    <td>31/12/21 </td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        
                    </td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
        </div>
    </div>
</div>

</section>

</div>
@endsection