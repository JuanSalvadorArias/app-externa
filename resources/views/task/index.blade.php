@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row" class="pt-5">
                <div class="col-md-6">
                    <h3>Lista de Tareas</h3>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal"
                        data-bs-target="#create">
                        Crear Tarea
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DNI</th>
                            <th scope="col">TITULO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">F. VENCIMIENTO</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr class="">
                                <td scope="row">{{ $task->id }}</td>
                                <td>{{ $task->dni }}</td>
                                <td>{{ $task->titulo }}</td>
                                <td>{{ $task->descripcion }}</td>
                                <td>{{ $task->fecha_vencimiento }}</td>
                                <td>{{ $task->estado }}</td>
                                <td>
                                    @if ($task->estado != 'completado')
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $task->id }}">
                                            EDITAR
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#destroy{{ $task->id }}">
                                            ELIMINAR
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#info{{ $task->id }}">
                                            INFO
                                        </button>
                                    @endif

                                </td>
                            </tr>
                            @include('task.edit')
                            @include('task.delete')
                            @include('task.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('task.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
