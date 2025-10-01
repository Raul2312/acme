@extends('admin.layouts.main')
<!-- debe llamarse igualm que el yield -->
@section('contenido')
   <div class="d-flex justify-content-between"> 
    <h1>Planos</h1> 
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
        </button>
    </div>


</div>


</div>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if($errors->any())
`       <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
</div>
    @endif




    <div class="p-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Modulo ID</th>
      <th scope="col">Proyectos Id</th>
      <th scope="col">Numero hoja</th>
      <th scope="col">Actualizacion anterior</th>
      <th scope="col">Planta</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($planos as $item)
    <tr>
        <td>{{$item-> id }}</td>
        <td>{{$item -> modulo_id }}</td>
        <td>{{$item -> proyectos_id}}</td>
        <td>{{$item -> numero_hoja}}</td>
        <td>{{$item -> actualizacion_anterior }}</td>
        <td>{{$item -> planta }}</td>
        
       
       
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="/dashboard/planos" method="POST">
  @csrf

      <div class="modal-body">
        <div class="form-group">
    <label for="modulo_id">modulo_id</label>
    <input type="number" class="form-control" id="modulo_id"name="modulo_id" aria-describedby="emailHelp">
  </div>

    <div class="form-group">
    <label for="proyectos_id">Proyecto_id</label>
    <input type="number" class="form-control" id="proyecto_id" name="proyectos_id" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="numero_hoja">numero_hoja</label>
    <input type="number" class="form-control" id="numero_hoja" name="numero_hoja" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="actualizacion_anterior">Actualizacion anterir</label>
    <input type="text" class="form-control" id="actualizacion_anterior"name="actualizacion_anterior" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="planta">Planta</label>
    <input type="text" class="form-control" id="planta" name="planta" aria-describedby="emailHelp">
  </div>

        

      
      </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script>
  //      alert("Hola mundo")
    </script>
@endsection