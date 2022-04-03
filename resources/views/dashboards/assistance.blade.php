
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">Asistencia Dashboard</h2>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>{{ $total }}</h3>

                    <p>Total</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                    <h3>{{ $temprano }}</h3>

                    <p>A Tiempo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>{{ $tarde }}</h3>

                    <p>Con Retrazo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                    <h3>{{ $ausencia }}</h3>

                    <p>Ausente</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-primary collapsed-card show">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Asistencia Hoy</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Agencia</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todays as $today)
                                    <tr>
                                        <td>{{ $today->officeName }}</td>
                                        <td>{{ $today->userName }}</td>
                                        <td>{{ $today->inputDate }}</td>
                                        <td>{{ $today->inputHour }}</td>
                                        <td>
                                            @if ($today->inputState == 0)
                                                Entro Temprano
                                            @else
                                                Entro Tarde
                                            @endif
                                        </td>
                                        <td>{{ $today->outputDate }}</td>
                                        <td>{{ $today->outputHour }}</td>
                                        <td>
                                            @if ($today->outputState == 0)
                                                Salio Temprano
                                            @else
                                                Salio Tarde
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
