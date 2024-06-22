@csrf
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $servicio->titulo ?? '') }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $servicio->descripcion ?? '') }}">
</div>
<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
</div>
