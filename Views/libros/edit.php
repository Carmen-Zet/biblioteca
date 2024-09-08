<h2>Editar Libro</h2>

<form action="/libros/update/<?= \$libro['id'] ?>" method="post">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" value="<?= \$libro['titulo'] ?>" required>
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">Fecha de Publicación</label>
        <input type="date" class="form-control" name="fecha_publicacion" value="<?= \$libro['fecha_publicacion'] ?>" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" name="precio" value="<?= \$libro['precio'] ?>" required>
    </div>
    <div class="form-group">
        <label for="editorial_id">Editorial</label>
        <input type="text" class="form-control" name="editorial_id" value="<?= \$libro['editorial_id'] ?>" required>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="<?= \$libro['isbn'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar Libro</button>
</form>
