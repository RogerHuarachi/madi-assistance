<div class="modal fade" id="departamentDelete{{ $departament->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Departamento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('departaments.destroy', $departament->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="card-body">
                        <label for="">Desea eliminar el departamento</label>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </form>
      </div>
    </div>
</div>