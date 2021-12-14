<h1>{{$modo}} empleado</h1>

@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group">

        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre"
        value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">

    </div>

    <div class="form-group">

        <label for="ApPat">Apellido Paterno</label>
        <input type="text" class="form-control" name="ApPat"
        value="{{isset($empleado->ApPat)?$empleado->ApPat:old('ApPat')}}" id="Nombre"" id="ApPat">

    </div>

    <div class="form-group">

        <label for="ApMat">Apellido Materno</label>
        <input type="text" class="form-control" name="ApMat"
        value="{{isset($empleado->ApMat)?$empleado->ApMat:old('ApMat')}}" id="Nombre"}}" id="ApMat">

    </div>

    <div class="form-group">

        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="Correo"
        value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Nombre"}}" id="Correo">

    </div>

    <div class="form-group">

        <label for="Foto">Foto</label>
            @if(isset($empleado->Foto))
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
            @endif
        <input type="file" class="form-control" name="Foto" value="" id="Foto">

    </div>
    <br>
    <br>
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">

    <a class="btn btn-primary" href="{{url('empleado/')}}">Volver</a>
