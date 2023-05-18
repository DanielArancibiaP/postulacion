<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Agregar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
              <form action="{{ URL::to('save') }}" id="addForm">
                  <div class="mb-3">
                      <label for="">ID</label>
                      <input type="number" name="id" class="form-control" placeholder="Input ID" required>
                  </div>
                  <div class="mb-3">
                      <label for="lastname">Nombre Identificador</label>
                      <input type="text" name="nombreIndicador" class="form-control" placeholder="Nombre Indicador" required>
                  </div>
                  <div class="mb-3">
                    <label for="lastname">codigo Indicador</label>
                    <input type="text" name="codigoIndicador" class="form-control" placeholder="codigo Indicador" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Unidad de medida</label>
                    <input type="text" name="unidadMedidaIndicador" class="form-control" placeholder="Unidad de medida" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Valor Indicador</label>
                    <input type="text" name="valorIndicador" class="form-control" placeholder="ej: 29999.6" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Fecha Indicador</label>
                    <input type="date" name="fechaIndicador"  min="<?php echo date("Y-m-d") ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Tiempo Indicador</label>
                    <input type="time" name="tiempoIndicador" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Origen Indicador</label>
                    <input type="text" name="origenIndicador" class="form-control" placeholder="Origen indicador" required>
                </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
   
  <!-- Edit Modal -->
  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Editar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
              <form action="{{ URL::to('update') }}" id="editForm">
                  <input type="hidden" id="memid" name="id">
                 
                <div class="mb-3">
                    <label for="nombreIndicador">Nombre Identificador</label>
                    <input type="text" name="nombreIndicador" id="nombreIndicador" class="form-control" placeholder="Nombre Indicador" required>
                </div>
                <div class="mb-3">
                  <label for="lastname">codigo Indicador</label>
                  <input type="text" name="codigoIndicador" maxlength="2" id="codigoIndicador" class="form-control" placeholder="codigo Indicador" required>
              </div>
              <div class="mb-3">
                  <label for="lastname">Unidad de medida</label>
                  <input type="text" name="unidadMedidaIndicador" id="unidadMedidaIndicador" class="form-control" placeholder="Unidad de medida" required>
              </div>
              <div class="mb-3">
                  <label for="lastname">Valor Indicador</label>
                  <input type="text" name="valorIndicador" id="valorIndicador" class="form-control" placeholder="ej: 29999.6" required>
              </div>
              <div class="mb-3">
                  <label for="lastname">Fecha Indicador</label>
                  <input type="date" name="fechaIndicador" id="fechaIndicador"  min="<?php echo date("Y-m-d") ?>" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label for="lastname">Tiempo Indicador</label>
                  <input type="time" name="tiempoIndicador" id="tiempoIndicador" class="form-control" required>
              </div>
              <div class="mb-3">
                  <label for="lastname">Origen Indicador</label>
                  <input type="text" name="origenIndicador" id="origenIndicador" class="form-control" placeholder="Origen indicador" required>
              </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
   
  <!-- Delete Modal -->
  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Eliminar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <h4 class="text-center">Estas seguro que quieres borrar este registro?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" id="deletereg" class="btn btn-danger">Borrar</button>
        </div>
      </div>
    </div>
  </div>