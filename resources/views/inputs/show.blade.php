<div class="modal fade" id="inputShow{{ $input->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Rol</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover table-responsive-lg">
                <tbody>
                    <tr>
                        <th>Nombre de Uduario</th>
                        <td>{{ $input->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Direccion IP</th>
                        <td>{{ $input->ip }}</td>
                    </tr>
                    <tr>
                      <th>Estado de Ingreso</th>
                      <td>
                        @if ($input->state == 0)
                            Temprano
                        @else
                            Tarde
                        @endif
                      </td>
                    </tr>
                    <tr>
                        <th>Dispositivo</th>
                        <td>{{ $input->phone }}</td>
                    </tr>
                    <tr>
                        <th>Fecha</th>
                        <td>{{ $input->date }}</td>
                    </tr>
                    <tr>
                        <th>Hora</th>
                        <td>{{ $input->hour }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
