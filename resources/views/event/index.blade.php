@extends('layouts.app')

@section('content')

<div class="container">

    <div id="calendar"></div>

</div>  
  <!-- Modal -->
  <div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="">

                  {!! csrf_field() !!}

                    <div class="form-group d-none">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Titulo del evento">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="start">Empieza</label>
                    <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                    <label for="end">Termina</label>
                    <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

            </form>



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btnSave">Guardar</button>
            <button type="button" class="btn btn-warning" id="btnEdit">Modificar</button>
            <button type="button" class="btn btn-danger" id="btnDelete">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
    
@endsection