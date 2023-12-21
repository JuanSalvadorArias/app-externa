  <!-- Modal Crear -->
  <div class="modal fade" id="destroy{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <form action="{{ route('home.destroy', $task->id) }}" method="post">
              @csrf
              @method('DELETE')
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR TAREA</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">
                              Estas Seguro de eliminar la tarea <strong> {{ $task->titulo }} </strong> .
                          </label>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Eliminar</button>
                  </div>
          </form>

      </div>
  </div>
  </div>
