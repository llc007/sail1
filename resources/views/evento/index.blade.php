@extends('layouts.app')
@section('content')

    <div class="container">

        <div id="agenda">
            Calendario
        </div>



    <!-- MODAL PARA MOSTRAR EVENTO -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#evento">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form action="">

                            {!! csrf_field() !!}

                            <div class="mb-3">
                                <label for="id" class="form-label">ID:</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="ID">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Escribe el titulo del evento">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="start" class="form-label">Inicio</label>
                                <input type="date" class="form-control" name="start" id="start" placeholder="Hora de inicio">
                            </div>
                            <div class="mb-3">
                                <label for="end" class="form-label">Inicio</label>
                                <input type="date" class="form-control" name="end" id="end" placeholder="Hora de termino">
                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnGuardar" class="btn btn-success">Guardar</button>
                        <button type="button" id="btnModificar" class="btn btn-warning">Modificar</button>
                        <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
