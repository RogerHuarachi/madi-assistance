<div class="modal fade" id="roleCreate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Rol</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('roles.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <div class="card-body">
                  <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Rol" name="name">
                  <br>
                  <div class="form-group">
                      <label>Permisos de Rol</label>
                      <select multiple class="form-control" name="permissions[]">
                          @foreach ($permissions as $permission)
                              <option>{{ $permission->name }}</option>
                          @endforeach
                      </select>
                  </div>
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
