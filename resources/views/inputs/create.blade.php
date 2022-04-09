<div class="modal fade" id="inputCreate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Entrada</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('inputs.storeImp') }}" method="POST" class="text-center">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="my-select">Usuario</label>
                        <select id="my-select" class="form-control" name="user_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input class="form-control" type="text" placeholder="Dirección IP" name="ip" required>
                    <br>
                    <input class="form-control" type="date" placeholder="Fecha" name="date" required>
                    <br>
                    <input class="form-control" type="time" placeholder="Hora" name="hour" required>
                    <br>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
</div>
