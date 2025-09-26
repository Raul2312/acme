@extends('admin.layouts.main')
<!-- debe llamarse igualm que el yield -->
@section('contenido')
    <h1>Usuarios</h1>
    <div class="p-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Password</th>
      <th scope="col">Tipo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($usuarios as $item)
    <tr>
        <td>{{$item-> id }}</td>
        <td>{{$item -> nombre }}</td>
        <td>{{$item -> apellido}}</td>
        <td>{{$item -> email}}</td>
        <td>{{$item -> telefono }}</td>
         <td>************</td>
        <td>{{$item -> tipo }}</td>
       
        <td>
            <button class="btn btn-danger">
                x
            </button>
        </td>
    </tr>

   @endforeach
  </tbody>
</table>
    </div>
@endsection

@section('scripts')
    <script>
        alert("Hola mundo")
    </script>
@endsection