<div class="modal fade" id="officeShow{{ $office->id }}">
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
                        <td>{{ $office->name }}</td>
                    </tr>
                    <tr>
                        <th>Hora de Ingreso</th>
                        <td>{{ $office->intro }}</td>
                    </tr>
                    <tr>
                        <th>Hora de Salida</th>
                        <td>{{ $office->exit }}</td>
                    </tr>
                    <tr>
                        <th>Direccion  IP</th>
                        <td>{{ $office->ip }}</td>
                    </tr>
                    <tr>
                        <th>Ubicacion</th>
                        <td>{{ $office->departament->name }}</td>
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
