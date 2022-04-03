<div class="modal fade" id="officeEdit{{ $office->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Oficina</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('offices.update', $office->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                    <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Oficina" name="name" value="{{ $office->name }}">
                    <br>
                    <input class="form-control" type="text" placeholder="Direccion IP de Oficina" name="ip" value="{{ $office->ip }}">
                    <br>
                    <label for="">Hora de entrada</label>
                    <input class="form-control" type="time" placeholder="Hora de Ingreso" name="intro" value="{{ $office->intro }}">
                    <br>
                    <label for="">Hora de salida</label>
                    <input class="form-control" type="time" placeholder="Hora de Salida" name="exit" value="{{ $office->exit }}">
                    <br>
                    <div class="form-group">
                        <label>Departamento de Oficina</label>
                        <select class="form-control" name="departament_id">
                            @foreach ($departaments as $departament)
                                <option value="{{ $departament->id }}">{{ $departament->name }}</option>
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
