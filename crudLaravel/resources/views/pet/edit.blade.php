<h1>Editar los registros de mascotas</h1>

<!-- Nombre: 
    <input type="text" name="name" id="name">
    color:
    <input type="text" name="color" id="color">
    <button type="submit">Guardar</button> -->




    <form action="{{ url('/pet/'.$pet->id) }}" method="post">
    <!-- token de seguridad -->
    @csrf
    {{ method_field('PUT') }}
    @include('pet.form')
</form>