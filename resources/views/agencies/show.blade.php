<div class="modal fade" id="agencyShow{{ $agency->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Oficina</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover table-responsive-lg">
                <tbody>
                    <tr>
                        <th>Nombre de Oficina</th>
                        <td>{{ $agency->name }}</td>
                    </tr>
                    <tr>
                        <th>Hora de Ingreso</th>
                        <td>{{ $agency->intro }}</td>
                    </tr>
                    <tr>
                        <th>Hora de Salida</th>
                        <td>{{ $agency->exit }}</td>
                    </tr>
                    <tr>
                        <th>Direccion  IP</th>
                        <td>{{ $agency->ip }}</td>
                    </tr>
                    <tr>
                        <th>Ubicacion</th>
                        <td>{{ $agency->city->name }}</td>
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
