
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
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <a class="btn btn-success btn-lg" href="{{ route('inputs.store') }}"><i class="fas fa-plus-circle"></i> Marcar Entrada</a>
          </div>
          <div class="col-md-auto">
              <a class="btn btn-danger btn-lg" href="{{ route('outputs.store') }}"><i class="fas fa-plus-circle"></i> Marcar Salida</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
