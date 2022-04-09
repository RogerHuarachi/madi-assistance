<div class="modal fade" id="agencyEdit{{ $agency->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Oficina</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('agencies.update', $agency->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                    <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Oficina" name="name" value="{{ $agency->name }}">
                    <br>
                    <input class="form-control" type="text" placeholder="Direccion IP de Oficina" name="ip" value="{{ $agency->ip }}">
                    <br>
                    <label for="">Hora de entrada</label>
                    <input class="form-control" type="time" placeholder="Hora de Ingreso" name="intro" value="{{ $agency->intro }}">
                    <br>
                    <label for="">Hora de salida</label>
                    <input class="form-control" type="time" placeholder="Hora de Salida" name="exit" value="{{ $agency->exit }}">
                    <br>
                    <div class="form-group">
                        <label>Departamento de Oficina</label>
                        <select class="form-control" name="city_id">
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
</div>
