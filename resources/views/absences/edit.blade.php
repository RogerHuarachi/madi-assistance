<div class="modal fade" id="absenceEdit{{ $absence->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Editar Oficina</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('agencies.update', $absence->id) }}" method="POST" class="text-center">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label>Usuario</label>
                        <select class="form-control" name="user_id">
                            <option value="{{ $absence->user->id }}">{{ $absence->user->name }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="type">
                            <option>{{ $absence->type }}</option>
                            <option>Vacaciones</option>
                            <option>Subito</option>
                            <option>Baja Medica</option>
                        </select>
                    </div>
                    <br>
                    <input class="form-control" type="date" placeholder="Fecha" name="date" value="{{ $absence->date }}">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>
