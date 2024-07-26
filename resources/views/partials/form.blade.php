@csrf
<tr>
    <td colspan="2">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Seleccione archivo</label>
        </div>
    </td>
</tr>
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