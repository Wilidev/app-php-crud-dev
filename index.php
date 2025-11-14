<?php
require 'config/db.php';
include 'includes/header.php';

$stmt = $pdo->query("SELECT p.*, c.nombre AS nombre_categoria, m.nombre AS nombre_marca
FROM productos p
LEFT JOIN categorias c ON p.id_categoria = c.id_categoria
LEFT JOIN marcas m ON p.id_marca = m.id_marca
");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Gestión de Productos</h2>
<a href="create.php" type="button" class="btn btn-success">➕ Nuevo Producto</a>

<table class="table table-hover" ;>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Marca</th>
            <th>Categoria</th>
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
                <td><?php echo $item['nombre_marca']; ?></td>
                <td><?php echo $item['nombre_categoria']; ?></td>
                <td>
                    <div style="display: flex;">
                        <a href="delete.php?id_producto=<?php echo $item['id_producto']; ?>" class="mx-2 btn btn-outline-danger">🗑️</a>
                        <a href="update.php?id_producto=<?php echo $item['id_producto']; ?>" class="mx-2 btn btn-outline-info">🖋️</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- <script>
    Swal.fire({
        title: "Pruducto Guardado",
        text: "Producto Registrado Correctamente",
        icon: "success"
    }).then(()=>window.location='index.php');
</script> -->
<?php
include 'includes/footer.php';

?>