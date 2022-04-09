    Nombre: 
    <input type="text" name="name" id="name" value="{{ isset($pet->name)?$pet->name:'' }}">
    color:
    <input type="text" name="color" id="color" value="{{ isset($pet->color)?$pet->color:'' }}">
    edad:
    <input type="text" name="age" id="age" value="{{ isset($pet->age)?$pet->age:'' }}">
    
    <button type="submit">Guardar</button>