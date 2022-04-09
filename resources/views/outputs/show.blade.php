<div class="modal fade" id="outputShow{{ $output->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Salida</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover table-responsive-lg">
                <tbody>
                    <tr>
                        <th>Nombre de Uduario</th>
                        <td>{{ $output->input->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Direccion IP</th>
                        <td>{{ $output->ip }}</td>
                    </tr>
                    <tr>
                        <th>Estado de Salida</th>
                        <td>
                          @if ($output->state == 0)
                              Temprano
                          @else
                              Tarde
                          @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Dispositivo</th>
                        <td>{{ $output->phone }}</td>
                    </tr>
                    <tr>
                        <th>Fecha</th>
                        <td>{{ $output->date }}</td>
                    </tr>
                    <tr>
                        <th>Hora</th>
                        <td>{{ $output->hour }}</td>
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
