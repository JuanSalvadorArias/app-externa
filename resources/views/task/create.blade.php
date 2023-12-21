  <!-- Modal Crear -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <form action="{{ route('home.store') }}" method="post">
              @csrf
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">CREAR TAREA</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                      <div class="mb-3">
                          <label for="dni" class="form-label">DNI</label>
                          <input type="text" name="dni" class="form-control" id="dni">
                      </div>
                      <div class="mb-3">
                          <label for="titulo" class="form-label">Titulo</label>
                          <input type="text" name="titulo" class="form-control" id="titulo">
                      </div>
                      <div class="mb-3">
                          <label for="descripcion" class="form-label">Descripcion</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="fvencimiento" class="form-label">F. Vencimiento</label>
                          <input type="date" name="fecha_vencimiento" class="form-control" id="fvencimiento">
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
