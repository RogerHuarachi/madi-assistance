<div class="modal fade" id="inputEdit{{ $input->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Entrada</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('inputs.update', $input->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="user_id" value="{{ $input->user_id }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="ip" value="{{ $input->ip }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="phone" value="{{ $input->phone }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="date" value="{{ $input->date }}" required>
                  <br>
                  <input class="form-control" type="text" placeholder="Nombre de Rol" name="hour" value="{{ $input->hour }}" required>
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
