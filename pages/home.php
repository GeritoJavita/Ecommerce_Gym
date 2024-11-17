<?php include '../includes/header.php'; ?>

<main>
    <h1>Welcome to GymStore!</h1>
    <p>Explore our top fitness supplements below:</p>

    <div class="product-list">
        <?php
        $result = $conn->query("SELECT * FROM products");
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="/uploads/products/'.$row['image'].'" alt="'.$row['name'].'">';
            echo '<h3>'.$row['name'].'</h3>';
            echo '<p>'.$row['description'].'</p>';
            echo '<p>$'.$row['price'].'</p>';
            echo '<a href="/pages/product.php?id='.$row['id'].'">View Product</a>';
            echo '</div>';
        }
        ?>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
