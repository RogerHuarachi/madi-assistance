
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Entradas</h1>
        </div>
        <div class="col-sm-6">
            @can('inputs.store')
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inputCreate"><i class="fas fa-plus"></i></button>
                </ol>
                {{-- <ol class="breadcrumb float-sm-right pr-2">
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#inputImport"><i class="fas fa-upload"></i></button>
                </ol> --}}
            @endcan
            @can('inputs.destroy')
                <ol class="breadcrumb float-sm-right pr-2">
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inputDeleteAll"><i class="fas fa-minus"></i></button>
                </ol>
            @endcan
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
                                @foreach ($inputs as $input)
                                <tr>
                                    <td>{{ $input->id }}</td>
                                    <td>{{ $input->user->name }}</td>
                                    <td>{{ $input->ip }}</td>
                                    <td>{{ $input->date }}</td>
                                    <td>{{ $input->hour }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#inputShow{{ $input->id }}"><i class="fas fa-eye"></i></button>
                                            @include('inputs.show')
                                            @can('inputs.destroy')
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#inputEdit{{ $input->id }}"><i class="fas fa-pen"></i></button>
                                                @include('inputs.edit')
                                            @endcan
                                            @can('inputs.destroy')
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#inputDelete{{ $input->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('inputs.delete')
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
@include('inputs.create')
@include('inputs.deleteall')
{{-- @include('inputs.import') --}}
@endsection
