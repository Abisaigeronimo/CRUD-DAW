@extends('layout.app')

@section('title', 'Editar Puesto de Personal')

@section('content')

<div class="container">
    <h1>Editar Puesto de Personal</h1>

    <form action="{{ route('products.update', $product->rfc) }}" method="POST">
        @csrf
        @method('PATCH') <!-- Método PUT para actualizar el recurso -->

        <div class="mb-3">
            <label for="rfc" class="form-label">RFC</label>
            <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" maxlength="13" required pattern="[A-Z0-9]{10}[0-9A-Z]{3}" value="{{ old('rfc', $product->rfc) }}">
            <small id="rfcHelp" class="form-text text-muted">
                Ingrese su RFC (13 caracteres, solo letras y números).
            </small>
        </div>

        <div class="mb-3">
            <label for="clave_puesto" class="form-label">Clave Puesto</label>
            <input type="text" class="form-control" id="clave_puesto" name="clave_puesto" placeholder="Ingrese la Clave del Puesto" maxlength="10" required value="{{ old('clave_puesto', $product->clave_puesto) }}">
            <small id="clavePuestoHelp" class="form-text text-muted">
                Ingrese la clave del puesto (máximo 10 caracteres).
            </small>
        </div>

        <div class="mb-3">
            <label for="horas_asignadas" class="form-label">Horas Asignadas</label>
            <input type="number" class="form-control" id="horas_asignadas" name="horas_asignadas" placeholder="Horas asignadas" min="0" required value="{{ old('horas_asignadas', $product->horas_asignadas) }}">
            <small id="horasAsignadasHelp" class="form-text text-muted">
                Ingrese el número de horas asignadas (debe ser un número positivo).
            </small>
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso_puesto" class="form-label">Fecha de Ingreso al Puesto</label>
            <input type="datetime-local" class="form-control" id="fecha_ingreso_puesto" name="fecha_ingreso_puesto" required value="{{ old('fecha_ingreso_puesto', \Carbon\Carbon::parse($product->fecha_ingreso_puesto)->format('Y-m-d\TH:i')) }}">
            <small id="fechaIngresoPuestoHelp" class="form-text text-muted">
                Seleccione la fecha y hora de ingreso al puesto.
            </small>
        </div>

        <div class="mb-3">
            <label for="fecha_termino_puesto" class="form-label">Fecha de Término del Puesto</label>
            <input type="datetime-local" class="form-control" id="fecha_termino_puesto" name="fecha_termino_puesto" required value="{{ old('fecha_termino_puesto', \Carbon\Carbon::parse($product->fecha_termino_puesto)->format('Y-m-d\TH:i')) }}">
            <small id="fechaTerminoPuestoHelp" class="form-text text-muted">
                Seleccione la fecha y hora de término del puesto.
            </small>
        </div>

        <div class="mb-3">
            <label for="fecha_de_ratificacion_puesto" class="form-label">Fecha de Ratificación del Puesto</label>
            <input type="datetime-local" class="form-control" id="fecha_de_ratificacion_puesto" name="fecha_de_ratificacion_puesto" required value="{{ old('fecha_de_ratificacion_puesto', \Carbon\Carbon::parse($product->fecha_de_ratificacion_puesto)->format('Y-m-d\TH:i')) }}">
            <small id="fechaRatificacionPuestoHelp" class="form-text text-muted">
                Seleccione la fecha y hora de ratificación del puesto.
            </small>
        </div>

        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Guardar Cambios</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
    </form>
</div>

@endsection