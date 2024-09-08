<h2>Agregar Nuevo Libro</h2>

<form action="/libros/store" method="post">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">Fecha de Publicación</label>
        <input type="date" class="form-control" name="fecha_publicacion" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" name="precio" required>
    </div>
    <div class="form-group">
        <label for="editorial_id">Editorial</label>
        <input type="text" class="form-control" name="editorial_id" required>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" name="isbn" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Libro</button>
</form>
