<div class="modal fade" id="inputDeleteAll">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Entrada</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <label for="">Desea eliminar todas las entradas</label>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <form action="{{ route('inputs.destroyall') }}" method="GET">
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>
