@extends('layout.app')

@section('title', 'Crear Puesto de Personal')

@section('content')

<div class="container">
    <h1>Mostrar datos del puesto </h1>
        <div>
<b>RFC:</b> {{ $product-> rfc }}
        </div>

        <div>
         <b>Clave Puesto:</b> {{ $product-> clave_puesto }}
         </div>

    <div>
    <b>Horas asignadas:</b> {{ $product-> horas_asignadas }}
 </div>

    <div>
 <b>Fecha de ingreso puesto:</b> {{ $product-> fecha_ingreso_puesto }}
 </div>
<div>
<b>Fecha de término puesto:</b> {{ $product-> fecha_termino_puesto }}
</div>
<div>
<b>Fecha de ratificación puesto:</b> {{ $product-> fecha_de_ratificacion_puesto }}
</div>

<div>
<b>Created at:</b> {{ $product-> created_at }}
</div>
<div>
    <b>Updated at:</b> {{ $product-> updated_at }}
    </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Regresar</a>
    </form>
</div>

@endsection