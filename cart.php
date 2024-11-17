<?php
include 'config/db.php';
include 'includes/header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $_POST['product_id'];
    $query = "SELECT * FROM product WHERE id = $product_id";
    $result =$conn->query($query);
    $product = $result->fetch_assoc();

    //Cada vez que se añada un producto al carrito se usara la session

    session_start();
    $_SESSION['cart'][] = $product;

}

$cart_items = $_SESSION['cart']?? [];

?>

<h1> Tu carrito de Compras</h1>
<ul>
    <?php
        foreach ($cart_items as $item):?>
        <li> <?php echo $item['name'];?> - <?php echo $item['price'] ?></li>
    <?php endforeach?>
    
</ul>
<a href="chechout.php"> Proceso de Check</a>
<?php include  'includes/footer.php'?>
