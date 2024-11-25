@extends('layout.app')

@section('title', 'Products list')

@section ('content')

<div class="container">
<h1> Puestos de personal </h1>

@if (session('success'))
<div class="alert alert-success mt-2">
    {{ session('success') }}
</div>
@endif

<div class="text-end">
<a href="{{route('products.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i>Create</a>
</div>
<table class="table">
<thead>
    <tr>
      <th scope="col">RFC</th>
      <th scope="col">Clave Puesto</th>
      <th scope="col">Horas asignadas</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

@foreach($products as $product)

    <tr>
      <th scope="row"> {{$product->rfc}} </th>
      <td>{{ $product->clave_puesto }}</td>
      <td>{{ $product->horas_asignadas }}</td>
      <td class="text-end">
        <form action="{{route('products.destroy', $product->rfc) }}" method="POST">
          @csrf
          @method('DELETE')
          <a href="{{route('products.show', $product->rfc) }}" class="btn btn-primary me-1"><i class="bi bi-eye"></i> View </a>
          <a href="{{route('products.edit', $product->rfc) }}" class="btn btn-primary me-1"><i class="bi bi-pencil"></i> Edit </a>
          <form action="{{route('products.destroy', $product->rfc) }}" method="POST" class="d-inline">
            @csrf
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas borrar el registro?')"><i class="bi bi-trash"></i> Delete </button>
        </form>
      </td>
    </tr>

@endforeach


    
  </table>

</div>

@endsection