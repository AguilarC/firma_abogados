
@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1113.69px;">

<section class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Usuarios</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
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
                <h3 class="card-title">Listado de Usuarios del sistema</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  
              <tr>
                    <td>Verona Blair</td>
                    <td>verona@gmail.com
                    </td>
                    <td>verona</td>
                    <td>Abogado</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
                        </button>
                    </td>
                  </tr>
                <tr>
                    <td>Trevor Virtue</td>
                    <td>trevor@gmail.com
                    </td>
                    <td>trevor</td>
                    <td>Abogado</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
                        </button>
                    </td>
                  </tr>
                <tr>
                    <td>Daly Harry</td>
                    <td>daly@gmail.com
                    </td>
                    <td>daly</td>
                    <td>Secretario</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
                        </button>
                    </td>
                  </tr>   
                <tr>
                    <td>Peter Stanbridge</td>
                    <td>peter@gmail.com
                    </td>
                    <td>peter</td>
                    <td>Abogado</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
                        </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Mia Wong</td>
                    <td>mia@gmail.com
                    </td>
                    <td>mia</td>
                    <td>Abogado</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
                        </button>
                    </td>
                  </tr>
                  <tr>
                    <td>John Stone</td>
                    <td>john@gmail.com
                    </td>
                    <td>john</td>
                    <td>Secretario</td>
                    <td><button type="button" class="btn  btn-primary btn-sm">
                            <i class="nav-icon fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn  btn-danger btn-sm">
                            <i class="nav-icon fas fa-trash-alt"></i>
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