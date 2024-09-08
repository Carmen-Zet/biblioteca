<h2>Listado de Libros</h2>
<a href="/libros/create" class="btn btn-success">Agregar Libro</a>
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Fecha Publicación</th>
            <th>Precio</th>
            <th>Editorial</th>
            <th>ISBN</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (\$libros as \$libro): ?>
        <tr>
            <td><?= \$libro['titulo'] ?></td>
            <td><?= \$libro['fecha_publicacion'] ?></td>
            <td><?= \$libro['precio'] ?></td>
            <td><?= \$libro['editorial_id'] ?></td>
            <td><?= \$libro['isbn'] ?></td>
            <td>
                <a href="/libros/edit/<?= \$libro['id'] ?>" class="btn btn-primary">Editar</a>
                <a href="/libros/delete/<?= \$libro['id'] ?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
