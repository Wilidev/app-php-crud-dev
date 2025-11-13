<?php
require 'config/db.php';
include 'includes/header.php';

$stmt = $pdo->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Gestión de Productos</h2>
<a href="create.php" type="button" class="btn btn-success">➕ Nuevo Producto</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $item) : ?>
            <tr>
                <th scope="row"><?php echo $item['id_producto']; ?></th>
                <td><?php echo $item['nombre']; ?></td>
                <td><?php echo $item['descripcion']; ?></td>
                <td><?php echo $item['precio']; ?></td>
                <td><?php echo $item['stock']; ?></td>
                <td>
                    <div style="display: flex;">
                        <a href="delete.php?id_producto=<?php echo $item['id_producto']; ?>" class="mx-2 btn btn-outline-danger">🗑️</a>
                        <a href="#" class="mx-2 btn btn-outline-info">🖋️</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script>
    Swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success"
    });
</script>

<?php
include 'includes/footer.php';

?>