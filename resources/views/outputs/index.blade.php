
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Salidas</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @include('option.error')
        @include('option.validation')
        @include('option.confirmation')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Usuario</th>
                                    <th>Direccion IP</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outputs as $output)
                                    <tr>
                                        <td>{{ $output->id }}</td>
                                        <td>{{ $output->user->name }}</td>
                                        <td>{{ $output->ip }}</td>
                                        <td>{{ $output->date }}</td>
                                        <td>{{ $output->hour }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#outputShow{{ $output->id }}"><i class="fas fa-eye"></i></button>
                                                @include('outputs.show')
                                                @can('outputs.destroy')
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#outputDelete{{ $output->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('outputs.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
