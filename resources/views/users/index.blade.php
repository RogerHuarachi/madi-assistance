
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Usuarios</h1>
        </div>
        <div class="col-sm-6">
            @can('users.update')    
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#userCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    <th>Email</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#userShow{{ $user->id }}"><i class="fas fa-eye"></i></button>
                                                @include('users.show')
                                                @can('users.update')
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#userEdit{{ $user->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('users.edit')
                                                @endcan
                                                @can('users.destroy')
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#userDelete{{ $user->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('users.delete')
                                                @endcan
                                            </div>
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

@include('users.create')
@endsection

