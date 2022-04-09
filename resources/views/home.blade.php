
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Inicio</h1>
        </div>
      </div>
    </div>
</div>

<section class="content">
  <div class="container-fluid">
    @include('option.error')
    @include('option.validation')
    @include('option.confirmation')
    <div class="card">
      <div class="card-header ui-sortable-handle">
        <h5 class="card-title">Bienvenid@</h5>
      </div>
      <div class="card-body">
        <h5>Sistema de control de asistencia</h5>
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <a class="btn btn-success btn-lg" href="{{ route('inputs.store') }}"><i class="fas fa-minus-circle"></i> Marcar Entrada</a>
          </div>
          <div class="col-md-auto">
              <a class="btn btn-danger btn-lg" href="{{ route('outputs.store') }}"><i class="fas fa-minus-circle"></i> Marcar Salida</a>
          </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal Nacional</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nac as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal Cala Cala</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cc as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal El Paso</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ep as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal Punata</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pu as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal Casco Viejo</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cv as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h5 class="card-title">Sucursal Rio Seco</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light small">
                            <thead class="thead-light">
                                <tr>
                                    <th>Usuario</th>
                                    <th>Acumulado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->total_delayed }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
