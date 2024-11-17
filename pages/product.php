<?php
include '../config/db.php';
include '../includes/header.php';


/* Se realiza la siguiente consulta para asociar cada id del producto registrado
 */

$id =$_GET['id'];

$query = "SELECT * FROM product WHERE id = $id";

$result = $conn->query($query);
$product = $result->fetch_assoc();

?>

<div class="product-detail">
    <h1><?php echo $product['name']; ?></h1>
    <img src="../uploads/products/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
    <p><?php echo $product['description']; ?></p>
    <p>$<?php echo $product['price']; ?></p>
    <form action="../cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>