@extends('layouts.base') 

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar Tarea</h2>
        </div>
        <div>
            <br>
            <a href="{{ route('tasks.index') }}" class="btn-primary text-white">Volver</a>
        <br>
        </div> <br>
    </div>

    

    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>¡Te falto rellenar algo!</strong>...<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('tasks.update', $task ) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" value="{{$task->title}}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción...">"{{$task->description}}"</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="" value={{$task->due_date}}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente" @selected( "Pendiente" == $task->status)>Pendiente</option>
                        <option value="En Proceso" @selected( "En Proceso" == $task->status)>En Proceso</option>
                        <option value="Completada" @selected( "Completada" == $task->status)>Completada</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <br>
                <button type="submit" class="btn-primary text-white">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection