
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Roles</h1>
        </div>
        <div class="col-sm-6">
            @can('roles.store')
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#roleCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#roleShow{{ $role->id }}"><i class="fas fa-eye"></i></button>
                                                @include('roles.show')
                                                @can('roles.update')
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#roleEdit{{ $role->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('roles.edit')
                                                @endcan
                                                @can('roles.destroy')
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#roleDelete{{ $role->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('roles.delete')
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

@include('roles.create')
@endsection
