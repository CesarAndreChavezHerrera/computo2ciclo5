<h1>Nueva mascota</h1>

<form action="{{ url('/pet')}}" method="post">
    <!-- token de seguridad -->
    @csrf
    @include('pet.form')
</form>
