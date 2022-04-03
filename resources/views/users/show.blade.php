<div class="modal fade" id="userShow{{ $user->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover table-responsive">
                <tbody>
                    <tr>
                        <th>Nombre de usuario</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Nombre de Equipo</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Contraseña</th>
                        <td>{{ $user->password }}</td>
                    </tr>
                    <tr>
                        <th>Rol</th>
                        <td>
                          @foreach ($user->roles as $role)
                            <span class="badge bg-primary">{{ $role->name }}</span>
                          @endforeach
                        </td>
                    </tr>
                    @if ( $user->office_id != NULL )
                        <tr>
                            <th>Lugar de trabajo</th>
                            <td>{{ $user->office->name }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
