@extends('layouts.app')

@section('content')
<div class="container">
    @include('option.error')
    @include('option.validation')
    @include('option.confirmation')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REGISTRARSE</div>

                <div class="card-body">
                    <form action="{{ route('registerStore') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="modal-body">
                            <div class="card-body">
                                <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre Completo" name="name">
                                <br>
                                <input class="form-control" type="email" placeholder="Email" name="email">
                                <br>
                                <input class="form-control" type="password" placeholder="Contraseña" name="password">
                                <br>
                                <div class="form-group">
                                    <label>Rol de Usuario</label>
                                    <select class="form-control" name="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Oficinas</label>
                                    <select class="form-control" name="agency_id">
                                        @foreach ($agencies as $agency)
                                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
