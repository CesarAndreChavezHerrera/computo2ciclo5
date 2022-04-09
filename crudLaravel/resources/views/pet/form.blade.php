    Nombre: 
    <input type="text" name="name" id="name" value="{{ isset($pet->name)?$pet->name:'' }}">
    color:
    <input type="text" name="color" id="color" value="{{ isset($pet->color)?$pet->color:'' }}">
    edad:
    <input type="text" name="edad" id="edad" value="{{ isset($pet->edad)?$pet->edad:'' }}">
    
    <button type="submit">Guardar</button>