
<?php
include 'config/db.php';
include 'includes/header.php';

//creamos la consulta de la base de datos para selecionar 
// la tabla de productos

$query = "SELECT * FROM products";
$result = $conn->query($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymStore</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


<h1>Bievenidos a GymStore</h1>


<!--   Se recorre con un ciclo cada producto existente en la base de datos
       La cual tiene como atributos el nombre, descripcion, el precio y tambien el 
    codigo de referencia-->

    
<div class="product-list">
    <?php while($product = $result->fetch_assoc()): ?>
        <div class="product-item">
            <img src="uploads/products/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <p>$<?php echo $product['price']; ?></p>
            <a href="pages/product.php?id=<?php echo $product['id']; ?>">View Product</a>
        </div>
    <?php endwhile; ?>
</div>
    <?php   include 'includes/footer.php'; ?>
</body>
</html>