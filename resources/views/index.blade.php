@extends('layouts.base') 

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <br>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <br><br>
        <div>
            <a href="{{ route('tasks.create') }}" class="btn-primary text-white">Crear tarea</a>
        </div>
        <br>
    </div>

    @if(Session::get('success'))
    <div class="alert alert-success mt-2">
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif

    <div class="col-12 mt-4">
        @if($tasks->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-sm text-white">
                <thead class="bg-success">
                <tr>
                    <th>Tarea</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>

                @foreach($tasks as $task)
                <tr>
                    <td class="fw-bold">{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->due_date}}</td>
                    <td class="badge fs-6 
                    @if($task->status == 'Pendiente') bg-warning 
                    @elseif($task->status == 'En Proceso') bg-info 
                    @elseif($task->status == 'Completada') bg-success 
                    @else bg-secondary @endif"
            >{{$task->status}}</td>
                    <td>
                        <a href="{{route('tasks.edit', $task)}}" class="btn btn-secondary text-white">Editar</a>

                        <form action="{{route('tasks.destroy', $task)}}" method="post" class="d-inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        {{ $tasks->links() }} <!-- Paginación -->
        @else
        <p class="text-center text-secondary fw-bold mt-4">No existen tareas.</p>
        @endif
    </div>
</div>
@endsection
