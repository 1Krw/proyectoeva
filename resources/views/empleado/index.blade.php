@extends('layouts.app')
@section('content')

<div class="container">
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dissmisible fade show" role="alert">
    {{Session::get('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table align-middle table-light table-hover text-center">

            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>

                    <td>
                        <img class="img-thumbnail img-fluid rounded-circle" src="{{asset('storage').'/'.$empleado->Foto}}" style="width: 75px; height:75px" alt="">
                    </td>

                    <td>{{$empleado->Nombre}}</td>
                    <td>{{$empleado->ApPat}}</td>
                    <td>{{$empleado->ApMat}}</td>
                    <td>{{$empleado->Correo}}</td>
                    <td>

                        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}"
                            class="btn btn-warning">
                            Editar
                        </a>
                        |
                        <form action="{{url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger" onclick="return confirm('¿Realmente deseas eliminar esto?')"
                            value="Borrar">
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    {!!$empleados->links()!!}
</div>
@endsection
