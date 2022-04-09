<h1>Listado de mascotas</h1>

<!-- vamos a leer la data que se envia en el controlador -->

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Color</th>
            <th>Edad</th>
            <th> accion </th>
        </tr>
    </thead>
    <tbody>
         @foreach($pets as $pet)
            <tr>
                <td>{{ $pet -> id}}</td>
                <td>{{ $pet -> name}}</td>
                <td>{{ $pet -> color}}</td>
                <td>{{ $pet -> edad}}</td>
                <form action="{{url('/pet/'.$pet->id)}}" method='post'>
                    @csrf
                    {{method_field('DELETE')}}
                    <td><input type = 'submit'
                    onclick= "return confirm('Desea eliminar el registro')"
                    value = 'del'
                    />

                </form>
                
            </tr>
        @endforeach
    </tbody>
</table>

<!-- leer la varable pet -->

            
            



<!-- mostrar los elementos como lista -->
<!-- <ul>
    
    @foreach($pets as $pet)
    <td>{{ $pet -> id}}</td>
    <td>{{ $pet -> name}}</td>
    <td>{{ $pet -> color}}</td>
    @endforeach
</ul> -->