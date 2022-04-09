<div class="modal fade" id="outputEdit{{ $output->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar SAlida</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('outputs.update', $output->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="input_id" value="{{ $output->input_id }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="ip" value="{{ $output->ip }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="phone" value="{{ $output->phone }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="date" value="{{ $output->date }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="hour" value="{{ $output->hour }}" required>
                  <br>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
</div>
