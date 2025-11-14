<?php
require 'config/db.php';
include 'includes/header.php';
require 'includes/funciones.php';
$marcas = obtenerMarca($pdo);
$categorias = obtenerCategoria($pdo);

$id_producto = $_GET["id_producto"];
$stmt = $pdo->prepare("select * from productos where id_producto = ?");
$stmt->execute([$id_producto]);
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_marca = $_POST['id_marca'];
    $id_categoria = $_POST['id_categoria'];

    try {
        $stmt = $pdo->prepare(
            "UPDATE PRODUCTOS
            SET nombre = ?, descripcion =?, precio =?, stock =?, id_marca=?, id_categoria=? 
            WHERE id_producto =?
            "
        );
        $stmt->execute([$nombre, $descripcion, $precio, $stock, $id_marca, $id_categoria, $id_producto]);

        echo "
        <script>
        Swal.fire({
        title: 'Editado Correctamente',
        text: 'Producto Editado Correctamente',
        icon: 'success'
        }).then(()=>window.location='index.php');
        </script>
        ";
    } catch (PDOException $e) {
        $error = addslashes($e->getMessage());
        echo "<script>
        Swal.fire({
        title: 'Error al Guardar',
        text: '$error',
        icon: 'error'
        }).then(()=>window.location='index.php');
        </script>
        ";
    }

    //header("Location: index.php");
    exit;
}
?>
<h2>Actualizar Nuevo Producto➕</h2>

<form method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $producto['nombre'] ?>">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required value="<?= $producto['descripcion'] ?>">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" required value="<?= $producto['precio'] ?>">
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock" required value="<?= $producto['stock'] ?>">
    </div>

    
    <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoria</label>
        <select name="id_categoria" class="form-select">
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat['id_categoria'] ?>" <?= $cat['id_categoria'] == $producto['id_categoria'] ? 'selected' : '' ?>>
                    <?= $cat['nombre'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
     <div class="mb-3">
        <label for="id_marca" class="form-label">Marca</label>
        <select name="id_marca" class="form-select">
            <?php foreach ($marcas as $marca): ?>
                <option value="<?= $cat['id_marca'] ?>" <?= $marca['id_marca'] == $producto['id_marca'] ? 'selected' : '' ?>>
                    <?= $marca['nombre'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php
include 'includes/footer.php';

?>