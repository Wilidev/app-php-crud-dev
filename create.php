<?php
require 'config/db.php';
require 'includes/funciones.php';
include 'includes/header.php';

$marcas =obtenerMarca($pdo);
$categorias =obtenerCategoria($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id_marca = $_POST['id_marca'];
    $id_categoria = $_POST['id_categoria'];

    try {
        $stmt = $pdo->prepare(
            "INSERT INTO productos (nombre, descripcion, precio, stock, id_categoria, id_marca) 
        VALUES (?,?,?,?,?,?)"
        );
        $stmt->execute([$nombre, $descripcion, $precio, $stock, $id_categoria, $id_marca]);

        echo "
        <script>
        Swal.fire({
        title: 'Pruducto Guardado',
        text: 'Producto Registrado Correctamente',
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
        icon: 'Error'
        }).then(()=>window.location='index.php');
        </script>
        ";
    }

    //header("Location: index.php");
    exit;
}
?>
<h2>Agregar Nuevo Producto➕</h2>

<form method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" required>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock" required>
    </div>

    <div class="mb-3">
        <label for=" marca">Marca</label>
            <select name="id_marca" class="form-select" aria-label="Default select example">
                <option selected>Selecione una marca</option>
                <?php foreach($marcas as $item): ?>
                <option value="<?= $item ['id_marca'] ?>" ><?= $item ['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
    </div>

    <div class="mb-3">
        <label for=" categoria">Categorias</label>
            <select name="id_categoria" class="form-select" aria-label="Default select example">
                <option selected>Selecione una catogoria</option>
                <?php foreach($categorias as $item): ?>
                <option value="<?= $item ['id_categoria'] ?>" ><?= $item ['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>



<?php
include 'includes/footer.php';

?>