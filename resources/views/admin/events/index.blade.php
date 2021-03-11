@extends('adminlte::page')

@section('title', 'Xamapan')

@section('css')    
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
       
@stop

@section('content_header')
    <h1>Calendario de eventos</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-10">
          <div id="calendar"> </div>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
  </div>
  {{-- 
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>
    --}}
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>
            ID: 
            <input type="text" name="txtID" id="txtID">
            <br>
            Fecha:
            <input type="text" name="txtFecha" id="txtFecha">
            <br>
        </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label>Titulo:</label> 
              <input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
            </div>
            <div class="form-group col-md-4">
              <label>Hora:</label> 
              <input type="time" min="07:00" max="19:00" step="600" class="form-control" name="txtHora" id="txtHora">
            </div>
            <div class="form-group col-md-12">
              <label>Descripcion:</label> 
              <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label>Color:</label> 
              <input type="color" class="form-control" name="txtColor" id="txtColor">
            </div>   
          </div>
          
        </div>
        <div class="modal-footer">
        
            <button id="btnAgregar" class="btn btn-success">Agregar</button>
            <button id="btnModificar" class="btn btn-success">Modificar</button>
            <button id="btnEliminar" class="btn btn-danger">Eliminar</button>
            <button id="btnCancelar" data-dismiss="modal" class="btn btn-primary">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
  <script src="{{ asset('js/fullcalendar.js') }}"></script>
  <script>
    var url_="{{ url('admin/events') }}";
    var url_show="{{ url('admin/events/show') }}";
  </script>
  <script src="{{ asset('js/events.js') }}"></script>  
@stop
