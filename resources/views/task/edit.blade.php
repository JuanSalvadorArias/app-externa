  <!-- Modal Crear -->
  <div class="modal fade" id="edit{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <form action="{{ route('home.update', $task->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR TAREA</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="dni" class="form-label">DNI</label>
                          <input type="text" name="dni" class="form-control" id="dni"
                              value="{{ $task->dni }}">
                      </div>
                      <div class="mb-3">
                          <label for="titulo" class="form-label">Titulo</label>
                          <input type="text" name="titulo" class="form-control" id="titulo"
                              value="{{ $task->titulo }}">
                      </div>
                      <div class="mb-3">
                          <label for="descripcion" class="form-label">Descripcion</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="2" value="{{ $task->descripcion }}">{{ $task->descripcion }}</textarea>
                      </div>
                      <div class="mb-3">
                          <label for="fvencimiento" class="form-label">F. Vencimiento</label>
                          <input type="date" name="fecha_vencimiento" class="form-control" id="fvencimiento"
                              value="{{ $task->fecha_vencimiento }}">
                      </div>
                      <div>
                          <label>ESTADO</label>
                          <select class="form-select" aria-label="Default select example" name="estado">
                              <option selected>seleccionar estado</option>
                              <option value="1" <?= $task->estado === 'pendiente' ? 'selected' : '' ?>>Pendiente
                              </option>
                              <option value="2" <?= $task->estado === 'en progreso' ? 'selected' : '' ?>>En
                                  Progreso</option>
                              <option value="3" <?= $task->estado === 'completado' ? 'selected' : '' ?>>Completado
                              </option>
                          </select>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
          </form>

      </div>
  </div>
  </div>
