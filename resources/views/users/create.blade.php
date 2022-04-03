<div class="modal fade" id="userCreate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('users.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
                <div class="card-body">
                    <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Usuario" name="name">
                    <br>
                    <input class="form-control" type="text" placeholder="Nombre de Equipo" name="phone">
                    <br>
                    <input class="form-control" type="email" placeholder="Email" name="email">
                    <br>
                    <input class="form-control" type="password" placeholder="Contraseña" name="password">
                    <br>
                    <div class="form-group">
                        <label>Rol de Usuario</label>
                        <select class="form-control" name="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Oficinas</label>
                        <select class="form-control" name="office_id">
                            @foreach ($offices as $office)
                                <option value="{{ $office->id }}">{{ $office->name }}</option>
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
