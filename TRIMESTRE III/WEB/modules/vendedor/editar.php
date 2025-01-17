<?php
include('../sql/conexion.php');

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE ID_producto=$product_id";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    if(isset($_POST['update'])) {
        $new_name = $_POST['new_name'];
        $new_price = $_POST['new_price'];
        $new_category = $_POST['new_category'];
        $new_stock = $_POST['new_stock'];

        // Imagen

        $dir = "../img/";
        $dirSQL = "/SANSITO-MAPS/modules/img/";
        $idImg = uniqid();
        $extension = pathinfo($_FILES['new_img']['name'], PATHINFO_EXTENSION);
        $fileDir = $dir . $idImg . '.' .$extension;
        $imgFile = $dir . basename($_FILES['new_img']['name']);
        $resultado = move_uploaded_file($_FILES['new_img']['tmp_name'], $fileDir);
        $new_img = $dirSQL . $idImg . '.' . $extension;
        unlink("../../../" . $product["imagen_producto"]);

        // —————————————————————————————————
        
        $update_query = "UPDATE productos SET nombre_producto='$new_name', precio='$new_price', imagen_producto='$new_img',stock_disponible='$new_stock', categoria='$new_category' WHERE ID_producto=$product_id";
        mysqli_query($conn, $update_query);
        header("Location: editar.php?id=$product_id");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Nombre:</label>
        <input type="text" name="new_name" value="<?php echo $product['nombre_producto']; ?>"><br>
        
        <label>Precio:</label>
        <input type="text" name="new_price" value="<?php echo $product['precio']; ?>"><br>

        <label>Stock:</label>
        <input type="text" name="new_stock" value="<?php echo $product['stock_disponible']; ?>"><br>

        <label>Imagen:</label>
        <img src="<?php echo $product['imagen_producto']; ?>" width="100px" heigth="100px">
        <input type="file" id="imagen" name="new_img" accept="image/*" required><br>
        
        <label>Categoría:</label>
        <input type="text" name="new_category" value="<?php echo $product['categoria']; ?>"><br>
        
        <button type="submit" name="update">Actualizar</button><a href="lista.php">Volver</a>
    </form>
</body>

<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin: 0;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        a{
            padding: 10px 20px;
            font-size: 13px;
            margin-left: 10px;
            text-decoration: none;  
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

         a:hover {
            background-color: #45a049;
        } 
</style>
</html>
