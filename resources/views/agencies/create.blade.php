<div class="modal fade" id="agencyCreate">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Oficina</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('agencies.store') }}" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <div class="card-body">
                  <input class="form-control" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Oficina" name="name">
                  <br>
                  <input class="form-control" type="text" placeholder="Direccion IP de Oficina" name="ip">
                  <br>
                  <label for="">Hora de entrada</label>
                  <input class="form-control" type="time" placeholder="Hora de Ingreso" name="intro">
                  <br>
                  <label for="">Hora de salida</label>
                  <input class="form-control" type="time" placeholder="Hora de Salida" name="exit">
                  <br>
                  <div class="form-group">
                      <label>Departamento de Oficina</label>
                      <select class="form-control" name="city_id">
                          @foreach ($cities as $city)
                              <option value="{{ $city->id }}">{{ $city->name }}</option>
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
