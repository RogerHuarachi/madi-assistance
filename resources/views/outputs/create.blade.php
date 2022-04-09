<div class="modal fade" id="outputCreate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Salida</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('outputs.storeOut') }}" method="POST" class="text-center">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="card-body">

                    <input class="form-control" type="text" placeholder="Id Entrada" name="input_id" required>
                    <br>
                    <input class="form-control" type="text" placeholder="Dirección IP" name="ip" required>
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
