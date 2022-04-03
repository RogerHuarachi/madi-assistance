
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Descargar Tabla</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive table-responsive">
                        <table id="example1" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Agencia</th>
                                    <th>Entrada</th>
                                    <th>Salida</th>
                                    <th>Ip</th>

                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Equipo</th>

                                    <th>Fecha Ent</th>
                                    <th>Hora Ent</th>
                                    <th>Estado Ent</th>
                                    <th>Ip Ent</th>
                                    <th>Equipo Ent</th>
                                    
                                    <th>Fecha Sal</th>
                                    <th>Hora Sal</th>
                                    <th>Estado Sal</th>
                                    <th>Ip Sal</th>
                                    <th>Equipo Sal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todays as $today)
                                    <tr>
                                        <td>{{ $today->officeName }}</td>
                                        <td>{{ $today->officeIntro }}</td>
                                        <td>{{ $today->officeExit }}</td>
                                        <td>{{ $today->officeIp }}</td>

                                        <td>{{ $today->userName }}</td>
                                        <td>{{ $today->userEmail }}</td>
                                        <td>{{ $today->userPhone }}</td>

                                        <td>{{ $today->inputDate }}</td>
                                        <td>{{ $today->inputHour }}</td>
                                        <td>
                                            @if ($today->inputState == 0)
                                                Temprano
                                            @else
                                                Tarde
                                            @endif
                                        </td>
                                        <td>{{ $today->inputIp }}</td>
                                        <td>{{ $today->inputPhone }}</td>

                                        <td>{{ $today->outputDate }}</td>
                                        <td>{{ $today->outputHour }}</td>
                                        <td>
                                            @if ($today->outputState == 0)
                                                Temprano
                                            @else
                                                Tarde
                                            @endif
                                        </td>
                                        <td>{{ $today->outputIp }}</td>
                                        <td>{{ $today->outputPhone }}</td>
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

