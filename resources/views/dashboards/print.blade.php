
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
                                    <th>Equipo</th>

                                    <th>Fecha Ent</th>
                                    <th>Hora Ent</th>
                                    <th>Estado Ent</th>
                                    <th>Ip Ent</th>
                                    <th>Equipo Ent</th>
                                    <th>Retardo</th>

                                    <th>Fecha Sal</th>
                                    <th>Hora Sal</th>
                                    <th>Estado Sal</th>
                                    <th>Ip Sal</th>
                                    <th>Equipo Sal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inputs as $input)
                                    <tr>
                                        <td>{{ $input->user->agency->name }}</td>
                                        <td>{{ $input->user->agency->intro }}</td>
                                        <td>{{ $input->user->agency->exit }}</td>
                                        <td>{{ $input->user->agency->ip }}</td>

                                        <td>{{ $input->user->name }}</td>
                                        <td>{{ $input->user->phone }}</td>

                                        <td>{{ $input->date }}</td>
                                        <td>{{ $input->hour }}</td>
                                        <td>
                                            @if ($input->state == 0)
                                                Temprano
                                            @else
                                                Tarde
                                            @endif
                                        </td>
                                        <td>{{ $input->ip }}</td>
                                        <td>{{ $input->phone }}</td>

                                        <td>
                                            @if ($input->delayed)
                                                {{ $input->delayed }}
                                            @endif
                                        </td>

                                        <td>
                                            @if ($input->output)
                                                {{ $input->output->date }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($input->output)
                                                {{ $input->output->hour }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($input->output)
                                                @if ($input->output->state == 0)
                                                    Temprano
                                                @else
                                                    Tarde
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if ($input->output)
                                                {{ $input->output->ip }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($input->output)
                                                {{ $input->output->phone }}
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

