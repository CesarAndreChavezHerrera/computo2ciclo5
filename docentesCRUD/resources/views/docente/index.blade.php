

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Listado de inicio</title>
</head>
<body>
   
    <div class="container">
         
    <br>
        <h1>Lista de docentes registrados</h1> 
        <br>
        
        <a href="/docente/create">Ir para crear un nuevo registro</a>
        <table class="table ">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Direccion</th>
                <th scope="col">Materia Impartida</th>
                <th scope="col">Institucion destacado</th>
                <th scope="col">Accion 1</th>
                <th scope="col">Accion 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docentes as $x)
                <tr>
                    <td>{{ $x ->id }}</td>
                    <td>{{ $x ->Nombres }}</td>
                    <td>{{ $x ->Apellidos }}</td>
                    <td>{{ $x ->Edad }}</td>
                    <td>{{ $x ->Correo_electronico }}</td>
                    <td>{{ $x ->Direccion }}</td>
                    <td>{{ $x ->Materia }}</td>
                    <td>{{ $x ->Institucion }}</td>
                    <td>
                       <a class="btn btn-success" href="docente/{{$x ->id}}/edit">editar</a>
                    </td>


                    <td>
                        <form action="{{url('/docente/'.$x->id)}}" method='post'>
                            @csrf
                            {{method_field('DELETE')}}
                            
                            <input 
                            type = 'submit'
                            onclick= "return confirm('Desea eliminar el registro')"
                            class="btn btn-warning"
                            value = 'Eliminar'
                            
                            />

                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>